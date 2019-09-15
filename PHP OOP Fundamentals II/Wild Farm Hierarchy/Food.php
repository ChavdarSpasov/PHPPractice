<?php


abstract class Food
{
    protected $quantity;


    public function __construct($quantity)
    {
        $this->quantity = $quantity;
    }

    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }


}