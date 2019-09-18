<?php

class Rectangle implements Area
{
    public $width;
    public $height;

    public function __construct(float $width, float $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function getSurface(): float
    {
        $area = $this->height * $this->width;
        return $area;
    }
}