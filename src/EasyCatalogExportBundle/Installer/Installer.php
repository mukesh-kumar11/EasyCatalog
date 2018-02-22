<?php

namespace EasyCatalogExportBundle\Installer;

use Pimcore\Extension\Bundle\Installer\AbstractInstaller;
use Pimcore\Model\User\Permission\Definition;

class Installer extends AbstractInstaller {

    public $className = array('EasyCatalogExport');

    public function install() {
        $path = self::getInstallPath();
        if (!is_dir($path)) {
            $permissionDefinition = new Definition();
            $permissionDefinition->setKey("plugin_easycatalog_config");
            $permissionDefinition->save();
            $permissionDefinition = new Definition();
            $permissionDefinition->setKey("plugin_easycatalog_export");
            $permissionDefinition->save();
            mkdir($path);
        }
        $this->createClass();
        $this->importClass();
        return true;
    }

    /**
     * Create EasyCatalog class
     * 
     * @return boolean
     */
    public function createClass() {
        if (!empty($this->className)) {
            foreach ($this->className as $key => $value) {
                $class = \Pimcore\Model\DataObject\ClassDefinition::getByName($value);
                if (empty($class)) {
                    $class = \Pimcore\Model\DataObject\ClassDefinition::create(
                                    [
                                        'name' => $value,
                                        'userOwner' => $this->userId
                                    ]
                    );
                    $class->save();
                }
            }
        }
        return true;
    }

    /**
     * Import EasyCatalog class
     * 
     * @return boolean
     */
    public function importClass() {
        if (!empty($this->className)) {
            foreach ($this->className as $key => $value) {
                $class = \Pimcore\Model\DataObject\ClassDefinition::getByName($value);
                $json = file_get_contents(PIMCORE_PROJECT_ROOT . "/src/EasyCatalogExportBundle/Resources/class_dumps/class_" . $value . "_export.json");
                $array = json_decode($json, true);
                $array['layoutDefinitions']['childs'][0]['childs'][0]['classes'] = [];
                $json = json_encode($array);
                $success = \Pimcore\Model\DataObject\ClassDefinition\Service::importClassDefinitionFromJson($class, $json);
            }
        }
        return true;
    }

    public static function getInstallPath() {
        return PIMCORE_PROJECT_ROOT . "/src/EasyCatalogExportBundle/install";
    }

    public function needsReloadAfterInstall() {
        return true;
    }

    public function isInstalled() {
        $path = self::getInstallPath();
        if (is_dir($path)) {
            return true;
        } else {
            return false;
        }
    }

    public function canBeInstalled() {
        return !$this->isInstalled();
    }

    public function canBeUninstalled() {
        return true;
    }

    public function uninstall() {
        $path = self::getInstallPath();
        if (is_dir($path)) {
            rmdir($path);
        }

        $db = \Pimcore\Db::getConnection();
        $key_to_delete = 'plugin_easycatalog_config';
        $sql = "DELETE FROM `users_permission_definitions` WHERE `key` IN ('plugin_easycatalog_config','plugin_easycatalog_export')";
        $query = $db->prepare($sql);
        $query->execute(array(":key_to_delete" => $key_to_delete));

        if (!empty($this->className)) {
            foreach ($this->className as $key => $value) {
                $class = \Pimcore\Model\DataObject\ClassDefinition::getByName($value);
                if (!empty($class)) {
                    $class->delete();
                }
            }
        }
        return true;
    }

}
