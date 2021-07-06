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

    public function generateNewsletterContent($newsletters){
        echo "<div class=\"container\" style=\"justify-content: center;\">";
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
        <div class='row'>
            <div class='card w-75 h-75 bg-dark text-white'>
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
}