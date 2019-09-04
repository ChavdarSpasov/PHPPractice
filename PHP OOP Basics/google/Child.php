<?php

class Child
{
    public $childName;
    public $childBirthday;


    public function __construct($childName, $childBirthday)
    {
        $this->childName = $childName;
        $this->childBirthday = $childBirthday;
    }

    public function __toString()
    {
        return $this->childName . ' ' . $this->childBirthday;
    }

}