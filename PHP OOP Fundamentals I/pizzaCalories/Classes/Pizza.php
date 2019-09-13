<?php

class Pizza
{
    private $name;
    private $pizzaDough;
    private $toppings;
    private $totalCalories;
    private $numbersOfToppings;

    public function __construct($name, $numbersOfToppings)
    {
        $this->setName($name);
        $this->toppings = [];
        $this->totalCalories = 0;
        $this->setNumbersOfToppings($numbersOfToppings);
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        if (strlen($name) > 15 or $name == " ") {
            throw new Exception("Pizza name should be between 1 and 15 symbols.");
        } else {
            $this->name = $name;
        }
    }

    public function getPizzaDough()
    {
        return $this->pizzaDough;
    }

    public function setPizzaDough($pizzaDough)
    {
        $this->pizzaDough = $pizzaDough;
    }

    public function getToppings()
    {
        return $this->toppings;
    }

    public function addCalories($calories)
    {
        $this->totalCalories += $calories;
    }

    public function getTotalCalories(): int
    {
        return $this->totalCalories;
    }

    public function getNumbersOfToppings()
    {
        return $this->numbersOfToppings;
    }

    public function setNumbersOfToppings($numbersOfToppings)
    {
        if ($numbersOfToppings >= 0 and $numbersOfToppings <= 10) {
            $this->numbersOfToppings = $numbersOfToppings;
        } else {
            throw new Exception('Number of toppings should be in range [0..10].');
        }
    }

    public function addTopping($topping)
    {
        $this->toppings[] = $topping;
    }


}