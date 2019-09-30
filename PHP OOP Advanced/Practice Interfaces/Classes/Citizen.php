<?php

class Citizen implements iPerson,iIdentifiable,iBirthable
{
    protected $name;
    protected $age;
    protected $id;
    protected $birthDate;

    public function __construct(string $name,int $age,int $id,string $birthDate)
    {
        $this->setName($name);
        $this->setAge($age);
        $this->setIdBirthDate($birthDate,$id);
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }
    public function setAge(int $age)
    {
        $this->age = $age;        
    }

    public function setId(int $id)
    {
        $this->id = $id;
    }

    public function setBirthDate(string $date)
    {
        $this->birthDate = $date;
    }

    public function setIdBirthDate($birthDate,$id)
    {
        $this->id = $id;
        $this->birthDate = $birthDate;
    }

    public function __toString()
    {
        return $this->name .','. 
               $this->age .','.
               $this->birthDate .','.
               $this->id;
    }

}
