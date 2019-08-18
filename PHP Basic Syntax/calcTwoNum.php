<?php

$operation = $argv[1];

$numberOne = intval(fgets(STDIN));
$numberTwo = intval(fgets(STDIN));

if ($operation == '+') {
    
    echo $numberOne + $numberTwo;
}else if ($operation == '-') {
    
    echo $numberOne - $numberTwo;
} else{
    
    echo "wrong operation";
}
