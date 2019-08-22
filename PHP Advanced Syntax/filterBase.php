<?php

function PrintLineWithCharEqualLength20()
{
    for ($i = 0; $i < 20; $i++) {
        print '=';
    }
}

$employeesDataBase = [];


while (1) {
    $input = trim(fgets(STDIN));

    if ($input == 'filter base') {
        break;
    }

    $currInput = explode('->', $input);

    $name = trim($currInput[0]);
    $status = trim($currInput[1]);

    $float = floatval($status);
    $int = intval($status);


    if (!($float == $int)) {
        if (!array_key_exists($name, $employeesDataBase)) {
            $employeesDataBase[$name] = [];
        }

        $employeesDataBase[$name]['Salary'] = $status;
    } elseif (($float == $int) && $float != 0) {
        if (!array_key_exists($name, $employeesDataBase)) {
            $employeesDataBase[$name] = [];
        }

        $employeesDataBase[$name]['Age'] = $status;
    } else {
        if (!array_key_exists($name, $employeesDataBase)) {
            $employeesDataBase[$name] = [];
        }

        $employeesDataBase[$name]['Position'] = $status;
    }

}

var_dump($employeesDataBase);


$filterRequest = trim(fgets(STDIN));

foreach ($employeesDataBase as $name => $data) {
    foreach ($data as $item => $value) {
        if ($item == $filterRequest) {
            print "Name: $name \r\n";
            print "$item: $value \r\n";
            PrintLineWithCharEqualLength20();
            print "\r\n";
        }
    }

}


