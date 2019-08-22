<?php

while(1){
    $input = trim(fgets(STDIN)); 

    if ($input == 'over') {
        break;
    }

    $data = explode(" : ", $input);

    

    if(preg_match('/^[0-9]{1,10}$/',$data[0])){
        $temp = $data[0];
        $data[0] = $data[1];
        $data[1] = $temp;
    }
    
    $result[$data[0]] = $data[1]; 
    
}

ksort($result);

foreach ($result as $key => $value) {
    print $key . ' -> ' . $value . PHP_EOL;
}

