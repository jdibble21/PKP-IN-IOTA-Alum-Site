<?php
include '../classes/BusinessLogic.php';

$bl = new BusinessLogic();

$pdf_dir = "C:/xampp/htdocs/PKP-IN-IOTA-Alum-Site/frontend/temp_pdf_upload/";
$img_dir = "C:/xampp/htdocs/PKP-IN-IOTA-Alum-Site/frontend/temp_img_upload/";
$pdf_file = $pdf_dir . basename($_FILES["pdfToUpload"]["name"]);
$img_file = $img_dir . basename($_FILES["imgToUpload"]["name"]);
$uploadOk = 1;
$pdfOk = 1;
$imgOk = 1;
$sizeOk = 1;
$titleOk = 1;
$pdfFileType = strtolower(pathinfo($pdf_file,PATHINFO_EXTENSION));
$imgFileType = strtolower(pathinfo($img_file,PATHINFO_EXTENSION));
$title = $_POST['titleInput'];
$pdf_filename = $_FILES["pdfToUpload"]["name"];
$img_filename = $_FILES["imgToUpload"]["name"];
$img_tmp = $_FILES["imgToUpload"]["tmp_name"];

if($title == ""){
    $uploadOk = 0;
    $titleOk = 0;
}
if($pdfFileType != "pdf"){
    $uploadOk = 0;
    $pdfOk = 0;
}
if($imgFileType == "png" or $imgFileType == "JPG" or $imgFileType == "jpg"){
    //continue
}else{
    $uploadOk = 0;
    $imgOk = 0;
}
if($_FILES["pdfToUpload"]["size"] > 500000) {
    $uploadOk = 0;
    $sizeOk = 0;
}
if($uploadOk == 0){
    if($imgOk == 0){
        echo "<p style='color: red;'>Cover Image file must be png or JPG</p>";
    }
    if($pdfOk == 0){
        echo "<p style='color: red;'>Newsletter file must be a PDF</p>";
    }
    if($sizeOk == 0){
        echo "<p style='color: red;'>File size is too large to upload</p>";
    }
    if($titleOk == 0){
        echo "<p style='color: red;'>Title cannot be blank</p>";
    }
    echo "<p style='color: red;'>Error with file upload, check contents and try again (Read upload instructions you dummy) </p>";
}else{
    if (move_uploaded_file($_FILES["pdfToUpload"]["tmp_name"], $pdf_file)) {
        //resize thumbnail image
        $image = imagecreatefromjpeg($img_tmp);
        $scaled_img = imagescale($image,900,600);
        imagejpeg($scaled_img,$img_file);
        echo "<p style='color: green;'>Newsletter uploaded!</p>";
        $bl->uploadNewsletterInfo($title,$pdf_filename,$img_filename);
        sleep(1); // to show js notification
        header("Location: /Pages/Admin/adminDashboard.php");
    }else{
        echo "<p style='color: red;'>Error uploading file (server side issue: Time to call Dibble and have him fix it)</p>";
    }
}
