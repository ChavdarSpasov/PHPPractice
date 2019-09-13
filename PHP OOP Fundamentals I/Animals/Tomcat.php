<?php
class Tomcat extends Animal
{
    public function __construct($name, $age, $gender)
    {
        parent::__construct($name, $age, $gender);
    }

    public function setGender($gender)
    {
        if ($gender == 'Female') {
            throw new Exception('Tomcats are male!');
        } else {
            $this->gender = $gender;
        }
    }

    public function produceSound()
    {
        print "Give me one million b***h";
    }
}