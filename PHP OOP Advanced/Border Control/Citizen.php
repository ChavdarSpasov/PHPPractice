<?php
class Citizen implements Id,IBirthDate,IBuyer
{
    private $name;
    private $age;
    private $id;
    private $bDate;
    private $food;

    public function __construct($name, $age, $id, $bDate = null)
    {
        $this->name = $name;
        $this->age = $age;
        $this->setId($id);
        $this->setBirthDate($bDate);
        $this->food = 0;
    }

    public function BuyFood()
    {
        $this->food +=10;
    }

    public function getFood(): int
    {
        return $this->food;
    }

    public function setBirthDate(DateTime $date)
    {
        $this->bDate = $date;
    }

    public function getBirthDate()
    {
        return $this->bDate;
    }



    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }




}