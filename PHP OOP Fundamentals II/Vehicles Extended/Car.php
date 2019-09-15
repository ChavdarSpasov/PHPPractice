<?php

class Car extends Automobile
{

    private $fuelCar;

    /**
     * Car constructor.
     * @param $fuelCar
     */
    public function __construct($fuelQuantity, $fuelConsumptionLitterPerKilometer, $tankCapacity,$fuelCar = null)
    {
        parent::__construct($fuelQuantity, $fuelConsumptionLitterPerKilometer, $tankCapacity);
        $this->fuelCar = $fuelQuantity;
    }


    public function setFuelConsumptionLitterPerKilometer($fuelConsumptionLitterPerKilometer)
    {
        $this->fuelConsumptionLitterPerKilometer = $fuelConsumptionLitterPerKilometer + 0.9;
    }

    public function carRefuel($litters)
    {
        if ($litters < 0) {
            print 'Fuel must be positive number.'. "\r\n";
        } elseif ($litters + $this->fuelCar > $this->tankCapacity){
            print 'Cannot fit fuel in tank.'. "\r\n";
        } else {
            $this->fuelCar += $litters;
        }

    }

    public function carDrive($distance)
    {
        $maxDistance = $this->fuelCar / $this->fuelConsumptionLitterPerKilometer;
        if ($maxDistance < $distance or $maxDistance <=0) {
            print "Car needs refuel.\n\r";
        }else{
            print "Car traveled $distance\n\r";
            $this->fuelCar -= $distance * $this->fuelConsumptionLitterPerKilometer;
        }
    }


    public function __toString()
    {
        return 'Car: ' . number_format($this->fuelCar,2,",","");
    }
}