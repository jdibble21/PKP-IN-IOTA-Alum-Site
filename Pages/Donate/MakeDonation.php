<?php
include '../header.php';
session_start();
include '../navbar.php';
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <h4 style="text-align: center;">Donate to your favorite chapter</h4>
            <script src="https://donorbox.org/widget.js" paypalExpress="false"></script><iframe src="https://donorbox.org/embed/test-donate-6" name="donorbox" allowpaymentrequest="" seamless="seamless" frameborder="0" scrolling="no" height="900px" width="100%" style="max-width: 500px; min-width: 250px; max-height:none!important"></iframe>
        </div>
    </div>
</div>
<?php
include '../footer.php';
?>
