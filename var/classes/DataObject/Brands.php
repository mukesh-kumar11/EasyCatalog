<?php 

/** 
* Generated at: 2017-11-30T13:05:45+01:00
* Inheritance: no
* Variants: no
* Changed by: admin (11)
* IP: 127.0.0.1


Fields Summary: 
- name [input]
*/ 

namespace Pimcore\Model\DataObject;



/**
* @method static \Pimcore\Model\DataObject\Brands\Listing getByName ($value, $limit = 0) 
*/

class Brands extends Concrete {

public $o_classId = 42;
public $o_className = "Brands";
public $name;


/**
* @param array $values
* @return \Pimcore\Model\DataObject\Brands
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get name - name
* @return string
*/
public function getName () {
	$preValue = $this->preGetValue("name"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->name;
	return $data;
}

/**
* Set name - name
* @param string $name
* @return \Pimcore\Model\DataObject\Brands
*/
public function setName ($name) {
	$this->name = $name;
	return $this;
}

protected static $_relationFields = array (
);

public $lazyLoadedFields = array (
);

}

