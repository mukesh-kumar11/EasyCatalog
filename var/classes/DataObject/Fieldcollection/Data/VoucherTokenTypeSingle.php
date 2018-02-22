<?php 

/** 
* Generated at: 2018-02-21T12:13:31+01:00


Fields Summary: 
 - token [input]
 - usages [numeric]
 - onlyTokenPerCart [checkbox]
*/ 

namespace Pimcore\Model\DataObject\Fieldcollection\Data;

use Pimcore\Model\DataObject;

class VoucherTokenTypeSingle extends \Pimcore\Bundle\EcommerceFrameworkBundle\Model\AbstractVoucherTokenType  {

public $type = "VoucherTokenTypeSingle";
public $token;
public $usages;
public $onlyTokenPerCart;


/**
* Get token - Token
* @return string
*/
public function getToken () {
	$data = $this->token;
	 return $data;
}

/**
* Set token - Token
* @param string $token
* @return \Pimcore\Model\DataObject\VoucherTokenTypeSingle
*/
public function setToken ($token) {
	$this->token = $token;
	return $this;
}

/**
* Get usages - Usage count
* @return string
*/
public function getUsages () {
	$data = $this->usages;
	 return $data;
}

/**
* Set usages - Usage count
* @param string $usages
* @return \Pimcore\Model\DataObject\VoucherTokenTypeSingle
*/
public function setUsages ($usages) {
	$this->usages = $usages;
	return $this;
}

/**
* Get onlyTokenPerCart - Only token of a cart
* @return boolean
*/
public function getOnlyTokenPerCart () {
	$data = $this->onlyTokenPerCart;
	 return $data;
}

/**
* Set onlyTokenPerCart - Only token of a cart
* @param boolean $onlyTokenPerCart
* @return \Pimcore\Model\DataObject\VoucherTokenTypeSingle
*/
public function setOnlyTokenPerCart ($onlyTokenPerCart) {
	$this->onlyTokenPerCart = $onlyTokenPerCart;
	return $this;
}

}

