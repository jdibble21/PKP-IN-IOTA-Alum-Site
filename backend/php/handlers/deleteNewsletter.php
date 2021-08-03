<?php
include '../classes/BusinessLogic.php';

$bl = new BusinessLogic();

$delete_id = $_POST['newsID'];
$pdf_filename = $bl->getNewsFilenameByID($delete_id);
$img_filename = $bl->getImageFilenameByID($delete_id);
$pdf_delete_target = "C:/xampp/htdocs/PKP-IN-IOTA-Alum-Site/frontend/temp_pdf_upload/".$pdf_filename;
$img_delete_target = "C:/xampp/htdocs/PKP-IN-IOTA-Alum-Site/frontend/temp_img_upload/".$img_filename;
unlink($pdf_delete_target);
unlink($img_delete_target);
$bl->deleteNewsletterInfo($delete_id);