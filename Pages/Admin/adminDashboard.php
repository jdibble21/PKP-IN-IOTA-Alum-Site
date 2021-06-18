<?php
session_start();
error_reporting(0);
include '../header.php';
include '../../backend/php/classes/BusinessLogic.php';

$bl = new BusinessLogic();
$userID = "None";
if(isset($_SESSION['userID'])){
    $userID = $_SESSION['userID'];
}

if($userID == "None"){
    //redirect if not logged in
    header("Location: /Pages/Error/Unauthorized.html");
}
include '../navbar.php';
?>
        <div class="container m-0">
            <div class="row">
                <div class="col col-lg-3">
                    <div class="border-end bg-white" id="sidebar-wrapper">
                        <div class="sidebar-heading border-bottom bg-light">IN Iota Alumni Site Dashboard</div>
                        <div class="list-group list-group-flush">
                            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Dashboard Home</a>
                            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Newsletter Upload</a>
                            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Donation Log</a>
                            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Export Records</a>
                            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">User Accounts</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="container">
                        <?php
                            //Will be refactor this container later, will be dynamic with content pertaining to menu item chosen
                            $bl->getBasicDonationStats();
                        ?>
                    </div>
                </div>
            </div>
        </div>

<?php
include '../footer.php';
?>