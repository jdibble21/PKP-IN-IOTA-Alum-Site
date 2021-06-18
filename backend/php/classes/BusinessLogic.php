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

    //admin dashboard functions

    public function getBasicDonationStats(){
        $totalAmountDonated = 0; //call a function to get all donations, total it up and return to this variable
        $numOfDonations = 0; //call a function to get amount of donation entries, return to this variable.
        $frequentDonor = "Jim John"; //call function to count most times single alum has donated, return to this variable
        $this->displayDonationStats($totalAmountDonated,$numOfDonations,$frequentDonor);
    }

    public function displayDonationStats($amount,$number,$frequent){
        echo "
            <div class='card'>
                <div class='card-body'>Total Amount Donated: $amount<br>Number of Donations: $number<br>Most Frequent Donor: $frequent</div>
            </div>
        ";
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