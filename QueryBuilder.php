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
        $query = $this->pdo->prepare("SELECT * FROM $table");
        $query->execute();
        return $query->fetchAll();
    }
}