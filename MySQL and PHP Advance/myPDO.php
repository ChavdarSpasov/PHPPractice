<?php

class myPDO extends PDO
{

    public function setErrorSilence()
    {
        $this->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_SILENT);
    }

    public function setErrorExeption()
    {
        $this->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }

    public function __construct()
    {
        parent::__construct("mysql:host=localhost;dbname=php-course",'root','');
    }
    
}