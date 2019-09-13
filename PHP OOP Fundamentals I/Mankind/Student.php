<?php
class Student extends Human
{
    private $facultyNumber;

    public function __construct($firstName,
                                $secondName,
                                $facultyNumber)
    {
        parent::__construct($firstName, $secondName);
        $this->setFacultyNumber($facultyNumber);
    }

    public function getFacultyNumber()
    {
        return $this->facultyNumber;
    }

    public function setFacultyNumber($facultyNumber)
    {
        if (strlen($facultyNumber ) < 5 or strlen($facultyNumber) > 10) {
            throw new Exception('Invalid faculty number!');
        } else {
            $this->facultyNumber = $facultyNumber;
        }

    }

    public function __toString()
    {
        return parent::__toString()
            . "\nFaculty number: " . $this->getFacultyNumber();

    }


}