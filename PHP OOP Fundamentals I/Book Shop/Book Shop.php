<?php

include_once 'Book.php';
include_once 'GoldenEditionBook.php';

try{

    $name = trim(fgets(STDIN));
    $title = trim(fgets(STDIN));
    $price = trim(fgets(STDIN));
    $type = trim(fgets(STDIN));



    if ($type != 'GOLD' and $type != 'STANDARD'){
        throw new Exception('Type is not valid!');
    }else{
        if ($type == 'STANDARD'){
            $mybook = new Book($title,$name,$price);
        }elseif ($type == 'GOLD'){
            $mybook = new GoldenEditionBook($title,$name,$price);
        }
    }

    print $mybook;

}catch (Exception $ex){
    print $ex->getMessage();
}