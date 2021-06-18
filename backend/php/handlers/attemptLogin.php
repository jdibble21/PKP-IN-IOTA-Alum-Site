<?php
include '../classes/BusinessLogic.php';
session_start();

//POST user and password here and verify with db, redirect to dashboard if valid

$username = $_POST['username'];
$password = $_POST['password'];

$bl = new BusinessLogic();

$attemptLogin = $bl->login($username,$password);

if($attemptLogin == 1){
    $_SESSION['adminLogin'] = "G";
}else{
    $_SESSION['adminLogin'] = "F";
}
