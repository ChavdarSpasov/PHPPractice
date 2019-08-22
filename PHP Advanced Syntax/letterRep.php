<?php
$input = trim(fgets(STDIN));

$output = [];

for ($i=0; $i<strlen($input); $i++){
    $currElement = $input[$i];
    if (!array_key_exists($currElement,$output)){
        $output[$currElement] = 0;
    }

    $output[$currElement] ++;
}

foreach ($output as $item => $value) {
    print "$item -> $value" . "\r\n";
}