<?php
$stringOfNumbers = trim(fgets(STDIN));
$arrayOfNumbers = explode(" ",$stringOfNumbers);

$howManyTimesNumberExist = [];

foreach ($arrayOfNumbers as $number) {
    if (!array_key_exists($number,$howManyTimesNumberExist)){
        $howManyTimesNumberExist[$number] = 0;
    }
    $howManyTimesNumberExist[$number] ++;
}

ksort($howManyTimesNumberExist);

foreach ($howManyTimesNumberExist as $key => $value){
    print "$key -> $value times" . "\r\n";
}
