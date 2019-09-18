<?php
spl_autoload_register(function ($abstract_class_name){
    if (file_exists('AbstractClasses/' . $abstract_class_name . '.php')){
    include ('AbstractClasses/' . $abstract_class_name . '.php');}
});

spl_autoload_register(function ($class_name){
    if(file_exists('Classes/' . $class_name . '.php')){
    include ('Classes/' . $class_name . '.php');}
});

spl_autoload_register(function ($interface_name){
    if (file_exists('Interfaces/' . $interface_name . '.php')){
    include ('Interfaces/' . $interface_name . '.php');}
});




$myNote = new Notebook_plus_plus();

var_dump($myNote);