<?php

$animals = [
    [ 'name' => 'Waffles', 'type' => 'dog', 'age'  => 12],
    [ 'name' => 'Fluffy',  'type' => 'cat', 'age'  => 14],
    [ 'name' => 'Spelunky', 'type' => 'dog', 'age'  => 4],
    [ 'name' => 'Hank'      , 'type' => 'dog', 'age'  => 11],
];

$filterYoungDogs = function($item){
    if($item['type'] == 'dog' and $item['age'] < 10 ){
        return true;
    }
};

$filteroldDogs = function($item){
    if($item['type'] == 'dog' and $item['age'] > 10 ){
        return true;
    }
};


$filter = function($string) use($filterYoungDogs,$filteroldDogs,$animals){
    if($string == 'old'){
        return array_filter($animals,$filteroldDogs);
    }elseif($sting == 'young'){
        return array_filter($animals,$filterYoungDogs);
    }else{
        print 'Wrong input parameters!';
    }
}; 


print_r($filter('ere'));