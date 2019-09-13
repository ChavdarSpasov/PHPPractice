<?php

class Person
{
    private $name;
    private $money;
    public $bagOfProducts;

    public function __construct($name, $money)
    {
        $this->setName($name);
        $this->setMoney($money);
        $this->bagOfProducts = [];
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }

    public function setMoney($money)
    {
        if ($money < 0) {
            throw new Exception('Money cannot be negative');
        } else {
            $this->money = $money;
        }
    }

    public function getMoney()
    {
        return $this->money;
    }

}