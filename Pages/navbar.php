<nav class="navbar navbar-expand-lg navbar-light bg-light">
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
                <div id="loginForm" style="display: none;">
                    <form>
                        <label for="username">Username:</label>
                        <input id="username" name="username" type="text" size="10">
                        <label for="password">Password:</label>
                        <input id="password" name="password" type="password" size="10">
                        <input type="button" value="Login" onclick="loginUser(document.getElementById('username').value,document.getElementById('password').value)">
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
