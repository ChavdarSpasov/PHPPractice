<?php

class SpecialisedSoldier extends PrivateSoldier
{
    protected $corp;

    public function __construct($id, $fName, $lName, $salary, $corp)
    {
        parent::__construct($id, $fName, $lName, $salary);
        $this->corp = $corp;
    }

    function __toString()
    {
        return parent::__toString() . "\r\nCorps: $this->corp";

    }
}