<?php

class Fibonacci
{
    public $fibonacciNumbers;

    function __construct()
    {
        $this->fibonacciNumbers = [0, 1];
    }

    function getNumbersInRange(int $beginning, int $ending)
    {
        for ($i = 2; $i < $ending; $i++) {
            $a = $this->fibonacciNumbers[$i - 2];
            $b = $this->fibonacciNumbers[$i - 1];

            $this->fibonacciNumbers[] = $a + $b;
        }

        $fibSequence = array_slice($this->fibonacciNumbers,$beginning,$ending);

        return implode(', ',$fibSequence);
    }
}