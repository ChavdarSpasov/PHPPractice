<?php

include_once "Number.php";

$number = (int)(trim(fgets(STDIN)));

$myNumber = new Number($number);

print $myNumber->lastDigitName();