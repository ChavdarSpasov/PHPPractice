<?php
class Database extends PDO
{
private $dbname = 'geography';
private $host = 'localhost';
private $user = 'root';
private $password = ' ';
private $bd = false;

public function __construct()
{
    parent::__construct("mysql:host=$this->host;dbname=$this->dbname",
    $this->user,
    $this->password);
}

    public function setErrorException()
{
    $this->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}

public function connection()
{
    $this->setErrorException();
    return ($this);
}


}