<?php

function chechPoint($x,$y,$z){
    
    $x1 = 10; $x2 = 50;
    $y1 = 20; $y2 = 50;
    $z1 = 15; $z2 = 50;


    if($x >= $x1 && $x <= $x2){
        if($y >= $y1 && $y <= $y2){
            if($z >= $z1 && $z <= $z2){

                return true;
            }
        }
    }

    return false;
}

//$input = explode(', ',fgets(STDIN));
$input = explode(', ','8, 20, 22');

    $a=$input[0];
    $b=$input[1];
    $c=$input[2];


    if(chechPoint($a, $b, $c)){
        print 'inside' . PHP_EOL;
    }else{
        print 'outside' . PHP_EOL;
    }
