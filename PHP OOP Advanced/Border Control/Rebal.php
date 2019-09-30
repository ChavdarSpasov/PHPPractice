<?php

class Rebel implements IBuyer
{
    private $name;
    private $age;
    private $group;
    private $food = 0;

    public function __construct($name, $age, $group)
    {
        $this->setName($name);
        $this->age = $age;
        $this->group = $group;
    }

    public function BuyFood()
    {
        $this->food +=5;
    }

    public function getFood(): int
    {
        return $this->food;
    }



    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }



}