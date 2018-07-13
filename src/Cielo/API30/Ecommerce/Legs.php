<?php

namespace Cielo\API30\Ecommerce;

/**
 * Class Legs
 *
 * @package Cielo\API30\Ecommerce
 */
class Legs implements \JsonSerializable{
	private $destination;
	private $origin;

	public function populate(\stdClass $data){
        $this->destination    	= isset($data->destination) ? $data->destination : null;
        $this->origin     		= isset($data->origin)      ? $data->origin      : null;
    }

    public function jsonSerialize(){

        return get_object_vars($this);
    }

    public function setDestination($destination){
        $this->destination = $destination;
        return $this;
    }

    public function getDestination(){

        return $this->destination;
    }
    public function setOrigin($origin){
        $this->origin = $origin;
        return $this;
    }

    public function getOrigin(){

        return $this->origin;
    }
}