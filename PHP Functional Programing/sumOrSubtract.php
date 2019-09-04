<?php

$opSum = function ($x, $y) {
    return $x + $y;
};

$opSubtract = function ($x, $y) {
    return $x - $y;
};

$inputArray = [
    0 => ['sum', 12, 156],
    1 => ['subtract', 5, 6],
    2 => ['subtract', 1, 2]
];

/* done without recursion

$inputCheck = function ($arr) {

    $str = is_string($arr[0]);
    $num_1IsNumber = is_numeric($arr[1]);
    $num_2IsNumber = is_numeric($arr[2]);
    $num_1LessThen_100 = ($arr[1] < 100);
    $num_2LessThen_100 = ($arr[2] < 100);

    if ($str &&
        $num_1IsNumber &&
        $num_2IsNumber &&
        $num_1LessThen_100 &&
        $num_2LessThen_100
    ) {
        return true;
    } else {
        return false;
    }

};

$simpleCalc = function ($input) use ($inputCheck, $opSum, $opSubtract) {
    $out = [];

    foreach ($input as $key => $value) {
        if ($inputCheck($value)) {
            if ($value[0] == 'sum') {
                $out[] = $opSum($value[1], $value[2]);
            } elseif ($value[0] == 'subtract') {
                $out[] = $opSubtract($value[1], $value[2]);
            }
        } else {
            $out[] = "error";
        }
    }

    return $out;

};

print "[" . implode(", ", $simpleCalc($inputArray)) . "]";
*/

// done with recursion

$simpleCalc = function (&$simpleCalc, $input, $i=0, $output = []) use ($opSum, $opSubtract){
    if($i < count($input)){
        $operation  = $input[$i][0];
        $num_1  = $input[$i][1];
        $num_2  = $input[$i][2];

        if ($num_1 < 0 || $num_1 > 100 || $num_2 < 0 || $num_2 > 100){
            $output[] = 'error';
            return $simpleCalc($simpleCalc, $input,  $i + 1, $output);
        }elseif ($operation == 'sum'){
            $output[] = $opSum($num_1, $num_2);
            return $simpleCalc($simpleCalc, $input, $i + 1, $output);
        }elseif ($operation == 'subtract'){
            $output[] = $opSubtract($num_1, $num_2);
            return $simpleCalc($simpleCalc, $input, $i + 1, $output);
        }
    }else{
        return $output;
    }
};

echo "<pre>" ;print_r($simpleCalc($simpleCalc, $inputArray));


