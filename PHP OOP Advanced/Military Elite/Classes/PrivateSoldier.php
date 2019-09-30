<?php
class PrivateSoldier extends Soldier implements IPrivate
{
    protected $salary;

    public function __construct($id, $fName, $lName,$salary)
    {
        parent::__construct($id, $fName, $lName);
        $this->salary = number_format($salary,2,"."," ");
    }

    public function getSalary()
    {
        return $this->salary;
    }


    function __toString()
    {
        return parent::__toString() . "Salary: $this->salary ";
    }


}