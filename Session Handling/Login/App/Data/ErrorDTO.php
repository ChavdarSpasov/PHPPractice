<?php

namespace App\Data;

class ErrorDTO
{
    private $errorInfo;

    public function __construct($errorInfo)
    {
        $this->errorInfo = $errorInfo;
        
    }
    

    /**
     * Get the value of errorInfo
     */ 
    public function getErrorInfo()
    {
        return $this->errorInfo;
    }

}