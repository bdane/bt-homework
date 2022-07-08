<?php

class DataBase
{
    protected static $host = "localhost";
    protected static $username = "root";
    protected static $password = "";
    protected static $dbname = "final_project";

    public static function connect()
    {

        $dsn = 'mysql:host=' . self::$host . '; dbname=' . self::$dbname;
        $pdo = new PDO($dsn, self::$username, self::$password);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        return $pdo;
    }
}
