<?php

class Automobile
{
    protected $fuelQuantity;
    protected $fuelConsumptionLitterPerKilometer;
    protected $tankCapacity;


    /**
     * Automobile constructor.
     * @param $fuelQuantity
     * @param $fuelConsumptionLitterPerKilometer
     */
    public function __construct($fuelQuantity, $fuelConsumptionLitterPerKilometer, $tankCapacity)
    {
        $this->setFuelQuantity($fuelQuantity);
        $this->setFuelConsumptionLitterPerKilometer($fuelConsumptionLitterPerKilometer);
        $this->setTankCapacity($tankCapacity);
    }

    /**
     * @return mixed
     */
    public function getFuelQuantity()
    {
        return $this->fuelQuantity;
    }

    /**
     * @param mixed $fuelQuantity
     */
    public function setFuelQuantity($fuelQuantity)
    {
        $this->fuelQuantity = $fuelQuantity;
    }

    /**
     * @return mixed
     */
    public function getFuelConsumptionLitterPerKilometer()
    {
        return $this->fuelConsumptionLitterPerKilometer;
    }

    /**
     * @param mixed $fuelConsumptionLitterPerKilometer
     */
    public function setFuelConsumptionLitterPerKilometer($fuelConsumptionLitterPerKilometer)
    {
        $this->fuelConsumptionLitterPerKilometer = $fuelConsumptionLitterPerKilometer;
    }

    /**
     * @return mixed
     */
    public function getTankCapacity()
    {
        return $this->tankCapacity;
    }

    /**
     * @param mixed $tankCapacity
     */
    public function setTankCapacity($tankCapacity)
    {
        $this->tankCapacity = $tankCapacity;
    }


}