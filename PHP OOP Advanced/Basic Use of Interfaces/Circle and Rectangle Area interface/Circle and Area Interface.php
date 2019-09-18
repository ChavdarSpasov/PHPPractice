<?php
declare(strict_types = 1);

include_once "Area.php";
include_once "Circumerence.php";
include_once "Circle.php";
include_once "Rectangle.php";

$myCer = new Circle();
$myCer->radius = 10;
print "Circle, radius = 10 mm, area = " .
    number_format($myCer->getSurface(),2,',',' ') .
    "mm";

print "\r\n" . str_repeat('-',50). "\r\n";

$myRec = new Rectangle(15,31);

print  "Rectangle, width = $myRec->width mm, height = $myRec->height mm," .
    'area = ' . number_format($myRec->getSurface(),2,',',' ') .
    "mm";

print "\r\n" . str_repeat('-',50). "\r\n";

print  "Circle with radius = $myCer->radius mm:\r\n" .
       "Area = " .
        number_format($myCer->getSurface(),2,',',' ') .
        " mm\r\n" .
       "Circumference = " .
        number_format($myCer->getCircumference(),2,',',' ') .
        " mm";