<?php
    $loggedIn = false;
    if(isset($_SESSION['userID'])){
        if($_SESSION['userID'] != "None" or $_SESSION['userID'] != ""){
            $loggedIn = true;
        }
    }
?>

<nav class="navbar navbar-expand-lg navbar-light py-0">
    <img class="navbar-brand" src="/frontend/assets/img/phipsilogo.png">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/Pages/AlumniHome.php">Alumni Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/Pages/News/newsletterView.php">News</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/Pages/Donate/MakeDonation.php">Donate</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://ballstate.phikappapsi.com/leaders">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" onclick="showLoginForm()">Admin</a>
                <?php
                
                if($loggedIn){

                    echo " <div id='loginForm' style='display: none'>
                              <form>
                                    <input type='button' value='Admin Dashboard' onclick='goToAdminDash();'>
                                    <input type='button' value='Logout' onclick='logoutUser();'>
                              </form>
                           </div>
                            
                    ";
                }else{
                    echo "<div id='loginForm' style='display: none;'>
                             <form>
                                <label for='username'>Username:</label>
                                <input id='username' name='username' type='text' size='10'>
                                <label for='password'>Password:</label>
                                <input id='password' name='password' type='password' size='10'>
                                <input type='button' value='Login' onclick='loginUser(document.getElementById(\"username\").value,document.getElementById(\"password\").value)'>
                            </form>
                         </div>";
                }
                ?>

            </li>
        </ul>
    </div>
</nav>
