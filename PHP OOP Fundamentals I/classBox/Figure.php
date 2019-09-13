<?php

class Figure
{
    protected $length;
    protected $width;
    protected $height;

    function __construct($length, $width, $height)
    {
        // Problem 01
        //$this->length = $length ;
        //$this->width = $width;
        //$this->height = $height;

        $this->setLength($length);
        $this->setWidth($width);
        $this->setHeight($height);
    }

    //Problem 01 - without setters

    private function setLength($length)
    {
        if ($length < 1) {
            throw new Exception("Length cannot be zero or negative.");
        } else {
            $this->length = $length;
        }
    }

    private function setWidth($width)
    {
        if ($width < 1) {
            throw new Exception("Width cannot be zero or negative.");
        } else {
            $this->width = $width;
        }
    }

    private function setHeight($height)
    {
        if ($height < 1) {
            throw new Exception("Height cannot be zero or negative.");
        } else {
            $this->height = $height;
        }
    }

    function surfaceArea()
    {
        $surfaceArea = 2 * ($this->length * $this->width) +
            2 * ($this->length * $this->height) +
            2 * ($this->width * $this->height);

        return $surfaceArea;

    }

    function lateralSurface()
    {

        $lateralSurfaceArea = 2 * ($this->length * $this->height) +
            2 * ($this->width * $this->height);


        return $lateralSurfaceArea;

    }

    function volume()
    {
        $volume = $this->length * $this->width * $this->height;

        return $volume;
    }

    function __toString()
    {
        $out_1 = $this->surfaceArea();
        $out_2 = $this->lateralSurface();
        $out_3 = $this->volume();

        return "Surface Area - " . number_format($out_1, 2, '.', '') . "\r\n" .
            "Lateral Surface Area - " . number_format($out_2, 2, '.', '') . "\r\n" .
            "Volume - " . number_format($out_3, 2, '.', '') . "\r\n";
    }
}