<?php

spl_autoload_register(function ($interfaceName) {
    if (file_exists("Interfaces/" . $interfaceName . '.php')){
        include("Interfaces/" . $interfaceName . '.php');
    }
});

spl_autoload_register(function ($className) {
    if (file_exists("Classes/" . $className . '.php')) {
        include("Classes/" . $className . '.php');
    }
});


$input = explode(" ", trim(fgets(STDIN)));

$arrayPrivateSoldiers = [];

while ($input[0] != 'End') {
    $unit = $input[0];

    switch ($unit) {
        case 'Private':
            $myPrivateSoldier = new PrivateSoldier($input[1],
                $input[2],
                $input[3],
                $input[4]);

            $arrayPrivateSoldiers[$input[1]] = $myPrivateSoldier;
            print $myPrivateSoldier;
            print PHP_EOL;
            break;
        case 'LeutenantGeneral':
            if (count($input) > 5) {
                $arrayPrivateSoldiersId = array_slice($input, 5);

                $myLeutenantGeneral = new LeutenantGeneral($input[1],
                    $input[2],
                    $input[3],
                    $input[4],
                    $arrayPrivateSoldiersId,
                    $arrayPrivateSoldiers);

                print $myLeutenantGeneral;
                print PHP_EOL;

            } else {
                $myLeutenantGeneral = new LeutenantGeneral($input[1],
                    $input[2],
                    $input[3],
                    $input[4]);
                print $myLeutenantGeneral;
                print PHP_EOL;

            }
            break;
        case 'Engineer':
            $setOfRepairs = array_chunk(array_slice($input, 6), 2);

            $arrayRepairs = [];

            foreach ($setOfRepairs as $pair) {

                $arrayRepairs[] = new Repair($pair[0], $pair[1]);
            }

            $myEngineer = new Engineer($input[1],
                $input[2],
                $input[3],
                $input[4],
                $input[5],
                $setOfRepairs);

            print $myEngineer;
            print PHP_EOL;
            break;
        case 'Commando':
            $setOfMissions = array_chunk(array_slice($input, 6), 2);

            $arrayMissions = [];

            foreach ($setOfMissions as $pair) {

                $arrayMissions[] = new Mission($pair[0], $pair[1]);
            }


            $myCommando = new Commando($input[1],
                $input[2],
                $input[3],
                $input[4],
                $input[5],
                $arrayMissions);

            print $myCommando;
            print PHP_EOL;
            break;
        case 'Spy':
            $mySpy = new Spy($input[1],$input[2],$input[3],$input[4]);
            print $mySpy;
            print PHP_EOL;

    }


    $input = explode(" ", trim(fgets(STDIN)));
}