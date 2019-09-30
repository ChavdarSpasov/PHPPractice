<?php

class Pet implements IBirthDate
{
    private $name;
    private $bDate;

    public function __construct($name, $bDate)
    {
        $this->name = $name;
        $this->setBirthDate($bDate);
    }


    public function setBirthDate(DateTime $date)
    {
        $this->bDate = $date;
    }

    public function getBirthDate()
    {
        return $this->bDate;
    }



}