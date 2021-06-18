<?php
include "DataLayer.php";
session_start();
class BusinessLogic
{
    private $dl;

    public function __construct(){
        $this->dl = new DataLayer();
    }

    public function login($username,$password){
        $user = $this->dl->getUser([$username]);
        $stored_password = $user['password'];
        if(password_verify($password,$stored_password) and $user != False){
            $_SESSION['userID'] = $user['userID'];
            return True;
            //User is good, login
        }else{
            return False;
            //passwords do not match or username does not exist, don't login
        }
    }

    public function getUserByUsername($username){
        return $this->dl->getUserByUserName($username);
    }
    public function recordDonation($alumID,$amount,$date){
        $this->dl->insertDonation([$alumID,$amount,$date]);
    }
    public function getDonationByID($Id){
        return $this->dl->getDonationById($Id);
    }
    public function insertAdminUser($username,$password,$fullName,$email){
        $hash_password = password_hash($password, PASSWORD_DEFAULT);
        $this->dl->insertAdminUser([$username,$hash_password,$fullName,$email]);
    }




}