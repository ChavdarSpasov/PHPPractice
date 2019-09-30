<?php
ini_set('display_error',1);

spl_autoload_register(function ($interface){
    $name = "$interface.php";
    
    if (file_exists("Interfaces/$name")) {
        include "Interfaces/$name";    
    }
});

class Car implements iFerrari
{
    public $name;
    static $objNum = 0;

    public function Gas(){
        return 'Zadushavam sA!';
    }

    public function Breaks()
    {
        return 'Breakes!';
    }

    static public function forUrl(string $str, string $rep='-')
    {
        return str_replace(' ',$rep,$str);
    }

    public function __construct(string $name)
    {
        $this->name = $name;
        self::$objNum ++;
    }

    public function __toString()
    {
        return self::NAME .'/'. 
               $this->Gas() .'/'. 
               $this->Breaks().'/'.
               $this->name.PHP_EOL; 
    }
}


$input = readline();

$myCar = new Car($input);

print $myCar;


