<?php

include_once "Car.php";
include_once "Bycicle.php";

$car = new Car('red',4,'Audi',2016,"A4");

$car->paintCar('green');


$bike = new Bycicle(0,
    'green',
    'bmx',
    'tiger',
    1999,
    false);

print_r($bike);

print $bike->getRideMode();
