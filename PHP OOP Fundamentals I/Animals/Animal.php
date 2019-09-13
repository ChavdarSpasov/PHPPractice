<?php
class Animal
{
    public $name;
    public $age;
    public $gender;

    public function __construct($name, $age, $gender)
    {
        $this->setName($name);
        $this->setAge($age);
        $this->setGender($gender);
    }

    public function setName($name)
    {
        $nameSplit = str_split($name);
        if ($nameSplit[0] != strtoupper($name[0])){
            throw new Exception("Expected upper case letter!Argument: $name");
        }elseif (strlen($name) < 4){
            throw new Exception("Expected length at least 4 symbols!Argument: $name");
        }else{
            $this->name = $name;
        }
    }

    public function setAge($age)
    {
        if ($age < 1 ){
            throw new Exception('“Invalid input!”');
        }else{
            $this->age = $age;
        }
    }

    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    function __toString()
    {
        return "$this->name $this->age $this->gender";
    }

    public function produceSound()
    {
        print "Not implemented!";
    }

}