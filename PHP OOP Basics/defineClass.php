<?php 

error_reporting(E_ALL);
ini_set('display_errors', 1);

class Car
{   
    private $brand;
    private $model;
    private $year;
    private $extraDetails;

    function __construct($brand, $model)
    {
        $this->brand = $brand;
        $this->$model = $model;
    }

    function setYear($year)
    {
        if(is_numeric($year) and strlen($year) == 4){
            $this->year = $year;

        }
    }

    function setExtraDetails($engine,$numbersOfSeats,$horsePower)
    {
        $this->extraDetails = new CarExtraDetails($engine,$numbersOfSeats,$horsePower);

    }

    function getBrand()
    {
        return $this->brand;
    }

    function getModel()
    {
        return $this->model;
    }

    function getYear()
    {
        return $this->year;
    }
}

class CarExtraDetails
{ 
    private $engine;
    private $numbersOfSeats;
    private $horsePower;

    function __construct($engine,
                         $numbersOfSeats,
                         $horsePower)
    {
        $this->engine = $engine;
        $this->numbersOfSeats = $numbersOfSeats;
        $this->horsePower = $horsePower;
    }

    function getEngine()
    {
        return $this->engine;
    }

    function getNumberOfSeats()
    {
        return $this->numberOfSeats;
    }
 
    function getHorsePower()
    {
        return $this->horsePower;
    }
    
}

// $result = [];

// for ($i=0; $i < 4; $i++) { 
//     $line = explode(' ',trim(fgets(STDIN)));

//     $carBrand = $line[0];s
//     $carModel = $line[1]; 
//     $carYear = $line[2];

//     $element = new Car($carBrand,$carModel);

//     $element->setYear($carYear);

//     $result[] = $element;

// }


// print_r($result);



$myCar = new Car('Honda','Civic');

$myCar->setYear(1999);

$myCar->setExtraDetails('1800','4','90');

var_dump($myCar);

$driver = new stdClass();

$driver->firstName = 'Boko';
$driver->lastName = 'Chokov';
$driver->age = 23;
$driver->homeTown = 'Vraca';
$driver->numbersWin = 129;

var_dump($driver);


class MathOperations
{
    public $a;
    public $b;

    function __construct($a,$b)
    {
        $this->a= $a;
        $this->b= $b;
    }

    function isZero($x)
    {
        if ($x == 0 ) {
            print 'devision by zero is not possible';
            exit;
        }
    }

    function getSum()
    {
        return $this->a + $this->b;
    }

    function getDivision()
    {   
        $this->isZero($this->a);
        $this->isZero($this->b);

        return $this->a / $this->b;
    }
    

}

$outputMath = new MathOperations(6,3);

print $outputMath->getSum();
print '<br>';
print $outputMath->getDivision();

