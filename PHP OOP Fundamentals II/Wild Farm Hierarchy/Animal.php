<?php
abstract class Animal
{
    protected $animalName;
    protected $animalType;
    protected $animalWeight;
    protected $foodEaten;

    public function __construct( string $animalType,
                                 string $animalName,
                                 float $animalWeight)
    {
        $this->animalType = $animalType;
        $this->animalName = $animalName;
        $this->animalWeight = $animalWeight;
        $this->foodEaten = 0;
    }

    abstract public function makeSound();
    abstract public function eat($food);

    public function getFoodEaten()
    {
        return $this->foodEaten;
    }

    public function setFoodEaten($foodEaten)
    {
        $this->foodEaten = $foodEaten;
    }


}