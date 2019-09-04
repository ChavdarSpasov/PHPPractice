<?php
class DateModifier
{
    public $dateOne;
    public $dateTwo;

    public function __construct(string $dateOne, string $dateTwo)
    {
        $this->dateOne = $dateOne;
        $this->dateTwo = $dateTwo;
    }


    function DateDiff(){

        $inputOne = new DateTime($this->dateOne);
        $inputTwo = new DateTime($this->dateTwo);

        $daysDiff = $inputOne->diff($inputTwo);

        return $daysDiff->days;
    }

}