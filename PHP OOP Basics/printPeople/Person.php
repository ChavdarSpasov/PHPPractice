<?php 
class Person
{
    private $name;
    private $age;
    private $occupation;

    public function __construct($name, $age, $occupation)
    {
        $this->name = $name;
        $this->age = $age;
        $this->occupation = $occupation;
    }


    function __toString()
    {
        return "$this->name - age: $this->age, occupation: $this->occupation";
    }

}