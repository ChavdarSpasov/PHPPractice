<?php
function DistanceBetweenTwoPoints($x1,$y1,$x2,$y2){
    $pointOne = $x1 - $x2;
    $pointTwo = $y1 - $y2;
    return sqrt(pow($pointOne,2) + pow($pointTwo,2));
}

$input = explode(', ',trim(fgets(STDIN)));

list($x1,$y1,$x2,$y2,$x3,$y3) = $input;

$distance_1 = DistanceBetweenTwoPoints($x1,$y1,$x2,$y2);
$distance_2 = DistanceBetweenTwoPoints($x2,$y2,$x3,$y3);
$distance_3 = DistanceBetweenTwoPoints($x3,$y3,$x1,$y1);

if ($distance_1 <= $distance_3 &&
    $distance_3 >=$distance_2){
    print '1->2->3: ' . ($distance_1 + $distance_2);

}elseif ($distance_1 <= $distance_2 &&
    $distance_3 <= $distance_2) {
    print '2->1->3: ' . ($distance_3 + $distance_1);
}else{
    print '1->3->2: ' . ($distance_2 + $distance_1);
}