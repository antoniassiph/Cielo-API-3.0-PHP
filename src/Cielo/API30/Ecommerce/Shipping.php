<?php

namespace Cielo\API30\Ecommerce;

/**
 * Class Shipping
 *
 * @package Cielo\API30\Ecommerce
 */
class Shipping implements \JsonSerializable{
	private $addressee;
	private $method;
	private $phone;

	/**
     * @param \stdClass $data
     */
    public function populate(\stdClass $data){
        $this->addressee    = isset($data->addressee) 	? $data->addressee 	: null;
        $this->method     	= isset($data->method) 		? $data->method 	: null;
        $this->phone 		= isset($data->phone) 		? $data->phone 		: null;
    }

    public function jsonSerialize(){

        return get_object_vars($this);
    }

	public function setAddressee($addressee){
		$this->addressee = $addressee;
		return $this;
	}

	public function getAddressee(){

		return $this->addressee;
	}

	public function setMethod($method){
		$this->method = $method;
		return $this;
	}

	public function getMethod(){

		return $this->method;
	}

	public function setPhone($phone){
		$this->phone = $phone;
		return $this;
	}

	public function getPhone(){

		return $this->phone;
	}
}