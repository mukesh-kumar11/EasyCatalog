<?php 

/** 
* Generated at: 2018-02-21T12:13:32+01:00


Fields Summary: 
 - image [image]
*/ 

namespace Pimcore\Model\DataObject\Fieldcollection\Data;

use Pimcore\Model\DataObject;

class ProductImages extends DataObject\Fieldcollection\Data\AbstractData  {

public $type = "productImages";
public $image;


/**
* Get image - Image
* @return \Pimcore\Model\Asset\Image
*/
public function getImage () {
	$data = $this->image;
	 return $data;
}

/**
* Set image - Image
* @param \Pimcore\Model\Asset\Image $image
* @return \Pimcore\Model\DataObject\ProductImages
*/
public function setImage ($image) {
	$this->image = $image;
	return $this;
}

}

