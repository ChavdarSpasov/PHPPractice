<?php

namespace Database;

class PDODatabase implements DatabaseInterface
{

    /**@var  \PDO*/
    private $db;

    public function __construct(\PDO $db)
    {
        $this->db = $db;
    }

    public function query(string $query): StatementInterface
    {
        $stmt = $this->db->prepare($query);

        return new PDOPreparedStatement($stmt);

    }

    public function getLastError(): array
    {
        return $this->db->errorInfo();
    }



}