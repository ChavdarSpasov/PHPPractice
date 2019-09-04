<?php

class Engine
{
    private $model;
    private $power;
    private $displacement;
    private $efficiency;

    public function __construct(string $model,
                                int $power,
                                string $displacement = 'n/a',
                                string $efficiency = 'n/a')
    {
        $this->model = $model;
        $this->power = $power;
        $this->displacement = $displacement;
        $this->efficiency = $efficiency;
    }



    public function setModel(string $model)
    {
        $this->model = $model;
    }

    public function getModel()
    {
        return $this->model;
    }

    public function setPower(int $power)
    {
        $this->power = $power;
    }

    public function getPower()
    {
        return $this->power;
    }

    public function setDisplacement(string $displacement)
    {
        $this->displacement = $displacement;
    }

    public function getDisplacement()
    {
        return $this->displacement;
    }

    public function setEfficiency(string $efficiency)
    {
        $this->efficiency = $efficiency;
    }

    public function getEfficiency()
    {
        return $this->efficiency;
    }
}

