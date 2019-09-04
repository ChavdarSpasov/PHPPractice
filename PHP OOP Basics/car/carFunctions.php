<?php

include_once "Car.php";

$carData = explode(" ",trim(fgets(STDIN)));

$speed = floatval($carData[0]);
$fuel = floatval($carData[1]);
$fuelEconomy = floatval($carData[2]);

$myCar = new Car($speed,$fuel,$fuelEconomy);

$input = explode(" ",trim(fgets(STDIN)));

while ($input[0] != 'END') {

    switch ($input[0]) {
        case 'Travel':
            $myCar->Travel(100);
            break;
        case 'Distance':
            $myCar->Distance();
            break;
        case 'Time':
            $myCar->Time();
            break;
        case 'Fuel':
            $myCar->Fuel();
            break;
        case 'Refuel':
            $myCar->Refuel($input[1]);
            break;
    }

    $input = explode(" ",trim(fgets(STDIN)));
}





