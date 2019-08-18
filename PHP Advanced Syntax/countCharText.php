<?php

$name = fgets(STDIN);

$result = [];

for ($i=0; $i < strlen($name) - 1; $i++) { 
    
    $char = $name[$i];

    if (!isset($result[$char])) {
        $result[$char] = 0;
    }

    $result[$char] ++;
}

foreach ($result as $key => $value) {
    echo $key . '->' . $value . PHP_EOL;
}