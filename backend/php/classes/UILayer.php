<?php

class UILayer
{
    public function displayNewsLetters($newsletters){
        foreach ($newsletters as $nl){
            $this->displayNewsLetterThumbnail($nl['title'],$nl['pdfLink'],$nl['image']);
        }
    }
    public function displayNewsLetterThumbnail($title,$pdfLink,$imageLink){
        echo "
            <div class='card'>
                <img class='card-img-top' src='/frontend/assets/img/testIMG.jpg' alt='newsletterCoverImage'>
                <div class='card-title'>$title</div>
            </div>
        ";
    }
    public function generateAdminNewsletterEntry($id,$title,$pdf,$image){
        return "
            <li class='list-group-item'>Title: $title<br>PDF: $pdf<br>Image: $image<button class='btn btn-warning m-2' style='justify-content: right;' onclick='deleteNewsletter($id,\"$title\");'>Remove</button></li>
        ";
    }
    public function displayExportDataModule(){
        return "
        <div class='container m-3' style='color: #FFFFFF'>
            <div class='custom-control custom-radio'>
                <input type='radio' id='customRadio1' name='customRadio' class='custom-control-input'>
                <label class='custom-control-label' for='customRadio1'>Export Alumni Data (Names and Contact)</label>
            </div>
            <div class='custom-control custom-radio'>
                <input type='radio' id='customRadio2' name='customRadio' class='custom-control-input'>
                <label class='custom-control-label' for='customRadio2'>Export Financial Data (Donations and Dates)</label>
            </div>
            <button class='btn btn-primary m-2'>Download</button>
        </div>
        ";
    }
    public function displayLatestUpdatesCards(array $updates){
        //2D array, each subarray title, pdf link then image link
        $cardArray = array();
        for($i=0; $i< count($updates);$i++){
            $title = $updates[$i][0];
            $pdf_link = "/frontend/temp_pdf_upload/". $updates[$i][1];
            $image_link = "/frontend/temp_img_upload/".$updates[$i][2];
            array_push($cardArray," <div class='col-lg-4 col-sm-6 mb-4'>
                    <div class='card h-100' id='newsOverride'>
                        <a target='_blank' href=$pdf_link><img class='card-img-top' src=$image_link alt='...' /></a>
                        <div class='card-body'>
                            <h4 class='card-title' style='text-align: center'><a href=$pdf_link>$title</a></h4>
                        </div>
                    </div>
                </div>");
        }
        // If we have less than 3 newsletters, fill in cards with blank data
        if(count($cardArray) < 3){
            $cardsToFill = 3 - count($cardArray);
            for($i = 0; $i < $cardsToFill; $i++){
                array_push($cardArray," <div class='col-lg-4 col-sm-6 mb-4'>
                    <div class='card h-100' id='newsOverride'>
                        <a class='mx-auto' href='#!'><img class='card-img-top' style='max-width:100%; text-align: center;' src='/frontend/assets/img/homeCardDefault.JPG' alt='...' /></a>
                        <div class='card-body'>
                            <h4 class='card-title' style='text-align: center'><a href='#!'>Coming Soon</a></h4>
                        </div>
                    </div>
                </div>");
            }
        }
        $this->showUpdateCards($cardArray);
    }

    private function showUpdateCards($cards){
        for($i=0; $i < count($cards); $i++){
            echo $cards[$i];
        }
    }
    public function generateNewsletterContent($newsletters){
        echo "<div class=\"container\" style=\"text-emphasis: ;: center;\">";
        foreach ($newsletters as $nl){
                $pdf_link = "/frontend/temp_pdf_upload/".$nl['newsletterLink'];
                $image_link = "/frontend/temp_img_upload/".$nl['image'];
                $this->displayNewsletterCard($nl['newsletterTitle'],$pdf_link,$image_link);
        }
        echo "</div>";
    }
    public function displayNewsletterCard($title,$pdfLink,$imgLink){
        echo "
    <a href='$pdfLink' target='_blank'>
        <div class='row' style='width: 100%;'>
            <div class='card w-75 h-75 bg-dark newsCard' style='margin: 0 auto'>
                <img class='img-thumbnail' src='$imgLink' alt='newsletter thumbnail'>
                <div class='card-img-overlay'>
                    <h5 class='card-title' style='font-size: 50px;'>$title</h5>
                </div>
            </div>
        </div>
    </a>
    <br>
        ";
    }

    public function displayAdminUserAddModule(){
        return "
            <div class='container' style='color: #FFFFFF;'>
                <h4>Add a new User</h4>
                <form>
                    <div class='form-group'>
                        <label for='userInput'>Username</label>
                        <input type='text' class='form-control' id='userInput' placeholder=''>
                        <label for='passwordInput'>Password</label>
                        <input type='text' class='form-control'>
                    </div>
                    <input type='button' class='btn btn-primary' value='Create New User'>
                </form>
                <h4>Current Users:</h4>
            </div>
        ";
    }
}