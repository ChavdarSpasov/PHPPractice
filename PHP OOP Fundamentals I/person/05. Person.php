<?php

include_once "Person.php";
include_once "Child.php";


$person = new FamilyMember(16,'Ivan');

var_dump($person);

$child = new Child(10,'Toni');

var_dump($child);

$child->setAge(5);

var_dump($child);