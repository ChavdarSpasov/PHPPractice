<?php

$line = str_replace(' ','',explode(',', fgets(STDIN)));


for ($i=0; $i < count($line) ; $i+=2) { 
    
    $town = $line[$i];
    $income = $line[$i+1];    

    if(!isset($result[$town])){

        $result[$town] = 0; 

    }

    $result[$town] += $income; 

}

print_r($result);