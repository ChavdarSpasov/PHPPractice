<?php

// $max = 0;

// while ($number = intval(fgets(STDIN))) {

//     $max = max($max,$number);
// }

// echo $max; 


while ($result = intval(fgets(STDIN))) {
    
    $max[] = $result;
}

print max($max);