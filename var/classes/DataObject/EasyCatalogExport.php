<?php 

/** 
* Generated at: 2018-02-02T07:18:20+01:00
* Inheritance: no
* Variants: no
* Changed by: admin (16)
* IP: 127.0.0.1


Fields Summary: 
- ClassId [input]
- Filters [textarea]
- ColumnConfig [input]
- XmlUrl [input]
- Caching [checkbox]
*/ 

namespace Pimcore\Model\DataObject;



/**
* @method static \Pimcore\Model\DataObject\EasyCatalogExport\Listing getByClassId ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\EasyCatalogExport\Listing getByFilters ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\EasyCatalogExport\Listing getByColumnConfig ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\EasyCatalogExport\Listing getByXmlUrl ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\EasyCatalogExport\Listing getByCaching ($value, $limit = 0) 
*/

class EasyCatalogExport extends Concrete {

public $o_classId = 43;
public $o_className = "EasyCatalogExport";
public $ClassId;
public $Filters;
public $ColumnConfig;
public $XmlUrl;
public $Caching;


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
* Get ClassId - Class Id
* @return string
*/
public function getClassId () {
	$preValue = $this->preGetValue("ClassId"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->ClassId;
	return $data;
}

/**
* Set ClassId - Class Id
* @param string $ClassId
* @return \Pimcore\Model\DataObject\EasyCatalogExport
*/
public function setClassId ($ClassId) {
	$this->ClassId = $ClassId;
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

protected static $_relationFields = array (
);

public $lazyLoadedFields = array (
);

}

