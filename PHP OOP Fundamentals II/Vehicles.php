<?php

error_reporting(E_ALL);
ini_set('display_errors',1);
ini_set('display_startup_errors',1);

abstract class Vehicle
{
    protected $fuelQuantity;
    protected $fuelComsumption;

    abstract public function drivenDistance($distance);
    abstract public function refuel($fuel);

    public function __construct($fuel,$literKm)
    {
        $this->fuelQuantity = $fuel;
        $this->fuelComsumption = $literKm;
    }

    public function __toString()
    {
        $num = number_format($this->fuelQuantity,2);
        return "$num";
    }
    


}

class Car extends Vehicle
{
    public function drivenDistance($distance)
    {
        $extraFuel = $this->fuelComsumption + 0.9;
        $tatalFuelComsuption = ($extraFuel) * $distance;
        
        if($this->fuelQuantity > $tatalFuelComsuption){
            $this->fuelQuantity -= $tatalFuelComsuption ;
            print "---Car travelled $distance km---" . PHP_EOL;
        }else{
            print '---Car needs refuelling---' . PHP_EOL;
        }
    }

    public function refuel($fuel)
    {
        $this->fuelQuantity += $fuel ;
    }

}

class Truck extends Vehicle
{
    public function drivenDistance($distance)
    {
        $extraFuel = $this->fuelComsumption + 1.6;
        
        $tatalFuelComsuption = ($extraFuel) * $distance;
        
        if($this->fuelQuantity > $tatalFuelComsuption){
            $this->fuelQuantity -= $tatalFuelComsuption ;
            print "---Truck travelled $distance km---" . PHP_EOL;
        }else{
            print '---Truck needs refuelling---' . PHP_EOL;
        }
    }

    public function refuel($fuel)
    {
        $refuel = $fuel * 0.95;
        $this->fuelQuantity += $refuel ;   
    }
}

list($vehicleType, $fuelQ, $literKm) = explode(' ',readline());

$car = new Car($fuelQ,$literKm);

list($vehicleType, $fuelQ, $literKm) = explode(' ',readline());

$truck = new Truck($fuelQ,$literKm);

$num = readline();

for ($i=0; $i<$num; $i++) { 

    list($command, $vehicle, $travelDistanceOrFuel) = explode(' ',readline());
    
    if($vehicle == 'Car'){
        if($command == 'Drive'){
            $car->drivenDistance($travelDistanceOrFuel);
        }else{
            $car->refuel($travelDistanceOrFuel);
        }
    }else{
        if($command == 'Drive'){
            $truck->drivenDistance($travelDistanceOrFuel);
        }else{
            $truck->refuel($travelDistanceOrFuel);
        }
    }
}


echo "Car: " . $car . PHP_EOL;
echo "Truck: " . $truck . PHP_EOL;
