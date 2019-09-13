<?php

include_once "Person.php";
include_once "Product.php";


$people = [];

$line = explode(' ', trim(str_replace(';', ' ', fgets(STDIN))));

foreach ($line as $person) {

    $personData = explode('=', $person);

    $personName = $personData[0];
    $personMoney = $personData[1];

    $people[$personName] = new FamilyMember($personName, $personMoney);
}
$products = [];

$line = explode(' ', trim(str_replace(';', ' ', fgets(STDIN))));

foreach ($line as $product) {

    $productData = explode('=', $product);

    $productName = $productData[0];
    $productPrice = $productData[1];

    $products[$productName] = new Product($productName, $productPrice);

}



$groceryData = explode(' ', trim(fgets(STDIN)));

while ($groceryData[0] != 'END') {

    print "\r\n";

    $name = $groceryData[0];
    $groceryProduct = $groceryData[1];


    $moneyP = $people[$name]->getMoney();
    $moneyG = $products[$groceryProduct]->getCost();


    if ($moneyP >= $moneyG) {
        print "$name bought $groceryProduct";
        $people[$name]->setMoney($moneyP - $moneyG);
        $people[$name]->bagOfProducts[] = $groceryProduct;
    } else {
        print "$name can't afford $groceryProduct";
    }


    $groceryData = explode(' ', trim(fgets(STDIN)));
}


foreach ($people as $value) {
    print $value->getName() . ' - ';
    if (count($value->bagOfProducts) == 0) {
        print "Nothing bought";
    } else {
        print implode(', ', $value->bagOfProducts);
    }
    print "\r\n";
}

