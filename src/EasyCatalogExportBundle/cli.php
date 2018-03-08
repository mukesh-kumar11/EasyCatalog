<?php

namespace EasyCatalogExportBundle;

use EasyCatalogExportBundle\Lib\Export;
use Pimcore\Model\DataObject;

chdir(__DIR__);
define('SCRIPT_ROOT', dirname(__FILE__));
include_once(SCRIPT_ROOT . '/../../pimcore/config/startup_cli.php');

$obj = new Export();
$obj->index();
