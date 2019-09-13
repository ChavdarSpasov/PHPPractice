<?php

include_once "Animal.php";
include_once "Cat.php";
include_once "Dog.php";
include_once "Frog.php";
include_once "Kittens.php";
include_once "Tomcat.php";


try {
    $lineOne = trim(fgets(STDIN));

    while ($lineOne != 'Beast!') {

        $lineTwo = explode(' ',trim(fgets(STDIN)));

        if (count($lineTwo ) != 3){
            throw new Exception('Invalid input!');
        }else{
            switch ($lineOne){
                case "Animal":
                    throw new Exception('Not implemented!');
                    break;
                case "Dog":
                    $myDog = new Dog($lineTwo[0],$lineTwo[1],$lineTwo[2]);
                    print $myDog;
                    print "\r\n";
                    $myDog->produceSound();
                    print "\r\n";
                    break;
                case "Cat":
                    $myCat = new Cat($lineTwo[0],$lineTwo[1],$lineTwo[2]);
                    print $myCat;
                    print "\r\n";
                    $myCat->produceSound();
                    print "\r\n";
                    break;
                case "Frog":
                    $myFrog = new Frog($lineTwo[0],$lineTwo[1],$lineTwo[2]);
                    print $myFrog;
                    print "\r\n";
                    $myFrog->produceSound();
                    print "\r\n";
                    break;
                case "Tomcat":
                    $myTomcat = new Tomcat($lineTwo[0],$lineTwo[1],$lineTwo[2]);
                    print $myTomcat;
                    print "\r\n";
                    $myTomcat->produceSound();
                    print "\r\n";
                    break;
                case "Kitten":
                    $myKitten = new Kittens($lineTwo[0],$lineTwo[1],$lineTwo[2]);
                    print $myKitten;
                    print "\r\n";
                    $myKitten->produceSound();
                    print "\r\n";
                    break;
                default: throw new Exception("Invalid input!");
            }
        }

        $lineOne = trim(fgets(STDIN));
}
}catch (Exception $ex){
    print $ex->getMessage();
}