<?php

class Truck extends Automobile
{

    private $fuelTruck;

    /**
     * Truck constructor.
     */
    public function __construct($fuelQuantity, $fuelConsumptionLitterPerKilometer, $tankCapacity, $fuelTruck = null)
    {
        parent::__construct($fuelQuantity, $fuelConsumptionLitterPerKilometer, $tankCapacity);
        $this->fuelTruck = $fuelQuantity;
    }

    public function setFuelConsumptionLitterPerKilometer($fuelConsumptionLitterPerKilometer)
    {
        $this->fuelConsumptionLitterPerKilometer = $fuelConsumptionLitterPerKilometer + 1.6;
    }

    public function truckRefuel($litters)
    {
        if ($litters <= 0) {
            print 'Fuel must be positive number.'. "\r\n";
        } elseif ($litters + $this->fuelTruck > $this->tankCapacity) {
            print 'Cannot fit fuel in tank.'. "\r\n";
        } else {
            $this->fuelTruck += $litters * 0.95;
        }

    }

    public function truckDrive($distance)
    {
        $maxDistance = $this->fuelTruck / $this->fuelConsumptionLitterPerKilometer;
        if ($maxDistance < $distance or $maxDistance <= 0) {
            print "Track needs refuel.\r\n";
        } else {
            print "Track traveled $distance.\r\n";
            $this->fuelTruck -= $distance * $this->fuelConsumptionLitterPerKilometer;
        }
    }

    public function __toString()
    {
        return 'Truck: ' . number_format($this->fuelTruck, 2, ",", "");
    }
}