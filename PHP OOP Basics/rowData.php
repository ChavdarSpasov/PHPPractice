<?php

/*
class Car
{
    public $model;
    public $engine;
    public $cargo;
    public $tires;

    function __construct($model,
                         $engineSpeed,
                         $enginePower,
                         $cargoWeight,
                         $cargoType,
                         $pressure_1,
                         $age_1,
                         $pressure_2,
                         $age_2,
                         $pressure_3,
                         $age_3,
                         $pressure_4,
                         $age_4)
    {
        $this->model = $model;
        $this->engine = new Engine($engineSpeed,$enginePower);
        $this->cargo = new Cargo($cargoWeight, $cargoType);
        $this->tires = new Tires($pressure_1, $age_1, $pressure_2, $age_2,$pressure_3, $age_3, $pressure_4, $age_4);
    }


}
*/

/*
class Engine
{
    public $enginePower;
    public $engineSpeed;

    function __construct( $engineSpeed,$enginePower)
    {
        $this->enginePower = $enginePower;
        $this->engineSpeed = $engineSpeed;
    }
}
*/

class Cargo
{
    public $cargoWeight;
    public $cargoType;

    function __construct($cargoWeight, $cargoType)
    {
        $this->cargoWeight = $cargoWeight;
        $this->cargoType = $cargoType;
    }

}


class Tires
{
    public $age_1;
    public $pressure_1;
    public $age_2;
    public $pressure_2;
    public $age_3;
    public $pressure_3;
    public $age_4;
    public $pressure_4;

    function __construct($pressure_1, $age_1, $pressure_2, $age_2,$pressure_3, $age_3, $pressure_4, $age_4)
    {
        $this->age_1 = $age_1;
        $this->pressure_1 = $pressure_1;
        $this->age_2 = $age_2;
        $this->pressure_2 = $pressure_2;
        $this->age_3 = $age_3;
        $this->pressure_3 = $pressure_3;
        $this->age_4 = $age_4;
        $this->pressure_4 = $pressure_4;
    }

}

$number = trim(fgets(STDIN));


$cars = [];

for ($i = 0; $i < $number; $i++) {
    $curr_car_info = (explode(' ', trim(fgets(STDIN))));

    list($model,
        $engineSpeed,
        $enginePower,
        $cargoWeight,
        $cargoType,
        $pressure_1,
        $age_1,
        $pressure_2,
        $age_2,
        $pressure_3,
        $age_3,
        $pressure_4,
        $age_4) = $curr_car_info;

    $car = new Car($model,
        $engineSpeed,
        $enginePower,
        $cargoWeight,
        $cargoType,
        $pressure_1,
        $age_1,
        $pressure_2,
        $age_2,
        $pressure_3,
        $age_3,
        $pressure_4,
        $age_4);

    $cars[] = $car;
}




$command = trim(fgets(STDIN));

if ($command == 'fragile'){
    foreach ($cars as $car){
      if ($car->cargo->cargoType == 'fragile'
          and (float)$car->tires->pressure_1 < 1
          and (float)$car->tires->pressure_2 < 1
          and (float)$car->tires->pressure_3 < 1
          and (float)$car->tires->pressure_4 < 1){

          print "$car->model \r\n";
      }
    };
}elseif ($command == 'flammable'){
    foreach ($cars as $car){
        if ($car->cargo->cargoType == 'flammable' and (float)$car->engine->enginePower > 250){

            print "$car->model \r\n";
        };
    }
};



