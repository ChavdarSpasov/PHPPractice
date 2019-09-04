<?php

include_once "Pokemon.php";
include_once "Trainer.php";

$inputLine = explode(' ', trim(fgets(STDIN)));

$trainers = [];

while ($inputLine[0] != "Tournament") {

    $trainerName = $inputLine[0];
    $pokemonName = $inputLine[1];
    $pokemonElement = $inputLine[2];
    $pokemonHealth = $inputLine[3];

    $currPokemon = new Pokemon($pokemonName,
                               $pokemonElement, 
                               $pokemonHealth);

    if (!array_key_exists($trainerName, $trainers)) {
        $trainers[$trainerName] = new Trainer($trainerName);
    };

    $trainers[$trainerName]->callectionOfPokemons[] = $currPokemon;

    $inputLine = explode(' ', trim(fgets(STDIN)));
};

$inputElements = trim(fgets(STDIN));

while ($inputElements != "End") {

    foreach ($trainers as $trainer) {
        foreach ($trainer->callectionOfPokemons as $pokemon) {
            $pokemonOK = true;
            if ($pokemon->checkPokemonElement($pokemon, $inputElements)) {
                $trainer->numberOfBadges += 1;
                $pokemon = false;
            } else {
                if ($pokemon->health > 0) {
                    $pokemon->pokemonReceiveDamage($pokemon);
                }
            };


            if (!$pokemon) {
                break;
            }
        };


        if (!$pokemon) {
            break;
        }
    };

    $inputElements = trim(fgets(STDIN));
};

usort($trainers, function ($a, $b) {
    if ($a->numberOfBadges == $b->numberOfBadges) {
            return $a->numberOfBadges > $b->numberOfBadges;
    } else {
        return $a->numberOfBadges < $b->numberOfBadges;
    }
});

foreach ($trainers as $trainer) {
    $count = 0;
    foreach ($trainer->callectionOfPokemons as $pokemon) {
        if ($pokemon->health > 0) {
            $count++;
        }
    }
    print "$trainer->name $trainer->numberOfBadges $count \r\n";
}