<?php

include_once "Engine.php";
include_once "Car.php";

$engineInputs = trim(fgets(STDIN));

$engines = [];
$cars = [];

for ($i = 0; $i < $engineInputs; $i++) {

    $input = trim(fgets(STDIN));
    $engineStats = explode(' ', $input);

    $engine_model = $engineStats[0];
    $engine_power = (int)$engineStats[1];
    $engine_displacement = $engineStats[2];
    if (isset($engineStats[3])) {
        $engine_efficiency = $engineStats[3];

        $curr_engine_data = new Engine($engine_model,
            $engine_power,
            $engine_displacement,
            $engine_efficiency);

        $engines[] = $curr_engine_data;
    } else {
        $curr_engine_data = new Engine($engine_model,
            $engine_power,
            $engine_displacement);

        $engines[] = $curr_engine_data;
    };
};

$carsInputs = trim(fgets(STDIN));

for ($i = 0; $i < $carsInputs; $i++) {

    $input = trim(fgets(STDIN));
    $carsStats = explode(' ', $input);

    $car_model = $carsStats[0];
    $car_engine = $carsStats[1];

    $ok = false;

    foreach ($engines as $engine) {
        if ($engine->getModel() == $car_engine) {
            $car_engine = $engine;

            if (isset($carsStats[2]) && isset($carsStats[3])) {
                $car_weight = $carsStats[2];
                $car_color = $carsStats[3];


                $curr_car_data = new Car($car_model,
                    $car_engine->getModel(),
                    $car_engine->getPower(),
                    $car_engine->getDisplacement(),
                    $car_engine->getEfficiency(),
                    $car_weight,
                    $car_color);

                $cars[] = $curr_car_data;
            } else {
                $curr_car_data = new Car($car_model,
                    $car_engine->getModel(),
                    $car_engine->getPower(),
                    $car_engine->getDisplacement(),
                    $car_engine->getEfficiency());

                $cars[] = $curr_car_data;
            };
        }
    };
};

/*
foreach ($cars as $car){
    print $car->getModel(). ":\n";
    print "  " . $car->engine->getModel(). ":\n";
    print "    Power: " . $car->engine->getPower(). "\n";
    print "    Displacement: " . $car->engine->getDisplacement(). "\n";
    print "    Efficiency: " . $car->engine->getEfficiency(). "\n";
    print "  Weight: " . $car->getWeight(). "\n";
    print "  Color: " . $car->getColor(). "\n";
    print "------------------------" . "\n";

}
*/

foreach ($cars as $car){
    print $car;
}
