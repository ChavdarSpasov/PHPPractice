<?php
class Pokemon
{
    public $name;
    public $element;
    public $health;

    function __construct($name,$element,$health)
    {
        $this->name= $name;
        $this->element= $element;
        $this->health= $health;
    }

    function checkPokemonElement(Pokemon $pokemon, $element){
        if ($pokemon->element == $element){
            return true;
        }
    }

    function pokemonReceiveDamage(Pokemon $pokemon){

            $pokemon->health -= 10;
    }
}