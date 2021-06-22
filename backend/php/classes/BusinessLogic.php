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
        $totalAmountDonated = 3556.23; //call a function to get all donations, total it up and return to this variable
        $numOfDonations = 23; //call a function to get amount of donation entries, return to this variable.
        $frequentDonor = "Jim John"; //call function to count most times single alum has donated, return to this variable
        return $this->displayDonationStats($totalAmountDonated,$numOfDonations,$frequentDonor);
    }

    public function displayDonationStats($amount,$number,$frequent){
        return "
            <div class='card'>
                <div class='card-title m-4'><strong>Overall Donation Info</strong></div>
                <div class='card-body m-0'>Total Amount Donated: $$amount<br>Number of Donations: $number<br>Most Frequent Donor: $frequent</div>
            </div>
        ";
    }
    public function displayNewsletterUploadModule(){
        return "
                <form action=\"/file-upload\" class=\"dropzone\" id=\"my-awesome-dropzone\"></form>
                <form>
                    <div class='form-group'>
                        <label for='titleInput'>Newsletter Title</label>
                        <input type='text' class='form-control' placeholder='e.g. Spring 2020'>              
                    </div>
                    <div class='form-group'>
                        <button type='button' class='btn btn-primary'>Upload</button>
                    </div>
                </form>
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