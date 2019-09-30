<?php

class Smartphone implements iBrows, iCall
{
    public $numbers;
    public $urls;

    public function __construct($numbers,$urls)
    {
        $this->numbers = $numbers;
        $this->urls = $urls;
    }

    public function calling()
    {
        foreach ($this->numbers as $key => $value) {
            if(is_numeric($value)){
                print "Calling... $value". PHP_EOL;
            }else{
                print 'Invalide number!' . PHP_EOL;
            }
            
        }
    }

    public function browsing()
    {
        foreach ($this->urls as $key => $value) {
            if (filter_var($value,FILTER_VALIDATE_URL)) {
                print "Browsing: $value". PHP_EOL;
            } else {
                print 'Invalide URL!'. PHP_EOL;                
            }
            
            
        }
    }

}
