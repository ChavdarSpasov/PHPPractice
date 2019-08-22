<?php
$input = trim(fgets(STDIN));
$inventory = [];
$shoppingTimeOver = false;

while ($input != 'exam time') {

    $currInput = explode(' ', $input);
    $command = $currInput[0];
    $product = $currInput[1];

    if ($shoppingTimeOver == false && $command == 'stock') {

        $quantity = $currInput[2];
        if (!array_key_exists($product, $inventory)) {
            $inventory[$product] = 0;
        }

        $inventory[$product] += $quantity;
    } elseif ($shoppingTimeOver == true && $command == 'buy') {

        $quantity = $currInput[2];
        if (array_key_exists($product, $inventory)) {
            $inventory[$product] -= $quantity;
        }

        if (!array_key_exists($product, $inventory)) {
            print "$product doesn't exist " . "\r\n";
        }
    }

    if ($input == 'shopping time') {
        $shoppingTimeOver = true;
    }

    $input = trim(fgets(STDIN));
}
asort($inventory);
foreach ($inventory as $item => $value) {
    if ($value > 0) {
        print "$item -> $value \r\n";
    }
}