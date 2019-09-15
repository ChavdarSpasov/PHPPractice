<?php
class Father
{
    protected $name;
    protected $yearBirth;
    protected $yearDead;

    public function __construct(string $name,int $yearBirth,int $yearDead)
    {
        $this->setName($name);
        $this->setYearBirth($yearBirth);
        $this->setYearDead($yearDead);
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        if (strlen($name) < 3){
            throw new Exception('Name should be at least 3 characters long.');
        }
        $this->name = $name;
    }

    public function getYearBirth()
    {
        return $this->yearBirth;
    }

    public function setYearBirth($yearBirth)
    {
        $this->yearBirth = $yearBirth;
    }

    public function getYearDead()
    {
        return $this->yearDead;
    }

    public function setYearDead($yearDead)
    {
        $this->yearDead = $yearDead;
    }


    public function getTimeLived()
    {
        return $this->yearDead - $this->yearBirth;
    }

    public function getGenerationNum()
    {
        return "1";
    }

}