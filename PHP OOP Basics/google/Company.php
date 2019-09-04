<?php

class Company
{
    public $companyName;
    public $companyDepartment;
    public $companySalary;

    public function __construct($companyName, $companyDepartment, $companySalary)
    {
        $this->companyName = $companyName;
        $this->companyDepartment = $companyDepartment;
        $this->companySalary = $companySalary;
    }

    public function __toString()
    {
        return $this->companyName . ' ' . $this->companyDepartment . ' ' . number_format($this->companySalary, 2);
    }
}