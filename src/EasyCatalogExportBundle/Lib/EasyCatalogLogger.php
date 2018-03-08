<?php

namespace EasyCatalogExportBundle\Lib;

use \Pimcore\Log\ApplicationLogger;

class EasyCatalogLogger {

    static private $logger;

    static function log() {
        if (!self::$logger) {
            self::$logger = \Pimcore\Log\ApplicationLogger::getInstance("EasyCatalogExport", true);
        }
        return self::$logger;
    }

}
