<?php

namespace Cielo\API30\Ecommerce;

/**
 * Class Payment
 *
 * @package Cielo\API30\Ecommerce
 */
class Items implements \JsonSerializable
{
	private $giftCategory;
	private $hostHedge;
	private $nonSensicalHedge;
	private $obscenitiesHedge;
	private $phoneHedge;
	private $name;
	private $quantity;
	private $sku;
	private $unitPrice;
	private $risk;
	private $timeHedge;
	private $type;
	private $velocityHedge;
	private $passenger;

 	public function populate(\stdClass $data)
    {
        $this->giftCategory     = isset($data->giftCategory)     ? $data->giftCategory     : 'Undefined';
        $this->hostHedge        = isset($data->hostHedge)        ? $data->hostHedge        : 'off';
        $this->nonSensicalHedge = isset($data->nonSensicalHedge) ? $data->nonSensicalHedge : 'off';
        $this->obscenitiesHedge = isset($data->obscenitiesHedge) ? $data->obscenitiesHedge : 'off';
        $this->phoneHedge       = isset($data->phoneHedge)       ? $data->phoneHedge       : 'off';
        $this->name             = isset($data->name)             ? $data->name             : 'Item Teste';
        $this->quantity         = isset($data->quantity)         ? $data->quantity         : 1;
        $this->sku              = isset($data->sku)              ? $data->sku              : '123451234512';
        $this->unitPrice        = isset($data->unitPrice)        ? $data->unitPrice        : 17690;
        $this->risk             = isset($data->unitPrice)        ? $data->risk             : "High";
        $this->timeHedge        = isset($data->timeHedge)        ? $data->timeHedge        : "Normal";
        $this->type             = isset($data->type)             ? $data->type             : "AdultContent";
        $this->velocityHedge    = isset($data->velocityHedge)    ? $data->velocityHedge    : "High";
        $this->passenger        = isset($data->passenger)        ? $data->passenger        : [
             "Email"    => "compradorteste@live.com",
             "Identity" => "1234567890",
             "Name"     => "Comprador accept",
             "Rating"   => "Adult",
             "Phone"    => "999994444",
             "Status"   => "Accepted",
        ];
    }

	public function jsonSerialize()
    {
        return get_object_vars($this);
    }

    public function setGiftCategory($giftCategory)
    {
    	$this->giftCategory = $giftCategory;
        return $this;
    }

    public function getGiftCategory()
    {
    	return $this->giftCategory;
    }

    public function setHostHedge($hostHedge)
    {
    	$this->hostHedge = $hostHedge;
        return $this;
    }

    public function getHostHedge()
    {
    	return $this->hostHedge;
    }

        public function setNonSensicalHedge($nonSensicalHedge)
    {
    	$this->nonSensicalHedge = $nonSensicalHedge;
        return $this;
    }

    public function getNonSensicalHedge()
    {
    	return $this->nonSensicalHedge;
    }

    public function setObscenitiesHedge($obscenitiesHedge)
    {
    	$this->obscenitiesHedge = $obscenitiesHedge;
        return $this;
    }

    public function getObscenitiesHedgee()
    {
    	return $this->obscenitiesHedge;
    }

    public function setPhoneHedge($phoneHedge)
    {
    	$this->phoneHedge = $phoneHedge;
        return $this;
    }

    public function getPhoneHedge()
    {
    	return $this->phoneHedge;
    }

    public function setName($name)
    {
    	$this->name = $name;
        return $this;
    }

    public function getName()
    {
    	return $this->name;
    }

    public function setQuantity($quantity)
    {
    	$this->quantity = $quantity;
        return $this;
    }

    public function getQuantity()
    {
    	return $this->quantity;
    }

    public function setSku($sku)
    {
    	$this->sku = $sku;
        return $this;
    }

    public function getSku()
    {
    	return $this->sku;
    }

    public function setUnitPrice($unitPrice)
    {
    	$this->unitPrice = $unitPrice;
        return $this;
    }

    public function getUnitPrice()
    {
    	return $this->unitPrice;
    }

    public function setTimeHedge($timeHedge)
    {
    	$this->timeHedge = $timeHedge;
        return $this;
    }

    public function getTimeHedge()
    {
    	return $this->timeHedge;
    }

    public function setType($type)
    {
    	$this->type = $type;
        return $this;
    }

    public function getType()
    {
    	return $this->type;
    }

    public function setVelocityHedge($velocityHedge)
    {
    	$this->velocityHedge = $velocityHedge;
        return $this;
    }

    public function getVelocityHedge()
    {
    	return $this->velocityHedge;
    }

    public function setPassenger($passenger)
    {
    	$this->passenger = $passenger;
        return $this;
    }

    public function getPassenger()
    {
    	return $this->passenger;
    }

    public function setRisk($risk)
    {
        $this->risk = $risk;
        return $this;
    }

    public function getRisk()
    {
        return $this->risk;
    }


}