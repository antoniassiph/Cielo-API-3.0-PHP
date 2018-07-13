<?php

namespace Cielo\API30\Ecommerce;

/**
 * Class Cart
 *
 * @package Cielo\API30\Ecommerce
 */
class Cart implements \JsonSerializable{
	private $isGift;
	private $returnAccepted;
	private $items = [];

	public function jsonSerialize(){

        return get_object_vars($this);
    }

    public function populate(\stdClass $data){
    	$this->isGift 				= isset($data->isGift)         ? $data->isGift         : false;
    	$this->returnAccepted    	= isset($data->returnAccepted) ? $data->returnAccepted : true;

        if(isset($data->items)){
    		$this->items = new Items();
    		$this->populate($data->items);
    	}
    }

    public function setIsGift($isGift){
    	$this->isGift = $isGift;
        return $this;
    }

    public function getIsGift(){

        return $this->isGift;
    }

    public function items(){
        $items = new Items();
        return $items;
    }

    public function setItems(Items $items){
    	$this->items[] = $items;
        return $this;
    }

    public function getItems(){

    	return $this->items;
    }

    public function setReturnAccepted($returnAccepted){
    	$this->returnAccepted = $returnAccepted;
        return $this;
    }

    public function getReturnAccepted(){

    	return $this->returnAccepted;
    }

}