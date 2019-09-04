<?php
$people = [
    ['name' => 'John', 'weight' => 69, 'height' => 1.69],
    ['name' => 'Peter', 'weight' => 85, 'height' => 1.68],
    ['name' => 'Ivan', 'weight' => 75, 'height' => 1.72],
    ['name' => 'Mitko', 'weight' => 95, 'height' => 1.70]
];

$resultBMI = array_map(function($item){
    return ($item['height'] * 100) / ($item['weight'] );
},$people);


$BMIAboveVolue = function($resultBMI,$value){

    $numPeopleOverValue = 0;

    foreach($resultBMI as $item){
        if($item > $value){
            $numPeopleOverValue ++;
        }
    }

    if($numPeopleOverValue == 0){
        print "BMI is lower then $value";
    }else{


    $sumAboveAvarege = array_reduce($resultBMI,function($sum,$item) use($value){
        if($item > $value){
            return $sum + $item;
        }
    });


    return $sumAboveAvarege / $numPeopleOverValue;
    }

};

echo round($BMIAboveVolue($resultBMI,1.2),2);