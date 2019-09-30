<?php
class Commando extends SpecialisedSoldier
{
    protected $setOfMissions;

    public function __construct($id, $fName, $lName, $salary, $corp, array $setOfMissions)
    {
        parent::__construct($id, $fName, $lName, $salary, $corp);
        $this->setOfMissions = $setOfMissions;
    }

    public function __toString()
    {
        return parent::__toString(). "\r\nMissions:" .
            "\r\n   ". implode("\r\n   ",$this->setOfMissions);
    }
}