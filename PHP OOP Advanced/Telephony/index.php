<?php

spl_autoload_register(function($interface){
    $file = $interface.'.php';

    if (file_exists("Interfaces/$file")) {
        include "Interfaces/$file";
    }
});

spl_autoload_register(function($class){
    $file = $class.'.php';

    if (file_exists("Classes/$file")) {
        include "Classes/$file";
    }
});

$lineOne = explode(' ',readline());
$lineTwo = explode(' ',readline());

var_dump($lineTwo,$lineTwo);

$user= new Smartphone($lineOne,$lineTwo);

var_dump($user);


$user->calling();
$user->browsing();