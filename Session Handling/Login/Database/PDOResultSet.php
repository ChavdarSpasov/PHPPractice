<?php 

namespace Database;

class PDOResultSet implements ResultSetInterface
{
    /**@var \PDOStatement */
    private $pdoStatement;

    public function __construct(\PDOStatement $pdoStatement)
    {
        $this->pdoStatement = $pdoStatement;
    }

    public function fetch( string $class): \Generator
    {
        while($row = $this->pdoStatement->fetchObject($class)){
            yield $row;
        }
    }

}