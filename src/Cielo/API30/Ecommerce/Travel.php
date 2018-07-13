<?php

namespace Cielo\API30\Ecommerce;

/**
 * Class Travel
 *
 * @package Cielo\API30\Ecommerce
 */
class Travel implements \JsonSerializable{
	private $departureTime;
	private $journeyType;
	private $route;
    private $legs = [];


	public function populate(\stdClass $data){
        $this->departureTime    	= isset($data->departureTime) ? $data->departureTime : null;
        $this->journeyType     		= isset($data->journeyType) ? $data->journeyType : null;
        $this->route     			= isset($data->route) ? $data->route : null;

        if(isset($data->legs)){
            $this->legs = new Legs();
            $this->populate($data->legs);
        }
    }

    public function jsonSerialize(){

        return get_object_vars($this);
    }

    public function legs(){
        $legs = new Legs();

        $this->setLegs($legs);
        return $legs;
    }

    public function setLegs(Legs $legs){
        $this->legs[] = $legs;
        return $this;
    }

    public function getLegs(){

        return $this->legs;
    }

    public function setDepartureTime($departureTime){
        $this->$departureTime = $$departureTime;
        return $this;
    }

    public function getDepartureTime(){

        return $this->departureTime;
    }

    public function setJourneyType($journeyType){
        $this->$journeyType = $$journeyType;
        return $this;
    }

    public function getJourneyType(){

        return $this->journeyType;
    }

    public function setRoute($route){
        $this->$route = $$route;
        return $this;
    }

    public function getRoute(){

        return $this->route;
    }
}