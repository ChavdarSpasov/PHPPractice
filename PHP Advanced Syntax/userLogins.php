<?php

$mode = 'reg';
$uns = 0;
$users = [];

while(1){
    $input = trim(fgets(STDIN));
    if($input == "end"){
        break;
    }

    if($input == 'login'){
        $mode = 'login';
        continue;
    } 

    $data = explode('->',$input);

    if ($mode == 'reg') {
        $users[$data[0]] = $data[1];
    }else{
        if(isset($users[$data[0]]) && $users[$data[0]] = $data[1]){
            echo $data[0] . ': login successfully' . PHP_EOL;
        
        }else{
            echo $data[0] . ': login failed' . PHP_EOL;
            $uns ++;
        }
    }
}

echo 'unsuccessful login attemps:' . $uns . PHP_EOL;