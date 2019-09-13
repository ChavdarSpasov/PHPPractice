<?php

class Worker extends Human
{
    private $weekSalary;
    private $workHoursPerDay;

    public function __construct($firstName,
                                $secondName,
                                $weekSalary,
                                $workHoursPerDay)
    {
        parent::__construct($firstName, $secondName);

        $this->setWeekSalary($weekSalary);
        $this->setWorkHoursPerDay($workHoursPerDay);
    }

    public function setSecondName($secondName)
    {
        if (strlen($secondName) < 3) {
            throw new Exception("Expected length more than 3 symbols!Argument: $secondName");
        } else {
            $this->secondName = $secondName;
        }
    }

    public function getWeekSalary()
    {
        return $this->weekSalary;
    }

    public function setWeekSalary($weekSalary)
    {
        if ($weekSalary < 10) {
            throw new Exception("Expected value mismatch!Argument: $weekSalary");
        } else {
            $this->weekSalary = $weekSalary;
        }
    }

    public function getWorkHoursPerDay()
    {
        return $this->workHoursPerDay;
    }

    public function setWorkHoursPerDay($workHoursPerDay)
    {
        if ($workHoursPerDay < 1 and $workHoursPerDay > 10) {
            throw new Exception("Expected value mismatch!Argument: $workHoursPerDay");
        } else {
            $this->workHoursPerDay = $workHoursPerDay;
        }
    }

    function __toString()
    {
        return parent::__toString()
            . "\nWeek Salary: " . number_format($this->getWeekSalary(),2,'.','')
            . "\nHours per day: " . number_format($this->getWorkHoursPerDay(),2)
            . "\nSalary per hour: " . number_format($this->getWeekSalary()/(7*$this->getWorkHoursPerDay()),
                                                    2);
    }


}