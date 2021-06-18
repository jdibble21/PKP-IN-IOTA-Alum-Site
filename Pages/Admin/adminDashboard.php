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
        <div class="container justify-content-center">
            <div class="row">
                <div class="span6" style="float: none; margin: 0 auto;">
                    <h1>Admin Dashboard</h1>
                </div>
            </div>
        </div>
<?php
include '../footer.php';
?>