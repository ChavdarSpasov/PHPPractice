<?php
class Spy extends Soldier
{
    private $codeNmmber;

    public function __construct($id, $fName, $lName, $codeNumber)
    {
        parent::__construct($id, $fName, $lName);
        $this->codeNmmber = $codeNumber;
    }

    function __toString()
    {
        return parent::__toString(). "\r\nCodeNumber: $this->codeNmmber";
    }

}