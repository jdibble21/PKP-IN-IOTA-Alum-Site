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

}