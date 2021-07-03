<?php
include '../classes/BusinessLogic.php';

$bl = new BusinessLogic();

$delete_id = $_POST['newsID'];
$filename = $bl->getNewsFilenameByID($delete_id);
$delete_target = "C:/xampp/htdocs/PKP-IN-IOTA-Alum-Site/frontend/temp_pdf_upload/".$filename;
unlink($delete_target);
$bl->deleteNewsletterInfo($delete_id);