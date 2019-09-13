<?php
class Human
{
    protected $firstName;
    protected $secondName;

    public function __construct($firstName, $secondName)
    {
        $this->setFirstName($firstName);
        $this->setSecondName($secondName);
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function setFirstName($firstName)
    {
        $fistNameSplit = str_split($firstName);
        if ($fistNameSplit[0] != strtoupper($firstName[0])){
            throw new Exception("Expected upper case letter!Argument: $firstName");
        }elseif (strlen($firstName) < 4){
            throw new Exception("Expected length at least 4 symbols!Argument: $firstName");
        }else{
            $this->firstName = $firstName;
        }
    }

    public function getSecondName()
    {
        return $this->secondName;
    }

    public function setSecondName($secondName)
    {
        $fistNameSplit = str_split($secondName);
        if ($fistNameSplit[0] != strtoupper($secondName[0])){
            throw new Exception("Expected upper case letter!Argument: $secondName");
        }elseif (strlen($secondName) < 3){
            throw new Exception("Expected length at least 3 symbols!Argument: $secondName");
        }else{
            $this->secondName = $secondName;
        }
    }

    public function __toString()
    {
        return "First Name: " . $this->getFirstName()
        . "\nSecond Name: " . $this->getSecondName();
    }


}