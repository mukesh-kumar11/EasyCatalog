<?php 

/** 
* Generated at: 2018-02-27T10:08:54+01:00
* IP: 127.0.0.1


Fields Summary: 
 - name1 [input]
*/ 

namespace Pimcore\Model\DataObject\Fieldcollection\Data;

use Pimcore\Model\DataObject;

class Testfc extends DataObject\Fieldcollection\Data\AbstractData  {

public $type = "testfc";
public $name1;


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

}

