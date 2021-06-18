<?php
session_start();
include '../header.php';
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
        <div class="border-end bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading border-bottom bg-light">Indiana Iota Alumni Site Dashboard</div>
            <div class="list-group list-group-flush">
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Dashboard Home</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Newsletter Upload</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Donations</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Export Records</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">User Accounts</a>
            </div>
        </div>
<?php
include '../footer.php';
?>