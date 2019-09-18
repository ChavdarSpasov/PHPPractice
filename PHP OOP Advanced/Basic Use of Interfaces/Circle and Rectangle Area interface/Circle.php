<?php

class Circle implements Area, Circumference
{
    public $radius;

    public function getSurface() : float
    {
        $area = M_PI * pow($this->radius,2);
        return $area;
    }

    public function getCircumference()
    {
        $Circumference = M_PI * 2 * $this->radius;
        return $Circumference;
    }

}




