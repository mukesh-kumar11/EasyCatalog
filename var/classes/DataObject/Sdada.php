<?php 

/** 
* Generated at: 2018-02-22T14:29:19+01:00
* Inheritance: no
* Variants: no
* Changed by: admin (16)
* IP: 203.122.33.130


Fields Summary: 
- ainput [input]
- atextarea [textarea]
- awyswyg [wysiwyg]
- apassword [password]
- anumber [numeric]
- aslider [slider]
- adateandtime [datetime]
- aselect [select]
- jgjhgj [language]
- ainput_qty_value [inputQuantityValue]
*/ 

namespace Pimcore\Model\DataObject;



/**
* @method static \Pimcore\Model\DataObject\Sdada\Listing getByAinput ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\Sdada\Listing getByAtextarea ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\Sdada\Listing getByAwyswyg ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\Sdada\Listing getByApassword ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\Sdada\Listing getByAnumber ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\Sdada\Listing getByAslider ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\Sdada\Listing getByAdateandtime ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\Sdada\Listing getByAselect ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\Sdada\Listing getByJgjhgj ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\Sdada\Listing getByAinput_qty_value ($value, $limit = 0) 
*/

class Sdada extends Concrete {

public $o_classId = 46;
public $o_className = "sdada";
public $ainput;
public $atextarea;
public $awyswyg;
public $apassword;
public $anumber;
public $aslider;
public $adateandtime;
public $aselect;
public $jgjhgj;
public $ainput_qty_value;


/**
* @param array $values
* @return \Pimcore\Model\DataObject\Sdada
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get ainput - input
* @return string
*/
public function getAinput () {
	$preValue = $this->preGetValue("ainput"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->ainput;
	return $data;
}

/**
* Set ainput - input
* @param string $ainput
* @return \Pimcore\Model\DataObject\Sdada
*/
public function setAinput ($ainput) {
	$this->ainput = $ainput;
	return $this;
}

/**
* Get atextarea - textarea
* @return string
*/
public function getAtextarea () {
	$preValue = $this->preGetValue("atextarea"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->atextarea;
	return $data;
}

/**
* Set atextarea - textarea
* @param string $atextarea
* @return \Pimcore\Model\DataObject\Sdada
*/
public function setAtextarea ($atextarea) {
	$this->atextarea = $atextarea;
	return $this;
}

/**
* Get awyswyg - wyswyg
* @return string
*/
public function getAwyswyg () {
	$preValue = $this->preGetValue("awyswyg"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->getClass()->getFieldDefinition("awyswyg")->preGetData($this);
	return $data;
}

/**
* Set awyswyg - wyswyg
* @param string $awyswyg
* @return \Pimcore\Model\DataObject\Sdada
*/
public function setAwyswyg ($awyswyg) {
	$this->awyswyg = $awyswyg;
	return $this;
}

/**
* Get apassword - password
* @return string
*/
public function getApassword () {
	$preValue = $this->preGetValue("apassword"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->apassword;
	return $data;
}

/**
* Set apassword - password
* @param string $apassword
* @return \Pimcore\Model\DataObject\Sdada
*/
public function setApassword ($apassword) {
	$this->apassword = $apassword;
	return $this;
}

/**
* Get anumber - number
* @return float
*/
public function getAnumber () {
	$preValue = $this->preGetValue("anumber"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->anumber;
	return $data;
}

/**
* Set anumber - number
* @param float $anumber
* @return \Pimcore\Model\DataObject\Sdada
*/
public function setAnumber ($anumber) {
	$this->anumber = $anumber;
	return $this;
}

/**
* Get aslider - slider
* @return float
*/
public function getAslider () {
	$preValue = $this->preGetValue("aslider"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->aslider;
	return $data;
}

/**
* Set aslider - slider
* @param float $aslider
* @return \Pimcore\Model\DataObject\Sdada
*/
public function setAslider ($aslider) {
	$this->aslider = $aslider;
	return $this;
}

/**
* Get adateandtime - dateandtime
* @return \Carbon\Carbon
*/
public function getAdateandtime () {
	$preValue = $this->preGetValue("adateandtime"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->adateandtime;
	return $data;
}

/**
* Set adateandtime - dateandtime
* @param \Carbon\Carbon $adateandtime
* @return \Pimcore\Model\DataObject\Sdada
*/
public function setAdateandtime ($adateandtime) {
	$this->adateandtime = $adateandtime;
	return $this;
}

/**
* Get aselect - select
* @return string
*/
public function getAselect () {
	$preValue = $this->preGetValue("aselect"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->aselect;
	return $data;
}

/**
* Set aselect - select
* @param string $aselect
* @return \Pimcore\Model\DataObject\Sdada
*/
public function setAselect ($aselect) {
	$this->aselect = $aselect;
	return $this;
}

/**
* Get jgjhgj - jgjhgj
* @return string
*/
public function getJgjhgj () {
	$preValue = $this->preGetValue("jgjhgj"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->jgjhgj;
	return $data;
}

/**
* Set jgjhgj - jgjhgj
* @param string $jgjhgj
* @return \Pimcore\Model\DataObject\Sdada
*/
public function setJgjhgj ($jgjhgj) {
	$this->jgjhgj = $jgjhgj;
	return $this;
}

/**
* Get ainput_qty_value - input_qty_value
* @return \Pimcore\Model\DataObject\Data\InputQuantityValue
*/
public function getAinput_qty_value () {
	$preValue = $this->preGetValue("ainput_qty_value"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->ainput_qty_value;
	return $data;
}

/**
* Set ainput_qty_value - input_qty_value
* @param \Pimcore\Model\DataObject\Data\InputQuantityValue $ainput_qty_value
* @return \Pimcore\Model\DataObject\Sdada
*/
public function setAinput_qty_value ($ainput_qty_value) {
	$this->ainput_qty_value = $ainput_qty_value;
	return $this;
}

protected static $_relationFields = array (
);

public $lazyLoadedFields = array (
);

}

