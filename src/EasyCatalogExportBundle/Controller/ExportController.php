<?php

namespace EasyCatalogExportBundle\Controller;

use Pimcore\Controller\FrontendController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Carbon\Carbon;
use Pimcore\Model;
use Pimcore\Model\DataObject;
use Pimcore\Tool\Admin as AdminTool;
use phpseclib\Net\SFTP;
use ZipArchive;
use Pimcore\Config;
use EasyCatalogExportBundle\Lib\EasyCatalogLogger;
use Pimcore\Model\User;

class ExportController extends FrontendController {

    /**
     * @Route("/admin/EasyCatalogExport/export/tree")
     */
    public function treeAction() {
        try {
            $treeData = [];
            $exportObj = new \Pimcore\Model\DataObject\EasyCatalogExport\Listing();
            $exportObj->setOrderKey("o_key");
            $exportObj->load();
            $key = 0;
            foreach ($exportObj as $export) {
                $treeData[$key]['id'] = $export->getId();
                $treeData[$key]['text'] = $export->getKey();
                $key++;
            }
            return $this->json($treeData);
        } catch (\Exception $excp) {
            return $this->json(["success" => false, 'msg' => $excp->getMessage()]);
        }
    }

    /**
     * @Route("/admin/EasyCatalogExport/export/add")
     * @param Request $request
     */
    public function addAction(Request $request) {
        try {

            // Creating System Folder
            /* create EasyCatalogExport folder name in website settings and pick from there */
            $parentFolderPath = "/EasyCatalogExport";
            $folderName = "EasyCatalogExport";
            $folderName = \Pimcore\File::getValidFilename($folderName);
            $parentFolder = \Pimcore\Model\DataObject::getByPath($parentFolderPath);

            if (!$parentFolder) {
                $folder = \Pimcore\Model\DataObject\Folder::create(array(
                            "o_parentId" => 1,
                            "o_creationDate" => time(),
                            "o_userOwner" => 1,
                            "o_userModification" => 1,
                            "o_key" => $folderName,
                            "o_published" => true
                ));
            }

            $parentFolderId = \Pimcore\Model\DataObject::getByPath($parentFolderPath)->getId();
            $exportObj = new \Pimcore\Model\DataObject\EasyCatalogExport();
            $keyName = $request->query->get('name');
            $keyName = \Pimcore\File::getValidFilename($keyName);
            $exportObj->setParentId($parentFolderId);
            $exportObj->setPublished(true);
            $exportObj->setKey($keyName);
            $exportObj->save();
            $success = true;
            $id = $exportObj->getId();
            return $this->json(
                            [
                                "success" => $success,
                                "id" => $id
                            ]
            );
        } catch (\Exception $excp) {
            return $this->json([
                        "success" => false,
                        'msg' => $excp->getMessage()
            ]);
        }
    }

    /**
     * @Route("/admin/EasyCatalogExport/export/get-export-folder-id")
     */
    public function getExportFolderIdAction() {
        $folderName = "EasyCatalogExport";
        $folderName = \Pimcore\File::getValidFilename($folderName);
        $folderPath = '/' . $folderName;
        $folderObject = \Pimcore\Model\DataObject\Folder::getByPath($folderPath);
        if ($folderObject) {
            $folderObjectId = $folderObject->getId();
            return $this->json(["success" => true, "exportFolderId" => $folderObjectId]);
        } else {
            return $this->json(["success" => false, "msg" => "EasyCatalogExport folder not found in objects."]);
        }
    }

    /**
     * @Route("/admin/EasyCatalogExport/export/copy-info")
     * @param Request $request
     */
    public function copyInfoAction(Request $request) {
        $transactionId = time();
        $pasteJobs = [];

        \Pimcore\Tool\Session::useSession(function ($session) use ($transactionId) {
            $session->$transactionId = ["idExport" => []];
        }, "pimcore_copy");

        if ($request->query->get("type") == "child") {
            // the object itself is the last one
            $pasteJobs[] = [[
            "url" => "/admin/EasyCatalogExport/export/copy",
            "params" => [
                "sourceId" => $request->query->get("sourceId"),
                "targetId" => $request->query->get("targetId"),
                "type" => $request->query->get("type"),
                "transactionId" => $transactionId
            ]
            ]];
        }


        return $this->json([
                    "pastejobs" => $pasteJobs
        ]);
    }

    /**
     * @Route("/admin/EasyCatalogExport/export/copy")
     * @param Request $request
     */
    public function copyAction(Request $request) {
        $success = false;
        $message = "";
        $sourceId = intval($request->query->get("sourceId"));
        $session = \Pimcore\Tool\Session::get("pimcore_copy");
        $targetId = intval($request->query->get("targetId"));
        $target = \Pimcore\Model\DataObject::getById($targetId);
        $source = \Pimcore\Model\DataObject::getById($sourceId);
        $user = \Pimcore\Model\User::getById(2);
        $objectService = new \Pimcore\Model\DataObject\Service($user);
        if ($source != null) {
            try {
                if ($request->query->get("type") == "child") {
                    $newObject = $objectService->copyAsChild($target, $source);

                    $session->{$request->query->get("transactionId")}["idExport"][(int) $source->getId()] = (int) $newObject->getId();
                }
                $success = true;
            } catch (\Exception $e) {
                \Pimcore\Logger::err($e);
                $success = false;
                $message = $e->getMessage() . " in object " . $source->getRealFullPath() . " [id: " . $source->getId() . "]";
            }
        } else {
            \Pimcore\Logger::error("could not execute copy/paste, source object with id [ $sourceId ] not found");
            $this->json(["success" => false, "message" => "source object not found"]);
        }

        return $this->json(["success" => $success, "message" => $message]);
    }

    /**
     * @Route("/admin/EasyCatalogExport/export/get-export-detail")
     * @param Request $request
     * @return type
     */
    public function getExportDetailAction(Request $request) {
        try {
            $id = $request->query->get('id');
            $exportObj = \Pimcore\Model\DataObject\EasyCatalogExport::getById($id);
            /* get the filters, column configurations, cached */
            return $this->json([
                        "success" => true,
                        "selectedClass" => $exportObj->getExportClassId(),
                        "savedFilter" => $exportObj->getFilters(),
                        "columnConfigId" => $exportObj->getColumnConfig(),
                        //"xmlUrl" => $exportObj->getXmlUrl(),
                        "caching" => $exportObj->getCaching(),
                        "folderId" => $exportObj->getFolderId(),
            ]);
        } catch (\Exception $excp) {
            return $this->json([
                        "success" => false,
                        'msg' => $excp->getMessage()
            ]);
        }
    }

    /**
     * @Route("/admin/EasyCatalogExport/export/rename")
     */
    public function renameAction(Request $request) {
        $object = \Pimcore\Model\DataObject::getById($request->request->get("id"));
        $oldKey = $object->getKey();
        if ($object instanceof \Pimcore\Model\DataObject\Concrete) {
            $object->setOmitMandatoryCheck(true);
        }
        $values = json_decode($request->request->get("values"), true);
        if ($values["key"]) {
            $object->setKey($values["key"]);
            $object->save();
            $user = \Pimcore\Tool\Admin::getCurrentUser();
            EasyCatalogLogger::log()->info('User ' . $user->getName() . ' renamed export config ' . $oldKey . ' to ' . $object->getKey());
            return $this->json(["success" => true]);
        } elseif ($values["key"] != $object->getKey()) {
            \Pimcore\Logger::debug("prevented renaming object because of missing permissions ");
        }
        return $this->json(["success" => false, 'message' => 'Please add a valid key']);
    }

    /**
     * @Route("/admin/EasyCatalogExport/export/delete")
     * @param Request $request
     */
    public function deleteAction(Request $request) {
        try {
            $id = $request->query->get("name");
            $export = \Pimcore\Model\DataObject\EasyCatalogExport::getById($id);
            if ($export instanceof \Pimcore\Model\DataObject\EasyCatalogExport) {
                $key = $export->getKey();
                $export->delete();
                $user = \Pimcore\Tool\Admin::getCurrentUser();
                EasyCatalogLogger::log()->info('User ' . $user->getName() . ' deletes export config ' . $key);
            }
            return $this->json(['success' => true]);
        } catch (\Exception $excp) {
            return $this->json([
                        "success" => false,
                        'msg' => $excp->getMessage()
            ]);
        }
    }

    /**
     * @Route("/admin/EasyCatalogExport/export/save-export-object")
     * @param Request $request
     */
    public function saveExportObjectAction(Request $request) {

        try {
            $columnConfig = $request->request->get("columnConfig");
            $classId = $request->request->get("class_id");
            $filters = $request->request->get("filters");
            $exportObjectId = $request->request->get("exportObjectId");
            //$xmlUrl = $request->request->get("url");
            $caching = $request->request->get("cache");
            $folderId = $request->request->get("folderId");
            $gridColumns = $request->request->get("gridColumns");

            //getting objects 
            $myObject = \Pimcore\Model\DataObject\EasyCatalogExport::getById($exportObjectId);
            if ($request->request->get("class_id")) {
                $myObject->setExportClassId($classId);
                $myObject->setFilters($filters);
                $myObject->setColumnConfig($columnConfig);
                if ($folderId) {
                    $myObject->setFolderId($folderId);
                }
                $myObject->setXmlFilePath('');
                $myObject->save();
                $user = \Pimcore\Tool\Admin::getCurrentUser();
                EasyCatalogLogger::log()->info('User ' . $user->getName() . ' changed export config ' . $myObject->getKey());
            } else {
                if ($caching) {
                    $myObject->setCaching(true);
                } else {
                    $myObject->setCaching(false);
                }
                $myObject->save();
            }

            return $this->json(['success' => true]);
            return $this->json(array(
                        "filters" => json_decode($filters),
                        "columnConfig" => $columnConfig,
                        "classId" => $classId,
            ));
        } catch (\Exception $excp) {
            return $this->json([
                        "success" => false,
                        'msg' => $excp->getMessage()
            ]);
        }
    }

    /**
     * @Route("/admin/EasyCatalogExport/export/get-export-url")
     * @param Request $request
     */
    public function getExportUrlAction(Request $request) {
        try {
            $exportObjectId = $request->query->get("id");
            $systemSettings = Config::getSystemConfig();
            if (!$systemSettings['webservice']->get('enabled')) {
                $accessUrl = 'Webservice is disabled.';
            } else {
                $userId = \Pimcore\Tool\Admin::getCurrentUser();
                $user = User::getById($userId->getId());
                if (!$user->apiKey) {
                    $accessUrl = "Couldn't get API key for user.";
                } else {
                    $accessUrl = \Pimcore\Tool::getHostUrl() . '/easy-catalog-export?id=' . $exportObjectId . '&apikey=' . $user->apiKey;
                }
            }
            return $this->json([
                        "success" => true,
                        'accessUrl' => $accessUrl
            ]);
        } catch (\Exception $excp) {
            return $this->json([
                        "success" => false,
                        'msg' => $excp->getMessage()
            ]);
        }
    }

    /**
     * @param string $apiKey
     *
     * @return User|null
     *
     * @throws \Exception
     */
    protected function loadUserForApiKey($apiKey) {
        /** @var User\Listing|User\Listing\Dao $userList */
        $userList = new User\Listing();
        $userList->setCondition('apiKey = ? AND type = ? AND active = 1', [$apiKey, 'user']);

        /** @var User[] $users */
        $users = $userList->load();
        if (is_array($users) && count($users) === 1) {
            if (!$users[0]->getApiKey()) {
                return false;
            }
            return $users[0];
        } else {
            return false;
        }
    }

    /**
     * @Route("/easy-catalog-export")
     * @param Request $request
     */
    public function getXmlExportAction(Request $request) {
        $id = $request->query->get("id");
        $apiKey = $request->query->get("apikey");
        $systemSettings = Config::getSystemConfig();

        $user = $this->loadUserForApiKey($apiKey);
        if ($user) {
            $userName = $user->getName();
        } else {
            $userName = 'Unknown (API-KEY: ' . $apiKey . ')';
        }
        $xml = new \SimpleXMLElement('<export/>');
        Header('Content-type: text/xml');
        if (!$id) {
            http_response_code(404);
            EasyCatalogLogger::log()->error('User ' . $userName . ' tried to access export with no id');
            $xml->addChild('responseCode', '404');
            $xml->addChild('responseMessage', 'Export id not found');
            echo $xml->asXML();
            die;
        } elseif (!$apiKey) {
            http_response_code(403);
            EasyCatalogLogger::log()->error('User ' . $userName . ' tried to access export with no API-KEY');
            $xml->addChild('responseCode', '403');
            $xml->addChild('responseMessage', 'API-KEY not found');
            echo $xml->asXML();
            die;
        } elseif (!$systemSettings['webservice']->get('enabled')) {
            http_response_code(403);
            EasyCatalogLogger::log()->error('User ' . $userName . ' tried to access export while Webservice was disabled.');
            $xml->addChild('responseCode', '403');
            $xml->addChild('responseMessage', 'Webservice disabled');
            echo $xml->asXML();
            die;
        }
        if ($user) {
            $userPermissions = $user->getPermissions();
            if (!in_array('plugin_easycatalog_export', $userPermissions)) {
                //USER WITH NOT PROPER PERMISSION
                http_response_code(403);
                EasyCatalogLogger::log()->error('User ' . $userName . ' tried to access export without proper access rights.');
                $xml->addChild('responseCode', '403');
                $xml->addChild('responseMessage', 'Permission denied');
                echo $xml->asXML();
                die;
            }
        } else {
            //API KEY IS NOT VALID
            http_response_code(403);
            EasyCatalogLogger::log()->error('User ' . $userName . ' tried to access export with invalid API-KEY.');
            $xml->addChild('responseCode', '403');
            $xml->addChild('responseMessage', 'Invalid API-KEY');
            echo $xml->asXML();
            die;
        }
        $exportObjData = DataObject\EasyCatalogExport::getById($id);
        if ($exportObjData) {
            EasyCatalogLogger::log()->info('User ' . $userName . ' access export data for ' . $exportObjData->getKey());
            if ($exportObjData->getCaching()) {
                header('Content-type: application/xml');
                if ($exportObjData->getXmlFilePath()) {
                    $xmlFile = @file_get_contents(PIMCORE_PRIVATE_VAR . '/EasyCatalogExport/' . $id . ".xml");
                    if ($xmlFile) {
                        echo $xmlFile;
                    } else {
                        http_response_code(404);
                        $xml = new \SimpleXMLElement('<export/>');
                        $xml->addChild('responseCode', '404');
                        $xml->addChild('responseMessage', 'File not found');
                        Header('Content-type: text/xml');
                        echo $xml->asXML();
                    }
                } else {
                    http_response_code(404);
                    $xml = new \SimpleXMLElement('<export/>');
                    $xml->addChild('responseCode', '404');
                    $xml->addChild('responseMessage', 'File not found');
                    Header('Content-type: text/xml');
                    echo $xml->asXML();
                }
                exit();
                //Download xml file
            } else {
                $exportObj = new \EasyCatalogExportBundle\Lib\Export();
                $xmlFile = $exportObj->index($id);
                print_r($xmlFile);
                exit();
            }
        } else {
            EasyCatalogLogger::log()->error('User ' . $userName . ' tried to access export with invalid export id.');
            $xml = new \SimpleXMLElement('<export/>');
            http_response_code(404);
            $xml->addChild('responseCode', '404');
            $xml->addChild('responseMessage', 'Invalid id');
            Header('Content-type: text/xml');
            echo $xml->asXML();
            die;
        }
        die;
    }

}
