<?php
include '../classes/BusinessLogic.php';
session_start();

$bl = new BusinessLogic();

$target_dir = "/frontend/temp_pdf_upload/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$title = $_POST['newsTitle'];
$filename = $_FILES["fileToUpload"]["name"];

if($imageFileType != "pdf"){
    $uploadOk = 0;
}
if($_FILES["fileToUpload"]["size"] > 500000) {
    $uploadOk = 0;
}
if($uploadOk == 0){
    echo "<p style='color: red;'>Error with file upload, check contents and try again</p>";
}else{
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "<p style='color: green;'>Newsletter uploaded!</p>";
        $bl->uploadNewsletterInfo($title,$filename);
    }else{
        echo "<p style='color: red;'>Error uploading file (server side)</p>";
    }
}