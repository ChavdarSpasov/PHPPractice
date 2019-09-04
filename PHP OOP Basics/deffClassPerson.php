<?php

class Person
{
    public $name;
    public $age;

    function __construct($name,$age)
    {
        $this->name = $name;
        $this->age = $age;

        //print $this->name . '-' . $this->age;
    }


}

$num = trim(fgets(STDIN));

$result = [];

for ($i=0; $i < $num ; $i++) { 
    $line = explode(' ',trim(fgets(STDIN)));

    $name = $line[0];
    $age = $line[1];

    $result[] = new Person($name,$age);
}

foreach ($result as $item) {
    if($item->age > 30){
        print $item->name . '-' . $item->age . PHP_EOL;
    }
}



