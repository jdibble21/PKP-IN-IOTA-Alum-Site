<?php

class DataLayer
{
    private $conn;

    public function __construct(){
        $hostname = 'localhost';
        $port = 3306;
        $dbName = 'pkp_alum_data';
        $dbUsername = 'root';
        $dbPass = '';
        //change mysql to database type
        $dsn = "mysql:host=$hostname;dbname=$dbName;charset=utf8mb4";

        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ];
        try {
            $this->conn = new PDO($dsn, $dbUsername, $dbPass, $options);
        } catch (PDOException $e) {
            throw new PDOException($e->getMessage(), (int)$e->getCode());
        }
    }

    //insert

    //select
    function getUserId($userData){
        $query = $this->conn->prepare("select userID from users where username=? and password=?");
        $query->execute();
        return $query->fetchAll();
    }

    //update

    //delete


}