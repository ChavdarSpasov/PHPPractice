<?php

include "IId.php";
include "IBirthDate.php";
include "IBuyer.php";
include "Citizen.php";
include "Robot.php";
include "Pet.php";
include "Rebal.php";

/* Second part
$input = explode(' ', trim(fgets(STDIN)));


$arrOfCitizensAndRobotsAndPets = [];

while ($input[0] != 'End') {
    if (count($input) == 5) {
        $name = $input[1];
        $age = $input[2];
        $id = $input[3];
        $bDate = DateTime::createFromFormat('d/m/Y', $input[4]);

        $days = getdate($bDate->getTimestamp());

        $myCitizen = new Citizen($name, $age, $id, $bDate);
        $arrOfCitizensAndRobotsAndPets[] = $myCitizen;

    } elseif (count($input) == 3) {
        if ($input[0] == 'Pet') {
            $name = $input[1];
            $bDate = DateTime::createFromFormat('d/m/Y', $input[2]);

            $myPet = new Pet($name, $bDate);
            $arrOfCitizensAndRobotsAndPets[] = $myPet;
        } elseif ($input[0] == 'Robot') {
            $model = $input[1];
            $id = $input[2];

            $myRobot = new Robot($model, $id);
            $arrOfCitizensAndRobotsAndPets[] = $myRobot;
        }
    }


    $input = explode(' ', trim(fgets(STDIN)));
}
*/


/*This is part one without Pet class and without property $bDate


$fakeIdDigits = trim(fgets(STDIN));

$numFakeDigits = strlen($fakeIdDigits);

foreach ($arrOfCitizensAndRobotsAndPets as $item) {

    $lastIdDigits = substr($item->getId(), -$numFakeDigits);
    if ($lastIdDigits == $fakeIdDigits)
        print $item->getId() . PHP_EOL;
}
*/


/*This is part two with Pet classs and bDayte
$year = trim(fgets(STDIN));


foreach ($arrOfCitizensAndRobotsAndPets as $unit) {
    if ($unit instanceof Robot) {
        continue;
    } else {
        $dataYear = $unit->getBirthDate();
        if ($dataYear->format('Y') == $year) {
            print $dataYear->format('d/m/Y');
            print PHP_EOL;
        }
    }
}

*/


/*Third part class Rebel and new properties group in Rebel
*
*/

$arrCitizenRebel = [];

$n = trim(fgets(STDIN));

for ($i=0; $i<$n; $i++){
  $input = explode(' ',trim(fgets(STDIN)));
  if (count($input) == 4){
      $bDate = DateTime::createFromFormat('d/m/Y', $input[3]);
      $myCitizen = new Citizen($input[0],$input[1],$input[2],$bDate);
      if (array_key_exists($input[0],$arrCitizenRebel)){
          continue;
      }else{
          $arrCitizenRebel[$input[0]] = $myCitizen;
      }

  }elseif (count($input) == 3){
      $myRebel = new Rebel($input[0],$input[1],$input[2]);
      if (array_key_exists($input[0],$arrCitizenRebel)){
          continue;
      }else{
          $arrCitizenRebel[$input[0]] = $myRebel;
      }
  }

}

$input = trim(fgets(STDIN));
while ($input != 'End'){

    if (array_key_exists($input,$arrCitizenRebel)){
         $currUnit = $arrCitizenRebel[$input];
         $currUnit->BuyFood();
    }

    $input = trim(fgets(STDIN));
}

$result = array_reduce($arrCitizenRebel,function ($output,$unit){
    $output += $unit->getFood();

    return $output;
});

print "$result units food";