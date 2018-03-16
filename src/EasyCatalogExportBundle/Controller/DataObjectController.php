<?php

/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Enterprise License (PEL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 * @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 * @license    http://www.pimcore.org/license     GPLv3 and PEL
 */

namespace EasyCatalogExportBundle\Controller;

//use Pimcore\Controller\Configuration\TemplatePhp;
//use Pimcore\Controller\EventedControllerInterface;
//use Pimcore\Event\AdminEvents;
//
//use Pimcore\Model;
//use Symfony\Component\EventDispatcher\GenericEvent;
//
//use Symfony\Component\HttpFoundation\RedirectResponse;
//
//
//use Symfony\Component\HttpFoundation\Session\Attribute\AttributeBagInterface;
//use Symfony\Component\HttpKernel\Event\FilterControllerEvent;
//use Symfony\Component\HttpKernel\Event\FilterResponseEvent;


use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Pimcore\Logger;
use Pimcore\Tool;
use Pimcore\Model\DataObject;
use Pimcore\Model\Element;

/**
 * @Route("/admin/EasyCatalogExport/object")
 */
class DataObjectController extends \Pimcore\Bundle\AdminBundle\Controller\Admin\ElementControllerBase {

    /**
     * @Route("/get-folder")
     *
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function getFolderAction(Request $request) {
//        // check for lock
//        if (Element\Editlock::isLocked($request->get('id'), 'object')) {
//            return $this->json([
//                        'editlock' => Element\Editlock::getByElement($request->get('id'), 'object')
//            ]);
//        }
//        Element\Editlock::lock($request->get('id'), 'object');

        $object = DataObject::getById(intval($request->get('id')));
        if ($object->isAllowed('view')) {
            $objectData = [];
            $objectData['general'] = [];
            $objectData['idPath'] = Element\Service::getIdPath($object);
            $allowedKeys = ['o_published', 'o_key', 'o_id', 'o_type', 'o_path', 'o_modificationDate', 'o_creationDate', 'o_userOwner', 'o_userModification'];
            foreach (get_object_vars($object) as $key => $value) {
                if (strstr($key, 'o_') && in_array($key, $allowedKeys)) {
                    $objectData['general'][$key] = $value;
                }
            }
            $objectData['general']['fullpath'] = $object->getRealFullPath();

            $objectData['general']['o_locked'] = $object->isLocked();

            $objectData['properties'] = Element\Service::minimizePropertiesForEditmode($object->getProperties());
            $objectData['userPermissions'] = $object->getUserPermissions();
            $objectData['classes'] = $this->prepareChildClasses($object->getDao()->getClasses());

            // grid-config
            $configFile = PIMCORE_CONFIGURATION_DIRECTORY . '/object/grid/' . $object->getId() . '-user_' . $this->getUser()->getId() . '.psf';
            if (is_file($configFile)) {
                $gridConfig = Tool\Serialize::unserialize(file_get_contents($configFile));
                if ($gridConfig) {
                    $selectedClassId = $gridConfig['classId'];

                    foreach ($objectData['classes'] as $class) {
                        if ($class['id'] == $selectedClassId) {
                            $objectData['selectedClass'] = $selectedClassId;
                            break;
                        }
                    }
                }
            }

            return $this->json($objectData);
        } else {
            Logger::debug('prevented getting folder id [ ' . $object->getId() . ' ] because of missing permissions');

            return $this->json(['success' => false, 'message' => 'missing_permission']);
        }
    }

    /**
     * @param $classes
     *
     * @return array
     */
    protected function prepareChildClasses($classes) {
        $reduced = [];
        foreach ($classes as $class) {
            if ($class) {
                $reduced[] = [
                    'id' => $class->getId(),
                    'name' => $class->getName()
                ];
            }
        }

        return $reduced;
    }

}
