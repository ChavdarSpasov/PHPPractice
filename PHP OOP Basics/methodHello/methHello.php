<?php

include_once "Person.php";


$name = trim(fgets(STDIN));
$person = new Person($name);
$fields = count(get_object_vars($person));
$methods = count(get_class_methods($person));

if ($fields!=1 || $methods!=1){
    throw new Exeption('Too many fields or methods');
}

