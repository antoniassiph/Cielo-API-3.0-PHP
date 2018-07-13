<?php

namespace Cielo\API30\Ecommerce;

/**
 * Class Browser
 *
 * @package Cielo\API30\Ecommerce
 */
class Browser implements \JsonSerializable{
	private $cookiesAccepted;
	private $email;
	private $hostName;
	private $ipAddress;
	private $type;

	/**
     * @param \stdClass $data
     */
	public function populate(\stdClass $data){

        $this->cookiesAccepted  = isset($data->cookiesAccepted) ? $data->cookiesAccepted : true;
        $this->email     		= isset($data->email) 			? $data->email 			 : null;
        $this->hostName 		= isset($data->hostName) 		? $data->hostName 		 : null;
        $this->ipAddress 		= isset($data->ipAddress) 		? $data->ipAddress 		 : $_SERVER['REMOTE_ADDR'];
        $this->type 			= isset($data->type) 			? $data->type 			 : $_SERVER['HTTP_USER_AGENT'];
    }

    public function jsonSerialize(){
        return get_object_vars($this);
    }

	public function setCookieAccepted($accepted){
		$this->cookiesAccepted = $accepted;
		return $this;
	}

	public function getCookieAccepted(){
		return $this->cookiesAccepted;
	}

	public function setEmail($email){
		$this->email = $email;
		return $this;
	}

	public function getEmail(){
		return $this->email;
	}

	public function setIpAddress($ipAddress){
		$this->ipAddress = $ipAddress;
		return $this;
	}

	public function getIpAddress(){
		return $this->ipAddress;
	}

	public function setType($type){
		$this->type = $type;
		return $this;
	}

	public function getType(){
		return $this->type;
	}
}