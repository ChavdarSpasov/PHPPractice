<?php
$animals = [
    [ 'name' => 'Waffles', 'type' => 'dog', 'age'  => 12],
    [ 'name' => 'Fluffy',  'type' => 'cat', 'age'  => 14],
    [ 'name' => 'Spelunky', 'type' => 'dog', 'age'  => 4],
    [ 'name' => 'Hank'      , 'type' => 'dog', 'age'  => 11],
];


$youngDogs = function($animals,$age){
    return array_filter($animals,function ($item) use ($age){
        if ($item['type'] = 'dog' && $item['age'] < $age ){
            return true;
        }
    });
};



print_r($youngDogs($animals,14));