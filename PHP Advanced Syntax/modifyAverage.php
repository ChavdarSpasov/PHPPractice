<?php
$number = trim(fgets(STDIN));
$sumOfDigits = 0;
while (1){
    $currSumOfDigits = 0;
    for ($i=0; $i<strlen($number); $i++){
        $char = $number[$i];
        $currSumOfDigits += (int)$char;
    }

    $result = $currSumOfDigits / strlen($number);
    if ( $result > 5){
    break;
    }

    $number = $number . '9';

}

print $number . PHP_EOL;