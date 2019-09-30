<?php
class Engineer extends SpecialisedSoldier
{
    protected $setOfRepairs;

    public function __construct($id, $fName, $lName, $salary, $corp, array $setOfRepairs)
    {
        parent::__construct($id, $fName, $lName, $salary, $corp);
        $this->setOfRepairs = $setOfRepairs;
    }

    function __toString()
    {
        return parent::__toString(). "\r\n". "Repairs:" .
            "\r\n   ". implode("\r\n   ",$this->setOfRepairs);
    }
}