<?php
include "DataLayer.php";
include "UILayer.php";

class BusinessLogic
{
    private  $dl;
    private  $ui;
    public function __construct(){
        $this->dl = new DataLayer();
        $this->ui = new UILayer();
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
        $current_newsletters = $this->getCurrentNewsletterList();
        return "
            <div class='container'>
                <strong><p>Upload Instructions</p><p>1. Choose Newsletter file. File must be in PDF format<br>2. Choose a image cover for newsletter (Will be resized to 700x400). Pick an appropriate picture of brothers from the semester of the newsletter (this is what people will see before clicking on newsletter)<br> 3. Enter a title (Keep a consistent title format)<br>4. Click the upload button (Don't screw this up)</p></strong>
            </div>
            <div id='formDiv' class='centered'>
                <form id='newsUploadForm' class='form' method='post' onsubmit='return showUploadAlert();' action='/backend/php/handlers/uploadNewsletter.php' enctype='multipart/form-data'>
                    <div class=''>
                        <label for='pdfUpload'>Select Newsletter PDF file to upload</label>
                        <input type='file' class='form-control-file' name='pdfToUpload' id='pdfToUpload'>
                    </div>
                    <div class=''>
                        <label for='imageUpload'>Select Image file to upload</label>
                        <input type='file' class='form-control-file' name='imgToUpload' id='imgToUpload'>
                    </div>
                    <div>
                        <label for='titleInput'>Newsletter Title</label>
                        <div class='col-xs-4'>
                            <input type='text' name='titleInput' class='form-control' placeholder='e.g. Spring 2020'> 
                        </div>                  
                    </div>
                    <div class='m-3'>
                        <input name='submit' type='submit' id='newsUploadSubmit' value='Upload' class='btn btn-primary'/>
                    </div>
                </form>
            </div>
            <br>
            <br>
            <h4 style='text-align: center;color:#FFFFFF'>Uploaded Newsletters</h4>
            $current_newsletters
        ";
    }
    public function uploadNewsletterInfo($title,$filename,$image){
        $this->dl->insertNewsletter([$title,$filename,$image]);
    }
    public function deleteNewsletterInfo($newsID){
        $this->dl->deleteNewsletter($newsID);
    }
    public function getExportModule(){
        return $this->ui->displayExportDataModule();
    }
    public function getCurrentNewsletterList(){
        $newsletters = $this->getNewsletters();
        if($newsletters == null){
            return "<p class='m-5' style='text-align: center;color:#FFFFFF;'>No Newsletters Uploaded Currently</p>";
        }
        $list_items = "<div class='list-group m-4'>";
        foreach($newsletters as $nl){
            $title = $nl['newsletterTitle'];$pdf_link = $nl['newsletterLink'];$image = $nl['image'];$letter_ID = $nl['newsletterID'];
            $list_items .= $this->ui->generateAdminNewsletterEntry($letter_ID,$title,$pdf_link,$image);
        }
        $list_items .= "</div>";
        return $list_items;
    }
    public function getNewsletters(){
        return $this->dl->getNewsletters();
    }
    public function displayNewsletterPage(){
        $newsletters = $this->dl->getNewsletters();
        if($newsletters == null){
            echo "<br><br><div id='noNewsHeader' class='container mx-auto p-5'><h3  style='text-align: center'>It looks like no newsletters have been uploaded yet!</h3></div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
        }else{
            $this->ui->generateNewsletterContent($newsletters);
        }
    }
    public function displayHomePageNewsCards(){
        $newsletters = $this->dl->getNewsletters();
        $newsArray = array();
        foreach ($newsletters as $nl){
            $a = [$nl['newsletterTitle'],$nl['newsletterLink'],$nl['image']];
            array_push($newsArray,$a);
        }
        $this->ui->displayLatestUpdatesCards($newsArray);
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
    public function displayUserAccountModule(){
        return $this->ui->displayAdminUserAddModule();
    }

    public function getNewsFilenameByID($delete_id){
        return $this->dl->getNewsletterFilename($delete_id)['newsletterLink'];
    }
    public function getImageFilenameByID($delete_id){
        return $this->dl->getNewsletterFilename($delete_id)['image'];
    }
}