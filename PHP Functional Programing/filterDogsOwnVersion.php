<?php

$animals = [
    [ 'name' => 'Waffles', 'type' => 'dog', 'age'  => 12],
    [ 'name' => 'Fluffy',  'type' => 'cat', 'age'  => 14],
    [ 'name' => 'Spelunky', 'type' => 'dog', 'age'  => 4],
    [ 'name' => 'Hank'      , 'type' => 'dog', 'age'  => 11],
];

$filterDog = function($array, $dogAge){

    $output = [];

    foreach ($array as $item) {
        if($item['type'] == 'dog' && $item['age'] < $dogAge ){
            $output[] = $item;
        }
    }

    return  $output;

};


$dogOutput = $filterDog($animals,13);

print_r($dogOutput);