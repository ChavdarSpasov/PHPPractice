<?php

require 'Animal.php';
require 'Mammal.php';
require 'Felime.php';
require 'Mause.php';
require 'Zebra.php';
require 'Cat.php';
require 'Tiger.php';
require 'Food.php';
require 'Vegetable.php';
require 'Meat.php';

while (true){
    $input1 = explode(' ', trim(fgets(STDIN)));

    if ($input1[0] == 'End'){
        break;
    }

    if (count($input1) == 4){
        list($animalType, $animalName, $animalWeight, $animalLivingRegion) = $input1;

        $myAnimal = new $animalType( $animalName,
                                     $animalType,
                                     $animalWeight,
                                     $animalLivingRegion);
    }else{
        list($animalType, $animalName, $animalWeight, $animalLivingRegion, $catBreed) = $input1;

        $myAnimal = new Cat($animalType,
                            $animalName,
                            $animalWeight,
                            $animalLivingRegion,
                            $catBreed);
    }


    $input2 = explode(' ', trim(fgets(STDIN)));

    list($foodType, $quantity) = $input2;

    if ($foodType == 'Vegetable'){
        $myFood = new Vegetable($quantity);
    }else{
        $myFood = new Meat($quantity);
    }



    $myAnimal->makeSound();
    $myAnimal->eat($myFood);

    print $myAnimal;

}