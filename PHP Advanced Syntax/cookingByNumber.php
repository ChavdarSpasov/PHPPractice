<?php
$number = intval(fgets(STDIN));
$operations = explode(', ', trim(fgets(STDIN)));

foreach ($operations as $operation) {
    switch ($operation) {
        case 'chop':
            $number /= 2;
            break;
        case 'dice':
            $number = sqrt($number);
            break;
        case 'spice':
            $number ++;
            break;
        case 'bake':
            $number *= 3;
            break;
        case 'fillet':
            $percent = $number * 0.20;
            $number -= $percent;
            break;
    }

    print $number . "\r\n";
}

