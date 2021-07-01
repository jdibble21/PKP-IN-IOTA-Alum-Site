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
            $this->conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            throw new PDOException($e->getMessage(), (int)$e->getCode());
        }
    }

    //insert
    function insertDonation(array $donationData){
        $query = $this->conn->prepare("insert into donations (target, amount, date) values (?,?,?)");
        $query->execute($donationData);
    }
    function insertAdminUser(array $userData){
        $query = $this->conn->prepare("insert into users (username, password, fullName, email) values (?,?,?,?)");
        $query->execute($userData);
    }
    function insertNewsletter(array $newsInfo){
        $query = $this->conn->prepare("insert into newsletters (newsletterTitle, newsletterLink, image) values (?,?,?)");
        $query->execute($newsInfo);
    }
    //select
    function getUser(array $userData){
        $query = $this->conn->prepare("select * from users where username=?");
        $query->execute($userData);
        return $query->fetch();

    }
    function getUserByUserName($userName){
        $query = $this->conn->prepare("select * from users where username=?");
        $query->execute([$userName]);
        return $query->fetch();
    }
    function getDonationById($id){
        $query = $this->conn->prepare("select * from donations where target=?");
        $query->execute([$id]);
        return $query->fetch();
    }

    //update

    //delete


}