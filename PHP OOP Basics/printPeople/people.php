<?php

include_once  "Person.php";

$personData = explode(' ',trim(fgets(STDIN)));

$people = [];

while ($personData[0] != 'end'){

    $person =  new Person($personData[0],
                          $personData[1],
                          $personData[2]);

    $people[$personData[1]] = $person;

    $personData = explode(' ',trim(fgets(STDIN)));

}

krsort($people,SORT_NUMERIC);

    
foreach ($people as $item){
    print $item . "\r\n";
};

