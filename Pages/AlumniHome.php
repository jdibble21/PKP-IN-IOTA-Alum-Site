<?php
include 'header.php';
?>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="AlumniHome.php">Alumni Home</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="services.html">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Page header-->
    <header>
        <div class="carousel slide" id="carouselExampleIndicators" data-ride="carousel">
            <ol class="carousel-indicators">
                <li class="active" data-target="#carouselExampleIndicators" data-slide-to="0"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="../frontend/assets/img/recruitment2017.jpg" alt="..." />
                    <div class="carousel-caption d-none d-md-block">
                        <h3>First Slide</h3>
                        <p>This is a description for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="https://via.placeholder.com/1900x600" alt="..." />
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Second Slide</h3>
                        <p>This is a description for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="https://via.placeholder.com/1900x600" alt="..." />
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Third Slide</h3>
                        <p>This is a description for the third slide.</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </header>
    <!-- Page Content-->
    <section class="py-5">
        <div class="container">
            <h1 class="mb-4">Welcome Indiana Iota Alumni!</h1>
            <!-- Marketing Icons Section-->
            <div class="row">
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <div class="card h-100">
                        <h4 class="card-header">Catch Up On the Latest News!</h4>
                        <div class="card-body"><p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p></div>
                        <div class="card-footer"><a class="btn btn-primary" href="#!">View News</a></div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <div class="card h-100">
                        <h4 class="card-header">Donate Directly to the Chapter!</h4>
                        <div class="card-body"><p class="card-text">Click the link below to donate any amount you wish! Funds go straight to your brothers!</p></div>
                        <div class="card-footer"><a class="btn btn-primary" href="#!">Donate</a></div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card h-100">
                        <h4 class="card-header">Get in touch with the Current Leadership!</h4>
                        <div class="card-body"><p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p></div>
                        <div class="card-footer"><a class="btn btn-primary" href="#!">Contact Us</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr class="my-0" />
    <!-- Portfolio Section-->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="mb-4">Latest Updates</h2>
            <div class="row">
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="card h-100">
                        <a href="#!"><img class="card-img-top" src="https://via.placeholder.com/700x400" alt="..." /></a>
                        <div class="card-body">
                            <h4 class="card-title"><a href="#!">Project One</a></h4>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur eum quasi sapiente nesciunt? Voluptatibus sit, repellat sequi itaque deserunt, dolores in, nesciunt, illum tempora ex quae? Nihil, dolorem!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="card h-100">
                        <a href="#!"><img class="card-img-top" src="https://via.placeholder.com/700x400" alt="..." /></a>
                        <div class="card-body">
                            <h4 class="card-title"><a href="#!">Project Two</a></h4>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="card h-100">
                        <a href="#!"><img class="card-img-top" src="https://via.placeholder.com/700x400" alt="..." /></a>
                        <div class="card-body">
                            <h4 class="card-title"><a href="#!">Project Three</a></h4>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos quisquam, error quod sed cumque, odio distinctio velit nostrum temporibus necessitatibus et facere atque iure perspiciatis mollitia recusandae vero vel quam!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr class="my-0" />
    <hr class="my-0" />
    <!-- Call to Action-->
    <aside class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-8"><p>To keep in touch with the chapter and never miss a thing, follow the National Fraternity on Facebook!</p></div>
                <div class="col-md-4"><a class="btn btn-lg btn-secondary btn-block" href="https://www.facebook.com/PhiKappaPsi/" target="_blank">Join the Facebook Group!</a></div>
            </div>
        </div>
    </aside>

<?php
include 'footer.php';
?>