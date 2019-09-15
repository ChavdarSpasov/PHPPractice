<?php
class Bus extends Automobile
{
    private $fuelBus;

    /**
     * Bus constructor.
     * @param $fuelBus
     */
    public function __construct($fuelQuantity, $fuelConsumptionLitterPerKilometer, $tankCapacity,$fuelBuss= null)
    {
        parent::__construct($fuelQuantity, $fuelConsumptionLitterPerKilometer, $tankCapacity);
        $this->fuelBus = $fuelQuantity;
    }

    public function busRefuel($litters)
    {
        if ($litters < 0) {
            print 'Fuel must be positive number.' . "\r\n";
        } elseif ($litters + $this->fuelBus > $this->tankCapacity){
            print 'Cannot fit fuel in tank' . "\r\n";
        } else {
            $this->fuelBus += $litters;
        }

    }

    public function busDrive($distance)
    {
        $maxDistance = $this->fuelBus / $this->fuelConsumptionLitterPerKilometer;
        if ($maxDistance < $distance or $maxDistance <=0) {
            print "Bus needs refuel.\n\r";
        }else{
            print "Bus traveled $distance.\n\r";
            $this->fuelBus -= $distance * ($this->fuelConsumptionLitterPerKilometer + 1.4);
        }
    }

    public function busDriveEmpty($distance)
    {
        $maxDistance = $this->fuelBus / $this->fuelConsumptionLitterPerKilometer;
        if ($maxDistance < $distance or $maxDistance <=0) {
            print "Bus needs refuel\n\r";
        }else{
            print "Bus travel $distance\n\r";
            $this->fuelBus -= $distance * $this->fuelConsumptionLitterPerKilometer;
        }
    }

    public function __toString()
    {
        return 'Bus: ' . number_format($this->fuelBus, 2, ",", "");
    }

}