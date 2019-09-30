<?php

ini_set("display_errors",1);

spl_autoload_register(function ($interface){
    $name = "$interface.php";
    
    if (file_exists("Interfaces/$name")) {
        include "Interfaces/$name";    
    }
});

spl_autoload_register(function ($class){
    $name = "$class.php";
    
    if (file_exists("Classes/$name")) {
        include "Classes/$class.php";
    }
});



$person = new Citizen('Ivan',33,333,'03/12/2018');


print $person;