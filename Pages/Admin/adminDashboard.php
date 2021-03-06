<?php
session_start();
error_reporting(0);
include '../header.php';
include '../../backend/php/classes/BusinessLogic.php';
$loggedIn = false;
$bl = new BusinessLogic();
$userID = "None";
if(isset($_SESSION['userID'])){
    $userID = $_SESSION['userID'];
    $loggedIn = true;
}

if($userID == "None"){
    //redirect if not logged in
    header("Location: /Pages/Error/Unauthorized.html");
}
include '../navbar.php';
?>
    <script type="text/javascript">
        $(document).on('ready',function () {
            //On load, by default
            $("#rendContainer").replaceWith("<div id=\"rendContainer\" class=\"container\"></div>");
            getAdminDashHome();

            //After menu buttons are pressed
            $("#dashHome").on('click',function (){
                $("#rendContainer").replaceWith("<div id=\"rendContainer\" class=\"container\"></div>");
                getAdminDashHome();
            });
            $("#newsUpload").on('click',function (){
                $("#rendContainer").replaceWith("<div id=\"rendContainer\" class=\"container center-block\"\"></div>");
                getAdminDashUpload();
            });
            $("#donLog").on('click',function (){
                $("#rendContainer").replaceWith("<div id=\"rendContainer\" class=\"container\"><h3 class='mt-3' style='text-align: center; color: #FFFFFF'>Donation Log (WIP)</h3></div>");
            });
            $("#expRecords").on('click',function (){
                $("#rendContainer").replaceWith("<div id=\"rendContainer\" class=\"container\"></div>");
                getExportDataModule();
            });
            $("#uAccounts").on('click',function (){
                $("#rendContainer").replaceWith("<div id=\"rendContainer\" class=\"container\"></div>");
                getUserAccountModule();
            });
        });
    </script>
        <div class="container m-0">
            <div class="row">
                <div class="col col-lg-3">
                    <div class="border-end bg-white" id="sidebar-wrapper">
                        <div class="sidebar-heading border-bottom bg-light">IN Iota Alumni Site Dashboard</div>
                        <div class="list-group list-group-flush" id="menuItems">
                            <a id="dashHome" class="list-group-item list-group-item-action list-group-item-light p-3">Dashboard Home</a>
                            <a id="newsUpload" class="list-group-item list-group-item-action list-group-item-light p-3">Newsletter Upload</a>
                            <a id="donLog" class="list-group-item list-group-item-action list-group-item-light p-3" >Donation Log</a>
                            <a id="expRecords" class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Export Records</a>

                        </div>
                    </div>
                </div>
                <div class="col center-block m-3" id="dashContent">
                    <div id="rendContainer" class="container m-3"></div>
                </div>
            </div>
        </div>

<?php
include '../footer.php';
// For future implementation
//<a id="uAccounts" class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">User Accounts</a>
?>