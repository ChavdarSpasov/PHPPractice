<?php

//without extra validation in classes

include_once "Cat.php";
include_once "Cymric.php";
include_once "Siamese.php";
include_once "StreetExtraordinaire.php";

$catData = explode(' ', trim(fgets(STDIN)));

$cats = [];

while ($catData[0] != 'End') {

    if (count($catData) != 3)
        throw new Exception('Invalid input!');

    $breed = $catData[0];
    $name = $catData[1];
    $characteristic = $catData[2];

    switch ($breed) {
        case 'Siamese':
            $mySiamese = new Siamese($name,$breed, $characteristic);
            $cats[$name] = $mySiamese;
            break;
        case 'Cymric':
            $myCymric = new Cymric($name,$breed, $characteristic);
            $cats[$name] = $myCymric;
            break;
        case 'StreetExtraordinaire':
            $myStreetExtraordinaire = new StreetExtraordinaire($name,$breed, $characteristic);
            $cats[$name] = $myStreetExtraordinaire;
            break;

    }

    $catData = explode(' ', trim(fgets(STDIN)));
}

$catName = trim(fgets(STDIN));

print $cats[$catName];