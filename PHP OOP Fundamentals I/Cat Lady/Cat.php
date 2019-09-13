<?php

class Cat
{
    protected $breed;
    protected $characteristic;

    public function __construct($breed, $characteristic)
    {
        $this->setBreed($breed);
        $this->setCharacteristic($characteristic);
    }

    public function setBreed($breed)
    {
        $this->breed = $breed;
    }

    public function setCharacteristic($characteristic)
    {
        $this->characteristic = $characteristic;
    }

    public function getBreed()
    {
        return $this->breed;
    }

    public function getCharacteristic()
    {
        return $this->characteristic;
    }


}