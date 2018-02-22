<?php 

/** 
* Generated at: 2018-02-22T07:52:55+01:00
* IP: 203.122.33.130


Fields Summary: 
 - sssssss [input]
*/ 

namespace Pimcore\Model\DataObject\Objectbrick\Data;

use Pimcore\Model\DataObject;

class TestData extends DataObject\Objectbrick\Data\AbstractData  {

public $type = "TestData";
public $sssssss;


/**
* Set sssssss - sssssss
* @return string
*/
public function getSssssss () {
	$data = $this->sssssss;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("sssssss")->isEmpty($data)) {
		return $this->getValueFromParent("sssssss");
	}
	 return $data;
}

/**
* Set sssssss - sssssss
* @param string $sssssss
* @return \Pimcore\Model\DataObject\TestData
*/
public function setSssssss ($sssssss) {
	$this->sssssss = $sssssss;
	return $this;
}

}

