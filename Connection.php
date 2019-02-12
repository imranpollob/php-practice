<?php

class Connection
{
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "php-practice";

    public static function make()
    {
        try {
            return new PDO("mysql:host=localhost;dbname=php-practice", "root", "");
        } catch (PDOException $e) {
            echo " Error : " . $e->getMessage();
        }
    }
}