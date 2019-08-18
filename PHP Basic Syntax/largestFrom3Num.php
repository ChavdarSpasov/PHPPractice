<?php

$numOne = intval(fgets(STDIN));
$numTwo = intval(fgets(STDIN));
$numThree = intval(fgets(STDIN));


$maxNum = max($numOne,$numTwo);

echo max($maxNum,$numThree);