<?php

for ($i=0; $i < 2; $i++) { 
    $input = trim(fgets(STDIN));

    $result[] = $input;
}

$output = array_reduce($result,function ($sum,$item){
    $sum += $item;
    return $sum;
});

print $output;
