<?php
$line =str_replace(' ','',explode(', ', fgets(STDIN)));

$result = [];

for ($i=0; $i <=count($line)-1; $i++) { 
    
    $element = trim($line[$i ]);

    if (!isset($result[$element])) {
        $result[$element] = 0;
    }

    $result[$element] ++;
}

foreach ($result as $key => $value) {
    if($value == 1){
    echo $key . PHP_EOL;
    }
}