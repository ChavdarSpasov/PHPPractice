<?php
class Soldier implements ISoldier
{
    protected $id;
    protected $firstName;
    protected $lastName;

    public function __construct($id, $fName, $lName)
    {
        $this->id = $id;
        $this->firstName = $fName;
        $this->lastName = $lName;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }


    function __toString()
    {
        return "Name: $this->firstName $this->lastName Id: $this->id ";
    }


}