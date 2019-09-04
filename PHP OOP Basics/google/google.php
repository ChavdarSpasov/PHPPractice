<?php

include_once "Person.php";
include_once "Car.php";
include_once "Child.php";
include_once "Company.php";
include_once "Parents.php";
include_once "Pokemon.php";

$line = explode(' ', trim(fgets(STDIN)));

$people = [];

while ($line[0] != "End") {
    $name = $line[0];
    $word = $line[1];

    if (!array_key_exists($name, $people)) {
        $people[$name] = new Person($name);
    };

    switch ($word) {
        case 'company':
            $companyName = $line[2];
            $department = $line[3];
            $salary = $line[4];

            $company = new Company($companyName,
                $department,
                $salary);

            $people[$name]->company = $company;
            break;
        case 'pokemon':
            $pokemonName = $line[2];
            $pokemonType = $line[3];

            $pokemon = new Pokemon($pokemonName,$pokemonType);

            $people[$name]->pokemons[] = $pokemon;
            break;
        case 'parents':
            $parentName = $line[2];
            $parentBirthday = $line[3];

            $parent = new Parents($parentName,$parentBirthday);

            $people[$name]->parents[] = $parent;
            break;
        case 'children':
            $childName = $line[2];
            $chilBirdthday = $line[3];

            $child = new Child($childName,$chilBirdthday);

            $people[$name]->children[] = $child;
            break;
        case 'car':
            $carModel = $line[2];
            $carSpeed = $line[3];

            $car = new Car($carModel,$carSpeed);

            $people[$name]->car = $car;
            break;
    };

    $line = explode(' ', trim(fgets(STDIN)));
};

$name =trim(fgets(STDIN));

$result = [];

foreach ($people as $key => $value){

    if ($key == $name){
        print $value;
        break;
    }
};


