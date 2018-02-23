<?php 

/** 
* Generated at: 2018-02-22T13:56:38+01:00
* Inheritance: no
* Variants: no
* Changed by: admin (16)
* IP: 127.0.0.1


Fields Summary: 
- ainput [input]
- atextarea [textarea]
- awyswyg [wysiwyg]
- apassword [password]
- ainput_qty_value [inputQuantityValue]
- anumber [numeric]
- aslider [slider]
- aqty_value [quantityValue]
- adateandtime [datetime]
- aboolselect [booleanSelect]
- aselect [select]
- auser [user]
- acountry [country]
- alan [language]
- amultiselection [multiselect]
- acountries_multi [countrymultiselect]
- alan_multi [languagemultiselect]
- ahref [href]
- aobjects [objects]
- amultihrefadv [multihrefMetadata]
- amul_href [multihref]
- ablock [block]
- aclassification_store [classificationstore]
- atable [table]
- astr_table [structuredTable]
- afc [fieldcollections]
- sssssss [nonownerobjects]
*/ 

namespace Pimcore\Model\DataObject;



/**
* @method static \Pimcore\Model\DataObject\TestExport\Listing getByAinput ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\TestExport\Listing getByAtextarea ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\TestExport\Listing getByAwyswyg ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\TestExport\Listing getByApassword ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\TestExport\Listing getByAinput_qty_value ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\TestExport\Listing getByAnumber ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\TestExport\Listing getByAslider ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\TestExport\Listing getByAqty_value ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\TestExport\Listing getByAdateandtime ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\TestExport\Listing getByAboolselect ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\TestExport\Listing getByAselect ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\TestExport\Listing getByAuser ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\TestExport\Listing getByAcountry ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\TestExport\Listing getByAlan ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\TestExport\Listing getByAmultiselection ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\TestExport\Listing getByAcountries_multi ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\TestExport\Listing getByAlan_multi ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\TestExport\Listing getByAhref ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\TestExport\Listing getByAobjects ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\TestExport\Listing getByAmultihrefadv ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\TestExport\Listing getByAmul_href ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\TestExport\Listing getByAblock ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\TestExport\Listing getByAclassification_store ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\TestExport\Listing getByAtable ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\TestExport\Listing getByAstr_table ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\TestExport\Listing getByAfc ($value, $limit = 0) 
*/

class TestExport extends Concrete {

public $o_classId = 45;
public $o_className = "testExport";
public $ainput;
public $atextarea;
public $awyswyg;
public $apassword;
public $ainput_qty_value;
public $anumber;
public $aslider;
public $aqty_value;
public $adateandtime;
public $aboolselect;
public $aselect;
public $auser;
public $acountry;
public $alan;
public $amultiselection;
public $acountries_multi;
public $alan_multi;
public $ahref;
public $aobjects;
public $amultihrefadv;
public $amul_href;
public $ablock;
public $aclassification_store;
public $atable;
public $astr_table;
public $afc;


/**
* @param array $values
* @return \Pimcore\Model\DataObject\TestExport
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
* @return \Pimcore\Model\DataObject\TestExport
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
* @return \Pimcore\Model\DataObject\TestExport
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
* @return \Pimcore\Model\DataObject\TestExport
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
* @return \Pimcore\Model\DataObject\TestExport
*/
public function setApassword ($apassword) {
	$this->apassword = $apassword;
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
* @return \Pimcore\Model\DataObject\TestExport
*/
public function setAinput_qty_value ($ainput_qty_value) {
	$this->ainput_qty_value = $ainput_qty_value;
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
* @return \Pimcore\Model\DataObject\TestExport
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
* @return \Pimcore\Model\DataObject\TestExport
*/
public function setAslider ($aslider) {
	$this->aslider = $aslider;
	return $this;
}

/**
* Get aqty_value - qty_value
* @return \Pimcore\Model\DataObject\Data\QuantityValue
*/
public function getAqty_value () {
	$preValue = $this->preGetValue("aqty_value"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->aqty_value;
	return $data;
}

/**
* Set aqty_value - qty_value
* @param \Pimcore\Model\DataObject\Data\QuantityValue $aqty_value
* @return \Pimcore\Model\DataObject\TestExport
*/
public function setAqty_value ($aqty_value) {
	$this->aqty_value = $aqty_value;
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
* @return \Pimcore\Model\DataObject\TestExport
*/
public function setAdateandtime ($adateandtime) {
	$this->adateandtime = $adateandtime;
	return $this;
}

/**
* Get aboolselect - boolselect
* @return boolean
*/
public function getAboolselect () {
	$preValue = $this->preGetValue("aboolselect"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->aboolselect;
	return $data;
}

/**
* Set aboolselect - boolselect
* @param boolean $aboolselect
* @return \Pimcore\Model\DataObject\TestExport
*/
public function setAboolselect ($aboolselect) {
	$this->aboolselect = $aboolselect;
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
* @return \Pimcore\Model\DataObject\TestExport
*/
public function setAselect ($aselect) {
	$this->aselect = $aselect;
	return $this;
}

/**
* Get auser - user
* @return string
*/
public function getAuser () {
	$preValue = $this->preGetValue("auser"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->auser;
	return $data;
}

/**
* Set auser - user
* @param string $auser
* @return \Pimcore\Model\DataObject\TestExport
*/
public function setAuser ($auser) {
	$this->auser = $auser;
	return $this;
}

/**
* Get acountry - country
* @return string
*/
public function getAcountry () {
	$preValue = $this->preGetValue("acountry"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->acountry;
	return $data;
}

/**
* Set acountry - country
* @param string $acountry
* @return \Pimcore\Model\DataObject\TestExport
*/
public function setAcountry ($acountry) {
	$this->acountry = $acountry;
	return $this;
}

/**
* Get alan - lan
* @return string
*/
public function getAlan () {
	$preValue = $this->preGetValue("alan"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->alan;
	return $data;
}

/**
* Set alan - lan
* @param string $alan
* @return \Pimcore\Model\DataObject\TestExport
*/
public function setAlan ($alan) {
	$this->alan = $alan;
	return $this;
}

/**
* Get amultiselection - multiselection
* @return array
*/
public function getAmultiselection () {
	$preValue = $this->preGetValue("amultiselection"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->amultiselection;
	return $data;
}

/**
* Set amultiselection - multiselection
* @param array $amultiselection
* @return \Pimcore\Model\DataObject\TestExport
*/
public function setAmultiselection ($amultiselection) {
	$this->amultiselection = $amultiselection;
	return $this;
}

/**
* Get acountries_multi - countries_multi
* @return array
*/
public function getAcountries_multi () {
	$preValue = $this->preGetValue("acountries_multi"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->acountries_multi;
	return $data;
}

/**
* Set acountries_multi - countries_multi
* @param array $acountries_multi
* @return \Pimcore\Model\DataObject\TestExport
*/
public function setAcountries_multi ($acountries_multi) {
	$this->acountries_multi = $acountries_multi;
	return $this;
}

/**
* Get alan_multi - lan_multi
* @return array
*/
public function getAlan_multi () {
	$preValue = $this->preGetValue("alan_multi"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->alan_multi;
	return $data;
}

/**
* Set alan_multi - lan_multi
* @param array $alan_multi
* @return \Pimcore\Model\DataObject\TestExport
*/
public function setAlan_multi ($alan_multi) {
	$this->alan_multi = $alan_multi;
	return $this;
}

/**
* Get ahref - href
* @return 
*/
public function getAhref () {
	$preValue = $this->preGetValue("ahref"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->getClass()->getFieldDefinition("ahref")->preGetData($this);
	return $data;
}

/**
* Set ahref - href
* @param  $ahref
* @return \Pimcore\Model\DataObject\TestExport
*/
public function setAhref ($ahref) {
	$this->ahref = $this->getClass()->getFieldDefinition("ahref")->preSetData($this, $ahref);
	return $this;
}

/**
* Get aobjects - objects
* @return \Pimcore\Model\DataObject\AbstractObject[]
*/
public function getAobjects () {
	$preValue = $this->preGetValue("aobjects"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->getClass()->getFieldDefinition("aobjects")->preGetData($this);
	return $data;
}

/**
* Set aobjects - objects
* @param \Pimcore\Model\DataObject\AbstractObject[] $aobjects
* @return \Pimcore\Model\DataObject\TestExport
*/
public function setAobjects ($aobjects) {
	$this->aobjects = $this->getClass()->getFieldDefinition("aobjects")->preSetData($this, $aobjects);
	return $this;
}

/**
* Get amultihrefadv - multihrefadv
* @return \Pimcore\Model\DataObject\Data\ElementMetadata[]
*/
public function getAmultihrefadv () {
	$preValue = $this->preGetValue("amultihrefadv"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->getClass()->getFieldDefinition("amultihrefadv")->preGetData($this);
	return $data;
}

/**
* Set amultihrefadv - multihrefadv
* @param \Pimcore\Model\DataObject\Data\ElementMetadata[] $amultihrefadv
* @return \Pimcore\Model\DataObject\TestExport
*/
public function setAmultihrefadv ($amultihrefadv) {
	$this->amultihrefadv = $this->getClass()->getFieldDefinition("amultihrefadv")->preSetData($this, $amultihrefadv);
	return $this;
}

/**
* Get amul_href - mul_href
* @return 
*/
public function getAmul_href () {
	$preValue = $this->preGetValue("amul_href"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->getClass()->getFieldDefinition("amul_href")->preGetData($this);
	return $data;
}

/**
* Set amul_href - mul_href
* @param  $amul_href
* @return \Pimcore\Model\DataObject\TestExport
*/
public function setAmul_href ($amul_href) {
	$this->amul_href = $this->getClass()->getFieldDefinition("amul_href")->preSetData($this, $amul_href);
	return $this;
}

/**
* Get ablock - block
* @return \Pimcore\Model\DataObject\Data\Block
*/
public function getAblock () {
	$preValue = $this->preGetValue("ablock"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->ablock;
	return $data;
}

/**
* Set ablock - block
* @param \Pimcore\Model\DataObject\Data\Block $ablock
* @return \Pimcore\Model\DataObject\TestExport
*/
public function setAblock ($ablock) {
	$this->ablock = $ablock;
	return $this;
}

/**
* Get aclassification_store - classification_store
* @return \Pimcore\Model\DataObject\Classificationstore
*/
public function getAclassification_store () {
	$preValue = $this->preGetValue("aclassification_store"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->getClass()->getFieldDefinition("aclassification_store")->preGetData($this);
	return $data;
}

/**
* Set aclassification_store - classification_store
* @param \Pimcore\Model\DataObject\Classificationstore $aclassification_store
* @return \Pimcore\Model\DataObject\TestExport
*/
public function setAclassification_store ($aclassification_store) {
	$this->aclassification_store = $aclassification_store;
	return $this;
}

/**
* Get atable - table
* @return array
*/
public function getAtable () {
	$preValue = $this->preGetValue("atable"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->atable;
	return $data;
}

/**
* Set atable - table
* @param array $atable
* @return \Pimcore\Model\DataObject\TestExport
*/
public function setAtable ($atable) {
	$this->atable = $atable;
	return $this;
}

/**
* Get astr_table - str_table
* @return \Pimcore\Model\DataObject\Data\StructuredTable
*/
public function getAstr_table () {
	$preValue = $this->preGetValue("astr_table"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->astr_table;
	return $data;
}

/**
* Set astr_table - str_table
* @param \Pimcore\Model\DataObject\Data\StructuredTable $astr_table
* @return \Pimcore\Model\DataObject\TestExport
*/
public function setAstr_table ($astr_table) {
	$this->astr_table = $astr_table;
	return $this;
}

/**
* @return \Pimcore\Model\DataObject\Fieldcollection
*/
public function getAfc () {
	$preValue = $this->preGetValue("afc"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { return $preValue;}
	$data = $this->getClass()->getFieldDefinition("afc")->preGetData($this);
	 return $data;
}

/**
* Set afc - fc
* @param \Pimcore\Model\DataObject\Fieldcollection $afc
* @return \Pimcore\Model\DataObject\TestExport
*/
public function setAfc ($afc) {
	$this->afc = $this->getClass()->getFieldDefinition("afc")->preSetData($this, $afc);
	return $this;
}

protected static $_relationFields = array (
  'ahref' => 
  array (
    'type' => 'href',
  ),
  'aobjects' => 
  array (
    'type' => 'objects',
  ),
  'amultihrefadv' => 
  array (
    'type' => 'multihrefMetadata',
  ),
  'amul_href' => 
  array (
    'type' => 'multihref',
  ),
);

public $lazyLoadedFields = array (
  0 => 'ahref',
  1 => 'aobjects',
  2 => 'amultihrefadv',
  3 => 'amul_href',
  4 => 'afc',
);

}

