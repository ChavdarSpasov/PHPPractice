<?php


class Pokemon
{
    public $pokemonName;
    public $pokemonType;

    public function __construct($pokemonName, $pokemonType)
    {
        $this->pokemonName = $pokemonName;
        $this->pokemonType = $pokemonType;
    }


    public function __toString()
    {
        return $this->pokemonName . ' ' . $this->pokemonType;
    }
}