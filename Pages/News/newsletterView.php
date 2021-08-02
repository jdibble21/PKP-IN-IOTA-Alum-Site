<?php
include '../header.php';
include '../../backend/php/classes/BusinessLogic.php';
include '../navbar.php';

$bl = new BusinessLogic();
?>
<h2 class="mt-4" style="text-align: center;">Indiana Iota Alumni Newsletters</h2>
<br>
<?php
    $bl->displayNewsletterPage();
?>
    <br><br><br>
    <br><br><br>
<?php
include '../footer.php';
?>
