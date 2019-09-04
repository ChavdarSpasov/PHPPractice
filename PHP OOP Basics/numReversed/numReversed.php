<?php

include_once "DecimalNumber.php";

$number = trim(fgets(STDIN));

$checker = false;

$myNumber = new DecimalNumber($number);

while ($myNumber->isDecimal() != true) {

    print "Not decimal number!12\n\rTry again:";

    $number = trim(fgets(STDIN));
    $myNumber = new DecimalNumber($number);

}

$output = $myNumber->reverseOrder();


print implode('', $output);

