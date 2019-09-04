<?php

class Car
{
    private $speed;
    private $fuel;
    private $fuelEconomy;
    private $distance;
    private $time;

    public function __construct(float $speed,
                                float $fuel,
                                float $fuelEconomy)
    {
        $this->speed = $speed;
        $this->fuel = $fuel;
        $this->fuelEconomy = $fuelEconomy;

        $this->distance = 0;
        $this->time = 0;
    }

    function Travel(float $distance)
    {

        $litersPerCurrentKilometer = $this->fuelEconomy / 100;
        $kilometersPerCurrentLiterFuel = 100 / $this->fuelEconomy;
        $maxDistanceWIthCurrentFuel = $kilometersPerCurrentLiterFuel 
                                        * $this->fuel;

        if ($distance >= $maxDistanceWIthCurrentFuel) {

            $this->distance += $maxDistanceWIthCurrentFuel;
            $this->time += $maxDistanceWIthCurrentFuel / $this->speed;
            $this->fuel = 0;
        } else {

            $this->distance += $distance;
            $this->time += $distance / $this->speed;
            $this->fuel -= $litersPerCurrentKilometer * $distance;

        }


    }

    function Refuel(float $fuel)
    {
        $this->fuel += $fuel;
    }

    function Distance()
    {
        print "Total Distance:" . number_format($this->distance,1) 
        . " kilometers\r\n";

    }

    function Time()
    {

        $hours = (int)$this->time;
        $minutes = $this->time - $hours;

        print "Total Time: $hours hours and $minutes minutes \r\n";
    }

    function Fuel()
    {
        print "Fuel left:" . number_format($this->time, 1) . " liters\r\n";
    }

}