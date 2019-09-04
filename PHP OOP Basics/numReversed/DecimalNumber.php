<?php

class DecimalNumber
{
    public $number;

    function __construct(string $number)
    {

        $this->number = $number;
    }

    function reverseOrder(){

        $number = str_split($this->number);
        $number = array_reverse($number);

        return $number;
    }

    function isDecimal(){
        $number = str_split($this->number);
        $count = count(array_filter($number,function ($n){
            return $n == ".";
        }));

        if (current($number)!= '.' and end($number) != '.'){
            if ($count != 1){
                return false;
            }else{
                return true;
            }
        }

    }
}