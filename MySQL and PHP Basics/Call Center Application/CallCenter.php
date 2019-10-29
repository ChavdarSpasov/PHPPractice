<?php

class CallCenter
{
    private $dbi = false;

    public function connectDB()
    {
        $db = new Database();
        $this->dbi = $db->connection();

    }

    public function __construct()
    {
        $this->connectDB();
    }

    private function getCountryInfo($str)
    {
        $result = $this->dbi->query("
        SELECT country_name, capital 
        FROM countries
        WHERE country_name = \"$str\"
           OR country_code = \"$str\"
           OR iso_code = \"$str\"
        LIMIT 0,1");

        if (is_object($result)) {
            return $result;
        } else {
            return false;
        }

    }

    public function main()
    {   

        do {
            $inputStr = trim(fgets(STDIN));

            $res = $this->getCountryInfo($inputStr);
            if ($res != false){
                foreach ($res as $i => $iv){
                    print "Country:". $iv['country_name']."\n\r";
                    print "Capital:". $iv['capital']."\n\r";
                }
            }

        } while ($inputStr != "Bye");
    }
}