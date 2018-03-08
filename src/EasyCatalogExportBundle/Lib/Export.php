<?php

namespace EasyCatalogExportBundle\Lib;

use \Pimcore\Bundle\AdminBundle\Controller\Admin\DataObjectHelperController;
use Pimcore\Model\DataObject\EasyCatalogExport;
use Pimcore\Model\DataObject\Service;

class Export extends DataObjectHelperController {


    /**
     * Functional description : Intial point from where cron will start execution
     * @return boolean
     */
    public function index($id = null) {

        if($id) {
            $exportData[0] = EasyCatalogExport::getById($id);
        }else {
            // to get all export object
            $exportData = EasyCatalogExport::getList(['condition' => 'Caching = 1 AND xmlFilePath != ""'])->load();
        }
        
        //to get instance language
        if ($exportData) {
            $doc = \Pimcore\Model\Document::getById($exportData[0]->getExportClassId());
            if($doc){
                $language = $doc->getProperty("language");
            }
        }
        if (count($exportData) > 0) {
            foreach ($exportData as $export) {
                $exportClassId = $export->getExportClassId();
                
                if ($exportClassId) {
                    $class = \Pimcore\Model\DataObject\ClassDefinition::getById($exportClassId);
                }
                $gridConfigId = null;
                $gridType = 'search';
                $context = ['purpose' => 'gridconfig'];
                if ($class) {
                    $context['class'] = $class;
                }
                $folderId = 1;
                $objectId = $export->getId();
//echo $objectId; die;
                if ($objectId) {
                    $object = \Pimcore\Model\DataObject\AbstractObject::getById($objectId);
                    $context['object'] = $object;
                }

                $export->setXmlFilePath(PIMCORE_SYSTEM_TEMP_DIRECTORY.'/'.$objectId.'.xml');
                $export->update(true);
                

                if (!$fields && $class) {
                    $fields = $class->getFieldDefinitions();
                }

                $configId = $export->getColumnConfig();

                if ($configId > 0) {
                    $savedGridConfig = \Pimcore\Model\GridConfig::getById($configId);
                }

                if ($savedGridConfig) {

                    $gridConfigId = $savedGridConfig->getId();
                    $gridConfig = $savedGridConfig->getConfig();
                    $gridConfig = json_decode($gridConfig, true);
                    $gridConfigName = $savedGridConfig->getName();
                    $gridConfigDescription = $savedGridConfig->getDescription();
                }

                $systemColumns = ['id', 'fullpath', 'published', 'creationDate', 'modificationDate', 'filename', 'classname'];

                $localizedFields = [];
                $objectbrickFields = [];
                foreach ($fields as $key => $field) {
                    if ($field instanceof \Pimcore\Model\DataObject\ClassDefinition\Data\Localizedfields) {
                        $localizedFields[] = $field;
                    } elseif ($field instanceof \Pimcore\Model\DataObject\ClassDefinition\Data\Objectbricks) {
                        $objectbrickFields[] = $field;
                    }
                }

                $availableFields = [];
                if (empty($gridConfig)) {
                    $count = 0;

                    $vis = $class->getPropertyVisibility();
                    foreach ($systemColumns as $sc) {
                        $key = $sc;
                        if ($key == 'fullpath') {
                            $key = 'path';
                        }

                        if (empty($types) && ($vis[$gridType][$key] || $gridType == 'all')) {
                            $availableFields[] = [
                                'key' => $sc,
                                'type' => 'system',
                                'label' => $sc,
                                'position' => $count];
                            $count++;
                        }
                    }
                    $types = [];
                    //            $includeBricks = !$request->get('no_brick_columns');
                    //            print_r($availableFields); die;
                    foreach ($fields as $key => $field) {
                        if ($field instanceof \Pimcore\Model\DataObject\ClassDefinition\Data\Localizedfields) {
                            foreach ($field->getFieldDefinitions($context) as $fd) {
                                if (empty($types) || in_array($fd->getFieldType(), $types)) {
                                    $fieldConfig = $this->getFieldGridConfig($fd, $gridType, $count, false, null, $class, $objectId);
                                    if (!empty($fieldConfig)) {
                                        $availableFields[] = $fieldConfig;
                                        $count++;
                                    }
                                }
                            }
                        } elseif ($field instanceof \Pimcore\Model\DataObject\ClassDefinition\Data\Objectbricks) {
                            if (in_array($field->getFieldType(), $types)) {
                                $fieldConfig = $this->getFieldGridConfig($field, $gridType, $count, false, null, $class, $objectId);
                                if (!empty($fieldConfig)) {
                                    $availableFields[] = $fieldConfig;
                                    $count++;
                                }
                            } else {
                                $allowedTypes = $field->getAllowedTypes();
                                if (!empty($allowedTypes)) {
                                    foreach ($allowedTypes as $t) {
                                        $brickClass = \Pimcore\Model\DataObject\Objectbrick\Definition::getByKey($t);
                                        $brickFields = $brickClass->getFieldDefinitions($context);
                                        if (!empty($brickFields)) {
                                            foreach ($brickFields as $bf) {
                                                $fieldConfig = $this->getFieldGridConfig($bf, $gridType, $count, false, $t . '~', $class, $objectId);
                                                if (!empty($fieldConfig)) {
                                                    $availableFields[] = $fieldConfig;
                                                    $count++;
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        } else {
                            if (empty($types) || in_array($field->getFieldType(), $types)) {
                                $fieldConfig = $this->getFieldGridConfig($field, $gridType, $count, !empty($types), null, $class, $objectId);
                                if (!empty($fieldConfig)) {
                                    $availableFields[] = $fieldConfig;
                                    $count++;
                                }
                            }
                        }
                    }
                } else {
                    $savedColumns = $gridConfig['columns'];

                    foreach ($savedColumns as $key => $sc) {
                        if (!$sc['hidden']) {
                            if (in_array($key, $systemColumns)) {
                                $colConfig = [
                                    'key' => $key,
                                    'type' => 'system',
                                    'label' => $key,
                                    'position' => $sc['position']];
                                if (isset($sc['width'])) {
                                    $colConfig['width'] = $sc['width'];
                                }
                                $availableFields[] = $colConfig;
                            } else {
                                $keyParts = explode('~', $key);

                                if (substr($key, 0, 1) == '~') {
                                    // not needed for now
                                    $type = $keyParts[1];
                                    //                            $field = $keyParts[2];
                                    $groupAndKeyId = explode('-', $keyParts[3]);
                                    $keyId = $groupAndKeyId[1];

                                    if ($type == 'classificationstore') {
                                        $keyDef = \Pimcore\Model\DataObject\Classificationstore\KeyConfig::getById($keyId);
                                        if ($keyDef) {
                                            $keyFieldDef = json_decode($keyDef->getDefinition(), true);
                                            if ($keyFieldDef) {
                                                $keyFieldDef = \Pimcore\Model\DataObject\Classificationstore\Service::getFieldDefinitionFromJson($keyFieldDef, $keyDef->getType());
                                                $fieldConfig = $this->getFieldGridConfig($keyFieldDef, $gridType, $sc['position'], true, null, $class, $objectId);
                                                if ($fieldConfig) {
                                                    $fieldConfig['key'] = $key;
                                                    $fieldConfig['label'] = '#' . $keyFieldDef->getTitle();
                                                    $availableFields[] = $fieldConfig;
                                                }
                                            }
                                        }
                                    }
                                } elseif (count($keyParts) > 1) {
                                    $brick = $keyParts[0];
                                    $key = $keyParts[1];

                                    $brickClass = \Pimcore\Model\DataObject\Objectbrick\Definition::getByKey($brick);
                                    $fd = $brickClass->getFieldDefinition($key);
                                    if (!empty($fd)) {
                                        $fieldConfig = $this->getFieldGridConfig($fd, $gridType, $sc['position'], true, $brick . '~', $class, $objectId);
                                        if (!empty($fieldConfig)) {
                                            if (isset($sc['width'])) {
                                                $fieldConfig['width'] = $sc['width'];
                                            }
                                            $availableFields[] = $fieldConfig;
                                        }
                                    }
                                } else {
                                    if (\Pimcore\Model\DataObject\Service::isHelperGridColumnConfig($key)) {
                                        $calculatedColumnConfig = $this->getCalculatedColumnConfig($savedColumns[$key]);
                                        if ($calculatedColumnConfig) {
                                            $availableFields[] = $calculatedColumnConfig;
                                        }
                                    } else {
                                        $fd = $class->getFieldDefinition($key);
                                        //if not found, look for localized fields
                                        if (empty($fd)) {
                                            foreach ($localizedFields as $lf) {
                                                $fd = $lf->getFieldDefinition($key);
                                                if (!empty($fd)) {
                                                    break;
                                                }
                                            }
                                        }

                                        if (!empty($fd)) {
                                            $fieldConfig = $this->getFieldGridConfig($fd, $gridType, $sc['position'], true, null, $class, $objectId);
                                            if (!empty($fieldConfig)) {
                                                if (isset($sc['width'])) {
                                                    $fieldConfig['width'] = $sc['width'];
                                                }

                                                $availableFields[] = $fieldConfig;
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }

                $settings = $this->getShareSettings((int) $gridConfigId);

                $language = $gridConfig['language'] ? $gridConfig['language'] : $language;

                $filter = $export->getFilters();
                
                $settings['gridConfigId'] = (int) $gridConfigId;
                $settings['gridConfigName'] = $gridConfigName;
                $settings['language'] = $language;
                $settings['gridConfigDescription'] = $gridConfigDescription;
                $settings['isShared'] = (!$gridConfigId || $shared) ? true : false;
                $gridData = $this->getGridData($class, $availableFields, $filter, $settings, $folderId, $objectId,$id);
            }
        }
        return $gridData;
    }

    /**
     * @param $gridConfigId
     *
     * @return array
     */
    protected function getShareSettings($gridConfigId) {
        $result = [
            'sharedUserIds' => [],
            'sharedRoleIds' => []
        ];

        $db = \Pimcore\Db::get();
        $allShares = $db->fetchAll('select s.sharedWithUserId, u.type from gridconfig_shares s, users u 
                      where s.sharedWithUserId = u.id and s.gridConfigId = ' . $gridConfigId);

        if ($allShares) {
            foreach ($allShares as $share) {
                $type = $share['type'];
                $key = 'shared' . ucfirst($type) . 'Ids';
                $result[$key][] = $share['sharedWithUserId'];
            }
        }

        foreach ($result as $idx => $value) {
            $value = $value ? implode(',', $value) : '';
            $result[$idx] = $value;
        }

        return $result;
    }

// DataObject\Service::getCustomGridFieldDefinitions
    //create content


    public function getGridData($class, $headerMeta, $filter = null, $settings, $folderId, $objectId,$id=null) {

        $requestedLanguage = $settings['language'];
        $fields = [];
        $fieldsWithKeyLabel = [];
        $configOperator = [];
        foreach ($headerMeta as $key => $value) {
            if ($value['isOperator']) {
                foreach ($value['attributes']['childs'] as $label) {
                    $configOperator[$value['key']]['attribute'] = $label['attribute'];
                    $string = preg_replace('/[^a-zA-Z0-9_.]/', '_', $value['attributes']['label']);
                    $configOperator[$value['key']]['label'] = trim(str_replace('__', '_', $string), '_');
                }
            } else {
                $string = preg_replace('/[^a-zA-Z0-9_.]/', '_', $value['label']);
                $fieldsWithKeyLabel[$value['key']] = trim(str_replace('__', '_', $string), '_');
            }
            array_push($fields, $value['key']);
        }
        // get list of objects
        $folder = \Pimcore\Model\DataObject::getById($folderId);
        $className = $class->getName();

        $colMappings = [
            'filename' => 'o_key',
            'fullpath' => ['o_path', 'o_key'],
            'id' => 'oo_id',
            'published' => 'o_published',
            'modificationDate' => 'o_modificationDate',
            'creationDate' => 'o_creationDate'
        ];

        $start = 0;
        $limit = 1;
        $orderKey = 'oo_id';
        $order = 'ASC';
        $bricks = [];

        if ($fields) {
            foreach ($fields as $f) {
                $parts = explode('~', $f);
                $sub = substr($f, 0, 1);
                if (substr($f, 0, 1) == '~') {
                    $type = $parts[1];
                    //                        $field = $parts[2];
                    //                        $keyid = $parts[3];
                    // key value, ignore for now
                    if ($type == 'classificationstore') {
                        
                    }
                } elseif (count($parts) > 1) {
                    $bricks[$parts[0]] = $parts[0];
                }
            }
        }


        $listClass = '\\Pimcore\\Model\\DataObject\\' . ucfirst($className) . '\\Listing';
        /**
         * @var $list DataObject\Listing\Concrete
         */
        $list = new $listClass();


        $featureJoins = [];
        $featureFilters = false;

        if ($featureFilters) {
            $featureJoins = array_merge($featureJoins, $featureFilters['joins']);
        }

        $quotedPath = $list->quote($folder->getRealFullPath());

        $quotedWildcardPath = $list->quote(str_replace('//', '/', $folder->getRealFullPath() . '/') . '%');
        $conditionFilters[] = '(o_path = ' . $quotedPath . ' OR o_path LIKE ' . $quotedWildcardPath . ')';

        if ($filter) {
            $conditionFilters[] = \Pimcore\Model\DataObject\Service::getFilterCondition($filter, $class);
            $featureFilters = \Pimcore\Model\DataObject\Service::getFeatureFilters($filter, $class);
        }

        if (!empty($bricks)) {
            foreach ($bricks as $b) {
                $list->addObjectbrick($b);
            }
        }

        $list->setCondition(implode(' AND ', $conditionFilters));
//        $list->setLimit(5);
        $list->setOffset($start);
        $list->setOrder($order);


        if ($class->getShowVariants()) {
            $list->setObjectTypes([\Pimcore\Model\DataObject\AbstractObject::OBJECT_TYPE_OBJECT, \Pimcore\Model\DataObject\AbstractObject::OBJECT_TYPE_VARIANT]);
        }

        \Pimcore\Model\DataObject\Service::addGridFeatureJoins($list, $featureJoins, $class, $featureFilters, $requestedLanguage);

        $list->load();

        foreach ($list->getObjects() as $object) {
            $o = $this->rowData($object, $fields, $requestedLanguage);
            $objects[] = $o;
        }
        $ids = $list->loadIdList();

        $listClass = '\\Pimcore\\Model\\DataObject\\' . ucfirst($className) . '\\Listing';

        /**
         * @var $list \Pimcore\Model\DataObject\Listing
         */
        $list = new $listClass();
        $list->setObjectTypes(['object', 'folder', 'variant']);
        $list->setCondition('o_id IN (' . implode(',', $ids) . ')');
        $list->setOrderKey(' FIELD(o_id, ' . implode(',', $ids) . ')', false);

//        print_r($xml); die;

        $xml = $this->getXmlData($list, $fields, $objects, $requestedLanguage, $configOperator, $fieldsWithKeyLabel);
        
        if(!$id) {
            file_put_contents($this->getXmlFile($objectId), $xml, LOCK_EX);
        }

        return $xml;
    }

    /**
     * @param $objectId
     *
     * @return string
     */
    private function getXmlFile($objectId) {
        return PIMCORE_SYSTEM_TEMP_DIRECTORY . '/' . $objectId . '.xml';
    }

    public function rowData($object, $fields, $requestedLanguage) {
        $data = \Pimcore\Model\Element\Service::gridElementData($object);

        if ($object instanceof \Pimcore\Model\DataObject\Concrete) {

            $context = ['object' => $object];
            $data['classname'] = $object->getClassName();
            $data['idPath'] = \Pimcore\Model\Element\Service::getIdPath($object);
            $data['inheritedFields'] = [];

            if (empty($fields)) {
                $fields = array_keys($object->getclass()->getFieldDefinitions());
            }

            $haveHelperDefinition = false;

            foreach ($fields as $key) {
                $brickType = null;
                $brickGetter = null;
                $dataKey = $key;
                $keyParts = explode('~', $key);

                $def = $object->getClass()->getFieldDefinition($key);

                if (strpos($key, '#') === 0) {
                    if (!$haveHelperDefinition) {
                        $helperDefinitions = \Pimcore\Model\DataObject\Service::getHelperDefinitions();
                        $haveHelperDefinition = true;
                    }
                    if ($helperDefinitions[$key]) {
                        $data[$key] = \Pimcore\Model\DataObject\Service::calculateCellValue($object, $helperDefinitions, $key);
                    }
                } elseif (substr($key, 0, 1) == '~') {
                    $type = $keyParts[1];
                    if ($type == 'classificationstore') {
                        $field = $keyParts[2];
                        $groupKeyId = explode('-', $keyParts[3]);

                        $groupId = $groupKeyId[0];
                        $keyid = $groupKeyId[1];
                        $getter = 'get' . ucfirst($field);
                        if (method_exists($object, $getter)) {
                            /** @var $classificationStoreData Classificationstore */
                            $classificationStoreData = $object->$getter();
                            $fielddata = $classificationStoreData->getLocalizedKeyValue($groupId, $keyid, $requestedLanguage, true, true);

                            $keyConfig = \Pimcore\Model\DataObject\Classificationstore\KeyConfig::getById($keyid);
                            $type = $keyConfig->getType();
                            $definition = json_decode($keyConfig->getDefinition());
                            $definition = \Pimcore\Model\DataObject\Classificationstore\Service::getFieldDefinitionFromJson($definition, $type);

                            if (method_exists($definition, 'getDataForGrid')) {
                                $fielddata = $definition->getDataForGrid($fielddata, $object);
                            }
                            $data[$key] = $fielddata;
                        }
                    }
                } elseif (count($keyParts) > 1) {
                    // brick
                    $brickType = $keyParts[0];
                    $brickKey = $keyParts[1];
                    $key = \Pimcore\Model\DataObject\Service::getFieldForBrickType($object->getclass(), $brickType);

                    $brickClass = \Pimcore\Model\DataObject\Objectbrick\Definition::getByKey($brickType);
                    $context['outerFieldname'] = $key;
                    $def = $brickClass->getFieldDefinition($brickKey, $context);
                }

                if (!empty($key)) {

                    // some of the not editable field require a special response

                    $getter = 'get' . ucfirst($key);

                    $needLocalizedPermissions = false;

                    // if the definition is not set try to get the definition from localized fields
                    if (!$def) {
                        if ($locFields = $object->getClass()->getFieldDefinition('localizedfields')) {
                            $def = $locFields->getFieldDefinition($key, $context);
                            if ($def) {
                                $needLocalizedPermissions = true;
                            }
                        }
                    }

                    //relation type fields with remote owner do not have a getter
                    if (method_exists($object, $getter)) {

                        //system columns must not be inherited
                        if (in_array($key, \Pimcore\Model\DataObject\Concrete::$systemColumnNames)) {
                            $data[$dataKey] = $object->$getter();
                        } else {
                            $valueObject = $this->getValueForObjectExport($object, $key, $brickType, $brickKey, $def, $context);
                            $data['inheritedFields'][$dataKey] = ['inherited' => $valueObject->objectid != $object->getId(), 'objectid' => $valueObject->objectid];

                            if (method_exists($def, 'getDataForGrid')) {
                                if ($brickKey) {
                                    $context['containerType'] = 'objectbrick';
                                    $context['containerKey'] = $brickType;
                                    $context['outerFieldname'] = $key;
                                }

                                $params = ['context' => $context, 'purpose' => 'gridview'];
                                $tempData = $def->getDataForGrid($valueObject->value, $object, $params);

                                if ($def instanceof ClassDefinition\Data\Localizedfields) {
                                    $needLocalizedPermissions = true;
                                    foreach ($tempData as $tempKey => $tempValue) {
                                        $data[$tempKey] = $tempValue;
                                    }
                                } else {
                                    $data[$dataKey] = $tempData;
                                }
                            } else {
                                $data[$dataKey] = $valueObject->value;
                            }
                        }
                    }
                }
            }
        }
        return $data;
    }

    private function getValueForObjectExport($object, $key, $brickType = null, $brickKey = null, $fieldDefinition = null, $context = []) {
        $getter = 'get' . ucfirst($key);
        $value = $object->$getter();
        if (!empty($value) && !empty($brickType)) {
            $getBrickType = 'get' . ucfirst($brickType);
            $value = $value->$getBrickType();
            if (!empty($value) && !empty($brickKey)) {
                $brickGetter = 'get' . ucfirst($brickKey);
                $value = $value->$brickGetter();
            }
        }

        if (!$fieldDefinition) {
            $fieldDefinition = $object->getClass()->getFieldDefinition($key, $context);
        }

        if (!empty($brickType) && !empty($brickKey)) {
            $brickClass = \Pimcore\Model\DataObject\Objectbrick\Definition::getByKey($brickType);
            $context = ['object' => $object, 'outerFieldname' => $key];
            $fieldDefinition = $brickClass->getFieldDefinition($brickKey, $context);
        }

        if ($fieldDefinition->isEmpty($value)) {
            $parent = \Pimcore\Model\DataObject\Service::hasInheritableParentObject($object);
            if (!empty($parent)) {
                return $this->getValueForObjectExport($parent, $key, $brickType, $brickKey, $fieldDefinition, $context);
            }
        }

        $result = new \stdClass();
        $result->value = $value;
        $result->objectid = $object->getId();

        return $result;
    }

    /**
     * @param Request $request
     * @param $list
     * @param $fields
     * @param bool $addTitles
     *
     * @return string
     */
    protected function getXmlData($list, $fields, $objects, $requestedLanguage, $configOperator, $fieldsWithKeyLabel) {
        $mappedFieldnames = [];

        $objects = [];
//        Logger::debug('objects in list:' . count($list->getObjects()));
        //add inherited values to objects
        \Pimcore\Model\DataObject\AbstractObject::setGetInheritedValues(true);

        $helperDefinitions = \Pimcore\Model\DataObject\Service::getHelperDefinitions();

        $container = \Pimcore::getContainer();
        $localeService = $container->get(\Pimcore\Localization\Locale::class);

        foreach ($list->getObjects() as $object) {
            if ($fields) {
                $objectData = [];
                foreach ($fields as $field) {
                    if (\Pimcore\Model\DataObject\Service::isHelperGridColumnConfig($field) && $validLanguages = \Pimcore\Model\DataObject\Service::expandGridColumnForExport($helperDefinitions, $field)) {
                        $currentLocale = $localeService->getLocale();
                        $mappedFieldnameBase = $this->mapFieldname($field, $helperDefinitions);

                        foreach ($validLanguages as $validLanguage) {
                            $localeService->setLocale($validLanguage);
                            $fieldData = $this->getXmlFieldData($field, $object, $validLanguage, $helperDefinitions);
                            $localizedFieldKey = $field . '-' . $validLanguage;
                            if (!isset($mappedFieldnames[$localizedFieldKey])) {
                                $mappedFieldnames[$localizedFieldKey] = $mappedFieldnameBase . '-' . $validLanguage;
                            }
                            $objectData[$localizedFieldKey] = $fieldData;
                        }

                        $localeService->setLocale($currentLocale);
                    } else {
                        $fieldData = $this->getXmlFieldData($field, $object, $requestedLanguage, $helperDefinitions);
                        if (!isset($mappedFieldnames[$field])) {
                            $mappedFieldnames[$field] = $this->mapFieldname($field, $helperDefinitions);
                        }
                        $objectData[$field] = $fieldData;
                    }
                }
                $objects[] = $objectData;
            }
        }

//        print_r($objects); 
//        print_r($configOperator);
//        die;
        //Create XML data
        $xml = '';
        if (!empty($objects)) {
            $xml = new \SimpleXMLElement('<export/>');
            $xml->addChild('responseCode', '200');
            $xml->addChild('responseMessage', 'Success');
            foreach ($objects as $object) {
                $track = $xml->addChild('item');
                foreach ($object as $key => $value) {
                    if (in_array($key, array_keys($configOperator))) {
                        if (is_array($value)) {
                            $temp = $track->addChild($configOperator[$key]['label']);
                            foreach ($value as $val) {
                                $temp->addChild($configOperator[$key]['attribute'], $val);
                            }
                        } else {
                            $temp = $track->addChild($configOperator[$key]['label']);
                            $temp->addChild($configOperator[$key]['attribute'], $value);
                        }
                    } else {
                        $track->addChild($fieldsWithKeyLabel[$key], $value);
                    }
                }
            }
            Header('Content-type: text/xml');
        }
        return $xml->asXML();
    }

    protected function getXmlFieldData($field, $object, $requestedLanguage, $helperDefinitions) {
        //check if field is systemfield
        $systemFieldMap = [
            'id' => 'getId',
            'fullpath' => 'getRealFullPath',
            'published' => 'getPublished',
            'creationDate' => 'getCreationDate',
            'modificationDate' => 'getModificationDate',
            'filename' => 'getKey',
            'classname' => 'getClassname'
        ];
        if (in_array($field, array_keys($systemFieldMap))) {
            return $object->{$systemFieldMap[$field]}();
        } else {
            //check if field is standard object field
            $fieldDefinition = $object->getClass()->getFieldDefinition($field);
            if ($fieldDefinition) {
                return $fieldDefinition->getForCsvExport($object);
            } else {
                $fieldParts = explode('~', $field);

                // check for objects bricks and localized fields
                if (\Pimcore\Model\DataObject\Service::isHelperGridColumnConfig($field)) {
                    if ($helperDefinitions[$field]) {
                        return Service::calculateCellValue($object, $helperDefinitions, $field);
                    }
                } elseif (substr($field, 0, 1) == '~') {
                    $type = $fieldParts[1];

                    if ($type == 'classificationstore') {
                        $fieldname = $fieldParts[2];
                        $groupKeyId = explode('-', $fieldParts[3]);
                        $groupId = $groupKeyId[0];
                        $keyId = $groupKeyId[1];
                        $getter = 'get' . ucfirst($fieldname);
                        if (method_exists($object, $getter)) {
                            $keyConfig = \Pimcore\Model\DataObject\Classificationstore\KeyConfig::getById($keyId);
                            $type = $keyConfig->getType();
                            $definition = json_decode($keyConfig->getDefinition());
                            $fieldDefinition = \Pimcore\Model\DataObject\Classificationstore\Service::getFieldDefinitionFromJson($definition, $type);

                            return $fieldDefinition->getForCsvExport(
                                            $object, ['context' => [
                                            'containerType' => 'classificationstore',
                                            'fieldname' => $fieldname,
                                            'groupId' => $groupId,
                                            'keyId' => $keyId,
                                            'language' => $requestedLanguage
                                        ]]
                            );
                        }
                    }
                    //key value store - ignore for now
                } elseif (count($fieldParts) > 1) {
                    // brick
                    $brickType = $fieldParts[0];
                    $brickKey = $fieldParts[1];
                    $key = \Pimcore\Model\DataObject\Service::getFieldForBrickType($object->getClass(), $brickType);

                    $brickClass = \Pimcore\Model\DataObject\Objectbrick\Definition::getByKey($brickType);
                    $fieldDefinition = $brickClass->getFieldDefinition($brickKey);

                    if ($fieldDefinition) {
                        $brickContainer = $object->{'get' . ucfirst($key)}();
                        if ($brickContainer && !empty($brickKey)) {
                            $brick = $brickContainer->{'get' . ucfirst($brickType)}();
                            if ($brick) {
                                return $fieldDefinition->getForCsvExport($brick);
                            }
                        }
                    }
                } elseif ($locFields = $object->getClass()->getFieldDefinition('localizedfields')) {

                    // if the definition is not set try to get the definition from localized fields
                    $fieldDefinition = $locFields->getFieldDefinition($field);
                    if ($fieldDefinition) {
                        $needLocalizedPermissions = true;

                        return $fieldDefinition->getForCsvExport($object->getLocalizedFields(), ['language' => $requestedLanguage]);
                    }
                }
            }
        }
    }

}
