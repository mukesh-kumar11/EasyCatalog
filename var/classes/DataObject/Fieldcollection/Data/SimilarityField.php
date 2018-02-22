<?php 

/** 
* Generated at: 2018-02-21T12:13:31+01:00


Fields Summary: 
 - field [indexFieldSelectionCombo]
 - weight [numeric]
*/ 

namespace Pimcore\Model\DataObject\Fieldcollection\Data;

use Pimcore\Model\DataObject;

class SimilarityField extends DataObject\Fieldcollection\Data\AbstractData  {

public $type = "SimilarityField";
public $field;
public $weight;


/**
* Get field - Field
* @return string
*/
public function getField () {
	$data = $this->field;
	 return $data;
}

/**
* Set field - Field
* @param string $field
* @return \Pimcore\Model\DataObject\SimilarityField
*/
public function setField ($field) {
	$this->field = $field;
	return $this;
}

/**
* Get weight - Weight
* @return float
*/
public function getWeight () {
	$data = $this->weight;
	 return $data;
}

/**
* Set weight - Weight
* @param float $weight
* @return \Pimcore\Model\DataObject\SimilarityField
*/
public function setWeight ($weight) {
	$this->weight = $weight;
	return $this;
}

}

