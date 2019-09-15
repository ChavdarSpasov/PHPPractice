<?php

include "Automobile.php";
include "Car.php";
include "Truck.php";
include "Bus.php";

$line_1 = trim(fgets(STDIN));
list($name, $fuelQuantity, $littersPerKilometer, $tankCapacity) = explode(" ", $line_1);
$myCar = new Car($fuelQuantity,$littersPerKilometer, $tankCapacity);

$line_2 = trim(fgets(STDIN));
list($name, $fuelQuantity, $littersPerKilometer, $tankCapacity) = explode(" ", $line_2);
$myTrack = new Truck($fuelQuantity,$littersPerKilometer, $tankCapacity);

$line_3 = trim(fgets(STDIN));
list($name, $fuelQuantity, $littersPerKilometer, $tankCapacity) = explode(" ", $line_3);
$myBus = new Bus($fuelQuantity,$littersPerKilometer, $tankCapacity);


$numberDriveCommands = trim(fgets(STDIN));

for ($i=0; $i<$numberDriveCommands; $i++){

    list($action, $name, $property) = explode(" ", trim(fgets(STDIN)));


    if ($action == 'Drive') {
        if ($name == 'Car') {
            $myCar->carDrive($property);
        } elseif ($name == 'Truck') {
            $myTrack->truckDrive($property);
        }elseif ($name == 'Bus'){
            $myBus->busDrive($property);
        }
    } elseif ($action == 'Refuel') {
        if ($name == 'Car') {
            $myCar->carRefuel($property);
        } elseif ($name == 'Truck') {
            $myTrack->truckRefuel($property);
        }elseif ($name == 'Bus'){
            $myBus->busRefuel($property);
        }
    }elseif ($action =='DriveEmpty'){
        $myBus->busDriveEmpty($property);
    }


}


print str_repeat('-',10) . "\r\n";

print $myCar;
print "\r\n";
print $myTrack;
print "\r\n";
print $myBus;


