<?php
class Siamese extends Cat
{
    private $name;

    public function __construct($name,$breed, $characteristic)
    {
        $this->setName($name);
        parent::__construct($breed, $characteristic);
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    function __toString()
    {
        return $this->getBreed() . " " . $this->name . " " . $this->getCharacteristic();
    }
}