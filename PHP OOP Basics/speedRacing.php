<?php

class Car
{
    public $model;
    public $fuelAmount;
    public $fuelCostForOneKilometer;
    public $distanceTravel;

    function DistanceChecker($kilometers)
    {
        if ($kilometers * $this->fuelCostForOneKilometer <= $this->fuelAmount) {
            return true;
        } else {
            return false;
        }
    }
}

;

$cars = [];

$num = trim(fgets(STDIN));
for ($i = 0; $i < $num; $i++) {
    $carInfo = explode(' ', trim(fgets(STDIN)));
    $car = new Car();

    $car->model = $carInfo[0];
    $car->fuelAmount = $carInfo[1];
    $car->fuelCostForOneKilometer = $carInfo[2];
    $car->distanceTravel = 0;

    if (count($cars) == 0) {
        $cars[] = $car;
    } else {

        $equalBrandCar = false;

        foreach ($cars as $value) {
            if ($value->model == $carInfo[0]) {
                $equalBrandCar = true;
            }
        }

        if ($equalBrandCar == true){
            continue;
        }else{
            $cars[] = $car;
        }

    }
}

$command = explode(' ', trim(fgets(STDIN)));

while ($command[0] != 'End') {

    $car_model = $command[1];
    $amountOfKilometers = $command[2];

    $curr_car_model = array_filter($cars, function ($car) use ($car_model) {
        return $car->model == $car_model;
    });

    $curr_car_model = array_values($curr_car_model);

    $curr_car = $curr_car_model[0];

    if ($curr_car->DistanceChecker($amountOfKilometers)) {
        $curr_car->distanceTravel += $amountOfKilometers;
        $fuel = $curr_car->fuelCostForOneKilometer;
        $curr_car->fuelAmount -= ($amountOfKilometers * $fuel);
    } else {
        print "\r\n" . 'Insufficient fuel for the drive';
    }

    $command = explode(' ', trim(fgets(STDIN)));
}


foreach ($cars as $car){
    $fuelOutput = number_format($car->fuelAmount,2);
    print "$car->model $fuelOutput $car->distanceTravel \r\n";
}