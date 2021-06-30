<?php

class UILayer
{
    public function displayNewsLetters($newsletters){

        foreach ($newsletters as $nl){

        }
    }
    public function displayNewsLetterThumbnail($title,$pdfLink,$imageLink){
        echo "
            <div class='card'>
                <img class='card-img-top' src=''>
                <div class='card-title'>$title</div>
                <div class='card-image'
            </div>
        ";
    }

}