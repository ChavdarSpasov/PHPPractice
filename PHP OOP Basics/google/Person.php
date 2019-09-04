<?php

class Person
{
    public $name;
    public $company;
    public $car;
    public $parents;
    public $children;
    public $pokemons;

    function __construct($name,
                         $company = null,
                         $car = null)
    {
        $this->name = $name;
        $this->car = $car;
        $this->company = $company;
        $this->children = [];
        $this->parents = [];
        $this->pokemons = [];
    }

    function __toString()
    {
        return $this->name
            . PHP_EOL . 'Company:' . ($this->company ? PHP_EOL . $this->company : '')
            . PHP_EOL . 'Car:' . ($this->car ? PHP_EOL . $this->car : '')
            . PHP_EOL . 'Pokemon:' . PHP_EOL . implode(PHP_EOL, $this->pokemons)
            . PHP_EOL . 'Parents:' . (count($this->parents) ? PHP_EOL . implode(PHP_EOL, $this->parents) : '')
            . PHP_EOL . 'Children:' . (count($this->children) ? PHP_EOL . implode(PHP_EOL, $this->children) : '');
    }
}