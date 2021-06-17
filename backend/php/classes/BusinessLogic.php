<?php
include "DataLayer.php";

class BusinessLogic
{
    private $dl;

    public function __construct(){
        $this->dl = new DataLayer();
    }

    public function login($username,$password){
        $password_hash = password_hash($password,PASSWORD_DEFAULT);
        $userID = $this->dl->getUserId([$username,$password_hash]);
        if($userID['userID'] != ""){
            $_SESSION['userID'] = $userID['userID'];
            return True;
        }else{
            return False;
        }
    }




}