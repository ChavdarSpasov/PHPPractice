<?php
$animals = [
    [ 'name' => 'Waffles', 'type' => 'dog', 'age'  => 12],
    [ 'name' => 'Fluffy', 'type' => 'cat', 'age'  => 14],
    [ 'name' => 'Spelunky', 'type' => 'dog', 'age'  => 4],
    [ 'name' => 'Hank', 'type' => 'dog', 'age'  => 11],
  ];


  $youngDogs = function($animal) {
    if ($animal['type'] == 'dog' and $animal['age'] < 11) {
      return true;
    }else {
      return false;
    }
  };

  $output = array_filter($animals,$youngDogs);


  print_r($output);

 
 
