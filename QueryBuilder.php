<?php

class QueryBuilder
{
    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function all($table)
    {
        $query = $this->pdo->prepare("SELECT * FROM tasks");
        $query->execute();
        return $query->fetchAll();
    }
}