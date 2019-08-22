<?php

function TreasureLocationChecker($pointOne,$pointTwo){
    if (($pointOne <= 3 && $pointOne >= 1) && ($pointTwo <= 3 && $pointTwo >= 1)){
        print 'Tuvalu';
        print "\r\n";
    }elseif (($pointOne <= 9 && $pointOne >= 8) && ($pointTwo <= 1 && $pointTwo >= 0)){
        print 'Tokelau';
        print "\r\n";
    }elseif (($pointOne <= 7 && $pointOne >= 5) && ($pointTwo <= 6 && $pointTwo >= 3)){
        print 'Samoa';
        print "\r\n";
    }elseif (($pointOne <= 2 && $pointOne >= 0) && ($pointTwo <= 8 && $pointTwo >= 6)){
        print 'Tonga';
        print "\r\n";
    }elseif (($pointOne <= 9 && $pointOne >= 4) && ($pointTwo <= 8 && $pointTwo >= 7)){
        print 'Cook';
        print "\r\n";
    }else{
        print 'On the bottom of the ocean';
        print "\r\n";
    }
}

$input = trim(fgets(STDIN));
$points = explode(', ',$input);

for ($i=0; $i<count($points); $i= $i +2){
   $x = $points[$i];
   $y = $points[$i +1];

   TreasureLocationChecker($x,$y);
}