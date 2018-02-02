<?php

namespace EasyCatalogExportBundle;

use Pimcore\Extension\Bundle\AbstractPimcoreBundle;

class EasyCatalogExportBundle extends AbstractPimcoreBundle
{
    public function getJsPaths()
    {
        return [
            '/bundles/easycatalogexport/js/pimcore/startup.js',
            '/bundles/easycatalogexport/js/pimcore/export/exportbutton.js',
            '/bundles/easycatalogexport/js/pimcore/export/exportscreen.js',
            '/bundles/easycatalogexport/js/pimcore/export/panel.js',
            '/bundles/easycatalogexport/js/pimcore/export/exportsearch.js'
        ];
    }
}
