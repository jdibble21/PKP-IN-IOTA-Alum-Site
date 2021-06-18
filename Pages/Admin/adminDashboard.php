<?php
session_start();
include '../header.php';
$userID = "None";

$userID = $_SESSION['userID'];

if($userID == "None"){
    //redirect if not logged in
    header("Location: /Pages/Error/Unauthorized.html");
}


?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <img class="navbar-brand" src="../../frontend/assets/img/phipsilogo.png">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Alumni Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="News/newsletterView.php">News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Donate/MakeDonation.php">Donate</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://ballstate.phikappapsi.com/leaders">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" onclick="showLoginForm()">Admin</a>
                    <div id="loginForm" style="display: none;">
                        <form>

                            <input type="button" value="Logout" onclick="">
                        </form>
                    </div>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
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