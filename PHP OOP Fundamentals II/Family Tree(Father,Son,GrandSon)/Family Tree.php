<?php
require 'Father.php';
require 'Son.php';
require 'GrandSon.php';


$father = new Father('James Strong', 1873, 1923);

$son1 = new Son('Peter Strong', 1894, 1924);
$son2 = new Son('Andrew Strong', 1899, 1970);

$grandSon1 = new GrandSon('Jackson Strong', 1927, 1992);
$grandSon2 = new GrandSon('Martin Strong', 1927, 1967);
$grandSon3 = new GrandSon('Gregory Strong', 1931, 2000);

$familyTree = [$father, $son1, $son2, $grandSon1, $grandSon2, $grandSon3];


function avrGenerationLive($arrGeneration)
{
    $sumFTimeSpan = array_reduce($arrGeneration,function ($sum, $item){
        $sum += $item->getTimeLived();
        return $sum;
    });

    return $sumFTimeSpan / count($arrGeneration);
};


print avrGenerationLive($familyTree);

