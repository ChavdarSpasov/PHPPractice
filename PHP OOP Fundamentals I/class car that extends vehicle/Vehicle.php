<?php
class Vehicle
{
    protected $numberDoors;
    protected $color;

    function __construct($color,$numberDoors)
    {
        $this->setColor($color);
        $this->setDoors($numberDoors);
    }

    function setColor($color)
    {
        $this->color = $color;
    }

    function getColor()
    {
        return $this->color;
    }

    protected function setDoors($numberDoors)
    {
        $this->numberDoors = $numberDoors;
    }

    function getDoors()
    {
        return $this->numberDoors;
    }

    public function __set($name, $value)
    {
        $this->{$name}= $value;
    }

    public function __get($name)
    {
        if ($this->{$name}){
            return $this->{$name};
        }else{
            throw new Exception('Not property!');
        }
    }

    public function Paint( string $color){
        $this->setColor($color);
    }

}