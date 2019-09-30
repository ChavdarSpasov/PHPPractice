<?php

class Robot
{
    private $model;
    private $id;

    public function __construct($model, $id)
    {
        $this->model = $model;
        $this->setId($id);
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