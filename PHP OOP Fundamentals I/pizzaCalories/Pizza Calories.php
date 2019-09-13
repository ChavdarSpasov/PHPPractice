<?php
include_once 'Classes/Dough.php';
include_once 'Classes/Topping.php';
include_once 'Classes/Pizza.php';

try {
    $pizzaData = explode(' ', trim(fgets(STDIN)));

    if ($pizzaData[0] == 'Pizza' and count($pizzaData) == 3) {
        $pizzaName = $pizzaData[1];
        $pizzaToppings = $pizzaData[2];

        $myPizza = new Pizza($pizzaName, $pizzaToppings);
    } else {
        throw new Exception('Bad input arguments.');
    }

    $input = explode(' ', trim(fgets(STDIN)));

    $counterTopping = $myPizza->getNumbersOfToppings();
    $counterDough = 1;


    while ($input[0] != 'END') {


        if ($input[0] == 'Dough' and count($input) == 4) {

            if ($counterDough == 0)
                continue;

            $type = $input[1];
            $bakingTechnique = $input[2];
            $weight = $input[3];

            $myDough = new Dough($type, $bakingTechnique, $weight);
            $currDoughCalories = $myDough->getCalories();

            $myPizza->addCalories($currDoughCalories);

            $counterDough--;

        } elseif ($input[0] == 'Topping' and count($input) == 3) {

            if ($counterTopping == 0)
                continue;

            $toppingType = $input[1];
            $weight = $input[2];

            $myTopping = new Topping($toppingType, $weight);
            $currToppingCalories = $myTopping->getCalories();

            $myPizza->addCalories($currToppingCalories);
            $myPizza->addTopping($myTopping);

            $counterTopping--;

        } else {
            throw new Exception('Bad input arguments.');
        }


        $input = explode(' ', trim(fgets(STDIN)));
    }

    print $myPizza->getName() .
        " - " .
        number_format($myPizza->getTotalCalories(), 2, '.', '') .
        " Calories.";

} catch (Exception $e) {

    print $e->getMessage();
}


