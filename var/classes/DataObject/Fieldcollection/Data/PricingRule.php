<?php 

/** 
* Generated at: 2018-02-21T12:13:31+01:00


Fields Summary: 
 - ruleId [numeric]
 - name [input]
*/ 

namespace Pimcore\Model\DataObject\Fieldcollection\Data;

use Pimcore\Model\DataObject;

class PricingRule extends DataObject\Fieldcollection\Data\AbstractData  {

public $type = "PricingRule";
public $ruleId;
public $name;


/**
* Get ruleId - Rule Id
* @return float
*/
public function getRuleId () {
	$data = $this->ruleId;
	 return $data;
}

/**
* Set ruleId - Rule Id
* @param float $ruleId
* @return \Pimcore\Model\DataObject\PricingRule
*/
public function setRuleId ($ruleId) {
	$this->ruleId = $ruleId;
	return $this;
}

/**
* Get name - Name
* @return string
*/
public function getName () {
	$data = $this->name;
	 return $data;
}

/**
* Set name - Name
* @param string $name
* @return \Pimcore\Model\DataObject\PricingRule
*/
public function setName ($name) {
	$this->name = $name;
	return $this;
}

}

