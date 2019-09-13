<?php

include_once "Figure.php";
try {

    //Problem 01 - without try - catch

    $length = trim(fgets(STDIN));
    $width = trim(fgets(STDIN));
    $height = trim(fgets(STDIN));

    $myFig = new Figure($length, $width, $height);

    print $myFig;
} catch (Exception $ex) {

    print $ex->getMessage();
}
