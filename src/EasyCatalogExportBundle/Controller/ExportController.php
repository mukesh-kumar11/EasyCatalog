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

class ExportController extends FrontendController {

    /**
     * @Route("/export/tree")
     */
    public function treeAction() {
        try {
            $treeData = [];
            $exportObj = new \Pimcore\Model\DataObject\EasyCatalogExport\Listing();
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
     * @Route("/export/add")
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
     * @Route("/export/get-export-folder-id")
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
     * @Route("/export/copy-info")
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
     * @Route("/export/copy")
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
        $user = \Model\User::getById(2);
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
     * @Route("/export/get-export-detail")
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
                        "xmlUrl" => $exportObj->getXmlUrl(),
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
     * @Route("/export/rename")
     */
    public function renameAction(Request $request) {
        $object = \Pimcore\Model\DataObject::getById($request->request->get("id"));
        if ($object instanceof \Pimcore\Model\DataObject\Concrete) {
            $object->setOmitMandatoryCheck(true);
        }
        $values = json_decode($request->request->get("values"), true);
        if ($values["key"]) {
            $object->setKey($values["key"]);
            $object->save();
            return $this->json(["success" => true]);
        } elseif ($values["key"] != $object->getKey()) {
            \Pimcore\Logger::debug("prevented renaming object because of missing permissions ");
        }
        return $this->json(["success" => false, 'message' => 'Please add a valid key']);
    }

    /**
     * @Route("/export/delete")
     * @param Request $request
     */
    public function deleteAction(Request $request) {
        try {
            $id = $request->query->get("name");
            $export = \Pimcore\Model\DataObject\EasyCatalogExport::getById($id);
            if ($export instanceof \Pimcore\Model\DataObject\EasyCatalogExport) {
                $export->delete();
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
     * @Route("/export/save-export-object")
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
//                $myObject->setgridColumns($gridColumns);
//                print_r(serialize($request)); die;
//                $myObject->setrequestObj("$request");
            } else {
                //$myObject->setXmlUrl($xmlUrl);
                if ($caching) {
                    $myObject->setCaching(true);
                } else {
                    $myObject->setCaching(false);
                }
            }

            $myObject->save();
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
     * @Route("/export/get-export-url")
     * @param Request $request
     */
    public function getExportUrlAction(Request $request) {
        try {
            $exportObjectId = $request->query->get("id");
            
            $systemSettings = Config::getSystemConfig();
            if (!$systemSettings['webservice']->get('enabled')) {
                $accessUrl = 'Webservice is disabled';
            } else {
                $userId = \Pimcore\Tool\Admin::getCurrentUser();
                $user = \Pimcore\Model\User::getById($userId->getId());
                if (!$user->apiKey) {
                    $accessUrl = 'Please genrate a API Key';
                } else {
                    $accessUrl = \Pimcore\Tool::getHostUrl() . '/admin/EasyCatalogExport/export/get-xml-export?id=' . $exportObjectId . '&apikey=' . $user->apiKey;
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
     * @Route("/export/get-xml-export")
     * @param Request $request
     */
    public function getXmlExportAction(Request $request) {
        $id = $request->query->get("id");
        if (!$id) {
            $xml = new \SimpleXMLElement('<export/>');
            $xml->addChild('responseCode', '404');
            $xml->addChild('responseMessage', 'Id not found');
            Header('Content-type: text/xml');
            echo $xml->asXML();
            die;
        }
        $exportObjData = DataObject\EasyCatalogExport::getById($id);
        if ($exportObjData) {
            if ($exportObjData->getCaching()) {
                header('Content-type: application/xml');
                $xmlFile = file_get_contents(PIMCORE_SYSTEM_TEMP_DIRECTORY . "/" . $id . ".xml");
                if($xmlFile) {
                    echo $xmlFile; 
                }else {
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
            $xml = new \SimpleXMLElement('<export/>');
            $xml->addChild('responseCode', '404');
            $xml->addChild('responseMessage', 'Invalid id');
            Header('Content-type: text/xml');
            echo $xml->asXML();
            die;
        }
    }

}
