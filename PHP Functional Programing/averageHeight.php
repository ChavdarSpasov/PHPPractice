<?php

$people = [
  ['name'=> 'John'  , 'height'=> 1.65],
  ['name'=> 'Peter' , 'height'=> 1.85],
  ['name'=> 'Silvia', 'height'=> 1.69],
  ['name'=> 'Martin', 'height'=> 1.82]
];

$result = array_reduce($people,function($sumAvr,$item){
    $sumAvr += $item['height'];

    return $sumAvr;
}) / count($people);

print_r($result); 