<?php

namespace Cielo\API30\Ecommerce;

/**
 * Class Payment
 *
 * @package Cielo\API30\Ecommerce
 */
class FraudAnalysis implements \JsonSerializable{
    const FRAUDSEQUENCECRITERIA_ONSUCCESS = 'OnSuccess';
    const FRAUDSEQUENCECRITERIA_ALWAYS    = 'Always';
    const FRAUDSEQUENCECRITERIA_SEQUENCE  = 'AuthorizeFirst';

    private $sequence;
	private $sequenceCriteria;
	private $fingerPrintId;
	private $browser;
	private $cart;
	private $merchantDefinedFields = [];
	private $shipping;
	private $travel;

	public function __construct($sequenceCriteria = self::FRAUDSEQUENCECRITERIA_ONSUCCESS){
		$this->sequence         = self::FRAUDSEQUENCECRITERIA_SEQUENCE;
		$this->sequenceCriteria = $sequenceCriteria;
	}

	public function populate(\stdClass $data){
		$this->sequence    				= isset($data->sequence)         ? $data->sequence         : self::FRAUDSEQUENCECRITERIA_SEQUENCE;
        $this->sequenceCriteria     	= isset($data->sequenceCriteria) ? $data->sequenceCriteria : self::FRAUDSEQUENCECRITERIA_ALWAYS;
        $this->fingerPrintId 			= isset($data->fingerPrintId)    ? $data->fingerPrintId    : null;

        if(isset($data->browser)){
        	$this->browser =  new Browser();
        	$this->browser->populate($data->browser);
        }

        if(isset($data->cart)){
        	$this->cart = new Cart();
        	$this->cart->populate($data->cart);
        }

        if(isset($data->merchantDefinedFields)){
        	$this->merchantDefinedFields = new MerchantDefinedFields();
        	$this->merchantDefinedFields->populate($data->merchantDefinedFields);
        }

        if(isset($data->shipping)){
        	$this->shipping =  new Shipping();
        	$this->shipping->populate($data->shipping);

        }

        if(isset($data->travel)){
        	$this->travel = new Travel();
        	$this->populate($data->travel);

        }
	}

    public function setSequence($sequence){
        $this->sequence = $sequence;
        return $this;
    }

	public function jsonSerialize(){

        return get_object_vars($this);
    }

    public function browser(){
        $browser = new Browser();

        $this->setBrowser($browser);

        return $browser;
    }

    public function setBrowser(Browser $browser){
        $this->browser = $browser;
        return $this;
    }

    public function getBrowser(){

        return $this->browser;
    }

    public function shipping(){
        $shipping = new Shipping();

        $this->setShipping($shipping);

        return $shipping;
    }

    public function setShipping(Shipping $shipping){
        $this->shipping = $shipping;
        return $this;
    }

    public function getShipping(){

        return $this->shipping;
    }

    public function merchantDefinedFields(){
    	$merchantDefinedFields = new MerchantDefinedFields();

    	$this->setMerchantDefinedFields($merchantDefinedFields);

    	return $merchantDefinedFields;
    }

    public function setMerchantDefinedFields(MerchantDefinedFields $MerchantDefinedFields){
    	$this->merchantDefinedFields[] = $MerchantDefinedFields;
        return $this;
    }

    public function getMerchantDefinedFields(){

        return $this->merchantDefinedFields;
    }

    public function setfingerPrintId($fingerPrintId){
        $this->fingerPrintId = $fingerPrintId;
        return $this;
    }

    public function getfingerPrintId(){

        return $this->fingerPrintId;
    }



    public function cart(){
    	$cart = new Cart();

    	$this->setCart($cart);
    	return $cart;
    }

    public function setCart(Cart $cart){
    	$this->cart = $cart;
        return $this;
    }

    public function getCart(){

        return $this->cart;
    }

    public function travel(){
        $travel = new Travel();

        $this->setTravel($travel);
        return $travel;
    }

    public function setTravel(Travel $travel){
        $this->travel = $travel;
        return $this;
    }

    public function getTravel(){

        return $this->travel;
    }
}