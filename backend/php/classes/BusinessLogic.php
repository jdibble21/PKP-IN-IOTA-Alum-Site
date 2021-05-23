<?php
include "DataLayer.php";

class BusinessLogic
{
    private $dl;

    public function __construct(){
        $dl = new DataLayer();
    }

    public function login($username,$password){
        
    }
}