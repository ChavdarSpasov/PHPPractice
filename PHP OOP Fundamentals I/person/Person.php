<?php

class Person
{
    protected $age;
    protected $name;

    public function __construct(int $age, string $name)
    {
        $this->setAge($age);
        $this->setName($name);
    }

    public function setName(string $name)
    {
        if (strlen($name) < 3){
            throw new Exception("Name’s length should not be less than 3 symbols!");
        }else{
            $this->name = $name;
        }
    }

    public function getName():string
    {
        return $this->name;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function setAge(int $age)
    {
        if ($age < 1) {
            throw new Exception("Age must be positive!");
        } else {
            $this->age = $age;
        }
    }


}