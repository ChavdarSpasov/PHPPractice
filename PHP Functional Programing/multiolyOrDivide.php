<?php
$opSum = function ($x, $y) {
    return $x + $y;
};

$opSubtract = function ($x, $y) {
    return $x - $y;
};

$opMultiply = function ($x, $y) {
    return $x / $y;
};

$opDivide = function ($a, $b) {
    return ($b == 0) ? "division_by_zero" : $a / $b;
};

$inputArray = [
    0 => ['sum', 12, 156],
    1 => ['subtract', 3, 3],
    2 => ['subtract', 1, 2],
    3 => ['divide', 100, 0],
    4 => ['divide', 3, 'pp'],
    5 => ['subtract', 'p125', 123]
];

$simpleCalc = function (&$simpleCalc, $input, $i = 0, $output = [])
use ($opSum, $opSubtract, $opDivide, $opMultiply) {
    if ($i < count($input)) {
        $operation = $input[$i][0];
        $num_1 = $input[$i][1];
        $num_2 = $input[$i][2];


        if (!is_numeric($num_1)) {
            $output[] = 'op1_not_numeric';
        } elseif (!is_numeric($num_2)) {
            $output[] = 'op2_not_numeric';
        } elseif ($num_1 < 0 || $num_1 > 100 || $num_2 < 0 || $num_2 > 100) {
            $output[] = 'out_of_range';
        } elseif ($operation == 'sum') {
            $output[] = $opSum($num_1, $num_2);
        } elseif ($operation == 'subtract') {
            $output[] = $opSubtract($num_1, $num_2);
        } elseif ($operation == 'divide') {
            $output[] = $opDivide($num_1, $num_2);
        } elseif ($operation == 'multiply') {
            $output = $opMultiply($num_1, $num_2);
        }
        return $simpleCalc($simpleCalc, $input, $i + 1, $output);
    } else {
        return $output;
    }
};

echo "<pre>";
print_r($simpleCalc($simpleCalc, $inputArray));