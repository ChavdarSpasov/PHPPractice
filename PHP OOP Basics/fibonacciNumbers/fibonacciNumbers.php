<?php

include_once "Fibonacci.php";

$startOfSequence = trim(fgets(STDIN));
$endOfSequence = trim(fgets(STDIN));

$mySequence = new Fibonacci();

print $mySequence->getNumbersInRange($startOfSequence,$endOfSequence);
