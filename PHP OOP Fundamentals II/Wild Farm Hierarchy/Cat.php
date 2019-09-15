<?php

class Cat extends Felime
{
    protected $breed;

    public function __construct($animalType, $animalName, $animalWeight, $livingRegion, $breed)
    {
        parent::__construct($animalType, $animalName, $animalWeight, $livingRegion);
        $this->breed = $breed;
    }

    public function makeSound()
    {
        print "Meowwww!\r\n";
    }

    public function eat($food)
    {
        $this->setFoodEaten($food->getQuantity());
    }

    public function __toString()
    {
        return "$this->animalType[$this->animalName, $this->breed, $this->animalWeight, $this->livingRegion, $this->foodEaten]\r\n";
    }
}