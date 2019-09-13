<?php

class Product
{
    private $name;
    private $cost;

    public function __construct($name, $cost)
    {
        $this->setName($name);
        $this->setCost($cost);
    }

    function setName($name)
    {
        if ($name == " ") {
            throw new Exception('Name cannot be empty');
        } else {
            $this->name = $name;
        }
    }

    function setCost($cost)
    {
        if ($cost < 0) {
            throw new Exception('Money cannot be negative');
        } else {
            $this->cost = $cost;
        }
    }

    public function getCost()
    {
        return $this->cost;
    }


}