<?php 

/** 
* Generated at: 2018-03-15T08:22:52+01:00
* IP: 192.168.10.60


Fields Summary: 
 - name1 [input]
 - aaaaaaaaaaa [input]
*/ 

namespace Pimcore\Model\DataObject\Fieldcollection\Data;

use Pimcore\Model\DataObject;

class Testfc extends DataObject\Fieldcollection\Data\AbstractData  {

public $type = "testfc";
public $name1;
public $aaaaaaaaaaa;


/**
* Get name1 - name1
* @return string
*/
public function getName1 () {
	$data = $this->name1;
	 return $data;
}

/**
* Set name1 - name1
* @param string $name1
* @return \Pimcore\Model\DataObject\Testfc
*/
public function setName1 ($name1) {
	$this->name1 = $name1;
	return $this;
}

/**
* Get aaaaaaaaaaa - aaaaaaaaaaa
* @return string
*/
public function getAaaaaaaaaaa () {
	$data = $this->aaaaaaaaaaa;
	 return $data;
}

/**
* Set aaaaaaaaaaa - aaaaaaaaaaa
* @param string $aaaaaaaaaaa
* @return \Pimcore\Model\DataObject\Testfc
*/
public function setAaaaaaaaaaa ($aaaaaaaaaaa) {
	$this->aaaaaaaaaaa = $aaaaaaaaaaa;
	return $this;
}

}

