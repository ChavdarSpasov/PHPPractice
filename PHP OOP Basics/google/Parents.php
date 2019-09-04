<?php


class Parents
{
    public $parentName;
    public $parentBirthday;

    public function __construct($parentName, $parentBirthday)
    {
        $this->parentName = $parentName;
        $this->parentBirthday = $parentBirthday;
    }

    public function __toString()
    {
        return $this->parentName . ' ' . $this->parentBirthday;
    }
}