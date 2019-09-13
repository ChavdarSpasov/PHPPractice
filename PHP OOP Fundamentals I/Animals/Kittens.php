<?php
class Kittens extends Animal
{
   public function __construct($name, $age, $gender)
   {
       parent::__construct($name, $age, $gender);
   }

    public function setGender($gender)
    {
        if ($gender == 'Male') {
            throw new Exception('“Kittens are female!”');
        } else {
            $this->gender = $gender;
        }
    }

    public function produceSound()
    {
        print "Miau";
    }
}