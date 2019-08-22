<?php

function isPalindrome(string $str) : void{
    
    $result = true;

    for($i=0; $i < (strlen($str)-1) / 2; $i++) { 
        
        $firstEL = $i;
        $lastEl =  strlen($str) - $i -1;

        if($str[$firstEL] == $str[$lastEl]){

            $result = true;
        }else{
            $result = false;
            break;
        }
    }

    print $result;
}