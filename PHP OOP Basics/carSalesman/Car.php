<?php

class Car
{
    private $model;
    public $engine;
    private $weight;
    private $color;

    function __construct(string $model,
                         string $engine_model,
                         int $power,
                         string $displacement = 'n/a',
                         string $efficiency = 'n/a',
                         string $weight = 'n/a',
                         string $color = 'n/a')
    {
        /*
        $this->model = $this->setModel($model);
        $this->engine = $this->setEngine($engine);
        $this->weight = $this->setWeight($weight);
        $this->color = $this->setColor($color);
    */

        $this->model = $model;
        $this->engine = new Engine($engine_model,$power,$displacement,$efficiency);
        $this->weight = $weight;
        $this->color = $color;

    }

    function __toString()
    {
        return  $this->getModel(). ":\n" .
                "  " . $this->engine->getModel(). ":\n" .
                "    Power: " . $this->engine->getPower(). "\n" .
                "    Displacement: " . $this->engine->getDisplacement(). "\n" .
                "    Efficiency: " . $this->engine->getEfficiency(). "\n" .
                "  Weight: " . $this->getWeight(). "\n" .
                "  Color: " . $this->getColor(). "\n" .
                "------------------------" . "\n";
    }

    public function setModel(string $model)
    {
        $this->model = $model;
    }

    public function getModel()
    {
        return $this->model;
    }

    public function setWeight(string $weight)
    {
        $this->weight = $weight;
    }

    public function getWeight()
    {
        return $this->weight;

    }

    public function setColor(string $color)
    {
        $this->color = $color;
    }

    public function getColor()
    {
        return $this->color;
    }

}
