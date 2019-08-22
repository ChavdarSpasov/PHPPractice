<?php
$input = trim(fgets(STDIN));
$points = explode(", ", $input);

list($x1, $y1, $x2, $y2) = $points;


    function checkIfValid($x1, $y1, $x2, $y2)
    {
        $distance = sqrt(pow($x2 - $x1, 2) + pow($y2 - $y1, 2));
        if ($distance == intval($distance)) {
            echo '{' . $x1 . ', ' . $y1 . '} to {' . $x2 . ', ' . $y2 . '} is valid';
        } else {
            echo '{' . $x1 . ', ' . $y1 . '} to {' . $x2 . ', ' . $y2 . '} is invalid';
        }
    }

    checkIfValid($x1, $y1, 0, 0);
    echo "\r\n";
    checkIfValid($x2, $y2, 0, 0);
    echo "\r\n";
    checkIfValid($x1, $y1, $x2, $y2);

