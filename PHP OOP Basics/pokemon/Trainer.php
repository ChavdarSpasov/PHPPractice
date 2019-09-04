<?php
class Trainer
{
    public $name;
    public $numberOfBadges;
    public $callectionOfPokemons;

    function __construct($name)
    {
        $this->name = $name;
        $this->numberOfBadges = 0;
        $this->callectionOfPokemons = [];
    }

}