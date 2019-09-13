<?php

include_once "Vehicle.php";

class Car extends Vehicle
{
    private $model;
    private $year;
    private $brand;

    public function __construct($color,
                                $numberDoors,
                                $model,
                                $year,
                                $brand)
    {
        parent::__construct($color, $numberDoors);
        $this->model = $model;
        $this->year = $year;
        $this->brand = $brand;
    }

    public function paintCar($color)
    {
        $this->setColor($color);
    }


}