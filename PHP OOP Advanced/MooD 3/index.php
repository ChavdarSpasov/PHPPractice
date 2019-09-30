<?php

spl_autoload_register(function ($name){
    if (file_exists($name.".php")){
        include "$name.php";
    }
});

$input = explode(" | ", trim(fgets(STDIN)));

if ($input[1] == 'Demon'){
    $my_demon = new Demon($input[0],$input[1],$input[2],$input[3]);
    print $my_demon;
}else{
    $my_angel = new Angel($input[0],$input[1],$input[2],$input[3]);
    print $my_angel;
}