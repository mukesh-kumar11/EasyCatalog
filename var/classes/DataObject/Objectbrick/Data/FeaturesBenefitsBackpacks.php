<?php 

/** 
* Generated at: 2018-02-21T12:13:00+01:00


Fields Summary: 
 - specs [multiselect]
*/ 

namespace Pimcore\Model\DataObject\Objectbrick\Data;

use Pimcore\Model\DataObject;

class FeaturesBenefitsBackpacks extends DataObject\Objectbrick\Data\AbstractData  {

public $type = "featuresBenefitsBackpacks";
public $specs;


/**
* Set specs - 
* @return array
*/
public function getSpecs () {
	$data = $this->specs;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("specs")->isEmpty($data)) {
		return $this->getValueFromParent("specs");
	}
	 return $data;
}

/**
* Set specs - 
* @param array $specs
* @return \Pimcore\Model\DataObject\FeaturesBenefitsBackpacks
*/
public function setSpecs ($specs) {
	$this->specs = $specs;
	return $this;
}

}

