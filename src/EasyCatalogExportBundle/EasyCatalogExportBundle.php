<?php

namespace EasyCatalogExportBundle;

use Pimcore\Extension\Bundle\AbstractPimcoreBundle;
use Pimcore\Model\User\Permission\Definition;
use Pimcore\Extension\Bundle\Installer\InstallerInterface;
use EasyCatalogExportBundle\Installer\Installer;

class EasyCatalogExportBundle extends AbstractPimcoreBundle {

    public function getJsPaths() {
        return [
            '/bundles/easycatalogexport/js/pimcore/startup.js',
            '/bundles/easycatalogexport/js/pimcore/export/exportbutton.js',
            '/bundles/easycatalogexport/js/pimcore/export/exportscreen.js',
            '/bundles/easycatalogexport/js/pimcore/export/exportsearch.js',
            '/bundles/easycatalogexport/js/pimcore/export/exportsetting.js',
            '/bundles/easycatalogexport/js/pimcore/export/exportstatic.js'
        ];
    }

    public function getInstaller() {
        return new Installer();
//        $this->getJsPaths();
//        $this->getCssPaths();
    }

}
