<?php

function getLimit($zone){

    switch ($zone) {
        case 'motorway': 
            $speedLimit = 130;
            break;
        case 'interstate':
            $speedLimit = 90;
            break;    
        case 'city':
            $speedLimit = 50;
            break; 
        case 'residential':
            $speedLimit = 20;    
            break;
        default:
            print "Not a Valid Input";
            $speedLimit = 1000;
            break;
    }
    
    return $speedLimit;
}

function getInfraction($speedLimit, $currSpeed){
    $overSpeed = $speedLimit - $currSpeed;

var_dump($overSpeed);

    if($overSpeed >= 0){
        $result = true;
    }elseif($overSpeed >= -20){
        print 'speeding';
        $result = false;
    }elseif($overSpeed >= -40){
        print 'excessive speeding';
        $result = false;        
    }else{
        print 'reckless driving';
        $result = false;    
    }

    return $result;
}



$inputLines = [];

for ($i=0; $i < 2; $i++) { 
    $input = trim(fgets(STDIN));
    $inputLines[] = $input;
}

var_dump($inputLines);


$limit = getLimit($inputLines[1]);
$currLimit = $inputLines[0];

var_dump($limit);
var_dump($currLimit);

getInfraction($limit,$currLimit);

