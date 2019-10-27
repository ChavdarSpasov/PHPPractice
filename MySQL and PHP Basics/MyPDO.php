<?php

class MyPDO extends PDO{
    public function setErrorSilent()
    {
        $this->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_SILENT);
    } 

    public function setErrorExeption()
    {
        $this->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }
}