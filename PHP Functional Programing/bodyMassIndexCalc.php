<?php

$people = [
  [ 'name' => 'John'  , 'weight' => 69, 'height'  => 1.69 ],
  [ 'name' => 'Peter' , 'weight' => 85, 'height'  => 1.68 ],
  [ 'name' => 'Ivan'  , 'weight' => 75, 'height'  => 1.72 ],
  [ 'name' => 'Mitko', 'weight' => 95, 'height'  => 1.70 ]
];

$bmi = array_map(function($item){
    return $item['height'] / $item['weight'];
},$people);

print_r($bmi);