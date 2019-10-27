<?php

include "Connect.php";

$continents= $myDb->query("SELECT * FROM continents");

foreach ($continents as $continent) {
    print_r($continent);
}