<?php 

/** 
* Generated at: 2018-03-06T11:17:52+01:00
* Inheritance: no
* Variants: no
* Changed by: admin (16)
* IP: 127.0.0.1


Fields Summary: 
- ExportClassId [input]
- Filters [textarea]
- ColumnConfig [input]
- XmlUrl [input]
- Caching [checkbox]
- folderId [input]
*/ 

namespace Pimcore\Model\DataObject;



/**
* @method static \Pimcore\Model\DataObject\EasyCatalogExport\Listing getByExportClassId ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\EasyCatalogExport\Listing getByFilters ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\EasyCatalogExport\Listing getByColumnConfig ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\EasyCatalogExport\Listing getByXmlUrl ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\EasyCatalogExport\Listing getByCaching ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\EasyCatalogExport\Listing getByFolderId ($value, $limit = 0) 
*/

class EasyCatalogExport extends Concrete {

public $o_classId = 60;
public $o_className = "EasyCatalogExport";
public $ExportClassId;
public $Filters;
public $ColumnConfig;
public $XmlUrl;
public $Caching;
public $folderId;


/**
* @param array $values
* @return \Pimcore\Model\DataObject\EasyCatalogExport
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get ExportClassId - Export Class Id
* @return string
*/
public function getExportClassId () {
	$preValue = $this->preGetValue("ExportClassId"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->ExportClassId;
	return $data;
}

/**
* Set ExportClassId - Export Class Id
* @param string $ExportClassId
* @return \Pimcore\Model\DataObject\EasyCatalogExport
*/
public function setExportClassId ($ExportClassId) {
	$this->ExportClassId = $ExportClassId;
	return $this;
}

/**
* Get Filters - Filters
* @return string
*/
public function getFilters () {
	$preValue = $this->preGetValue("Filters"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->Filters;
	return $data;
}

/**
* Set Filters - Filters
* @param string $Filters
* @return \Pimcore\Model\DataObject\EasyCatalogExport
*/
public function setFilters ($Filters) {
	$this->Filters = $Filters;
	return $this;
}

/**
* Get ColumnConfig - Column Configuration
* @return string
*/
public function getColumnConfig () {
	$preValue = $this->preGetValue("ColumnConfig"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->ColumnConfig;
	return $data;
}

/**
* Set ColumnConfig - Column Configuration
* @param string $ColumnConfig
* @return \Pimcore\Model\DataObject\EasyCatalogExport
*/
public function setColumnConfig ($ColumnConfig) {
	$this->ColumnConfig = $ColumnConfig;
	return $this;
}

/**
* Get XmlUrl - Xml Url
* @return string
*/
public function getXmlUrl () {
	$preValue = $this->preGetValue("XmlUrl"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->XmlUrl;
	return $data;
}

/**
* Set XmlUrl - Xml Url
* @param string $XmlUrl
* @return \Pimcore\Model\DataObject\EasyCatalogExport
*/
public function setXmlUrl ($XmlUrl) {
	$this->XmlUrl = $XmlUrl;
	return $this;
}

/**
* Get Caching - Caching
* @return boolean
*/
public function getCaching () {
	$preValue = $this->preGetValue("Caching"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->Caching;
	return $data;
}

/**
* Set Caching - Caching
* @param boolean $Caching
* @return \Pimcore\Model\DataObject\EasyCatalogExport
*/
public function setCaching ($Caching) {
	$this->Caching = $Caching;
	return $this;
}

/**
* Get folderId - Folder Id
* @return string
*/
public function getFolderId () {
	$preValue = $this->preGetValue("folderId"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->folderId;
	return $data;
}

/**
* Set folderId - Folder Id
* @param string $folderId
* @return \Pimcore\Model\DataObject\EasyCatalogExport
*/
public function setFolderId ($folderId) {
	$this->folderId = $folderId;
	return $this;
}

protected static $_relationFields = array (
);

public $lazyLoadedFields = array (
);

}

