<?php

include 'db_config.php';
include 'MyPDO.php';

try{

$db = new MyPDO("mysql:host=$db_host;dbname=$db_name",$db_user,$db_password);

$db->setErrorExeption();

//list continents

/*
$continents = $db->query('SELECT * FROM continents',PDO::FETCH_ASSOC);

$output = [];

foreach ($continents as $continent) {
    $singleContinent = "$continent[continent_name] ($continent[continent_code])";
    $output[] = $singleContinent;
}

echo '-------' . PHP_EOL;
echo implode(',',$output) . PHP_EOL;
echo '-------' . PHP_EOL;
*/

// list Highly Populated Countries in Asia

/*
$result = $db->query("SELECT a.country_name 
                      FROM countries AS a, continents AS b
                      WHERE a.continent_code  = b.continent_code 
                      AND a.population > 1000000000");

foreach ($result as $value) {
    print "$value[country_name]";
    print PHP_EOL;
}
*/

//High Peaks in the Andes

$result = $db->query("SELECT peak_name,elevation 
                      FROM peaks
                      WHERE mountain_id = 3");

foreach ($result as $value) {
    print "$value[peak_name],$value[elevation]";
    print PHP_EOL;
}



}
catch(PDOException $e){
    print 'PDO Error:' . $e->getMessage() . PHP_EOL;
}