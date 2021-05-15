<?php
include 'header.php';
?>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="AlumniHome.php">Start Bootstrap</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="services.html">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownPortfolio" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Portfolio</a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                            <a class="dropdown-item" href="portfolio-1-col.html">1 Column Portfolio</a>
                            <a class="dropdown-item" href="portfolio-2-col.html">2 Column Portfolio</a>
                            <a class="dropdown-item" href="portfolio-3-col.html">3 Column Portfolio</a>
                            <a class="dropdown-item" href="portfolio-4-col.html">4 Column Portfolio</a>
                            <a class="dropdown-item" href="portfolio-item.html">Single Portfolio Item</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownBlog" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blog</a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                            <a class="dropdown-item" href="blog-home-1.html">Blog Home 1</a>
                            <a class="dropdown-item" href="blog-home-2.html">Blog Home 2</a>
                            <a class="dropdown-item" href="blog-post.html">Blog Post</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownPages" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Other Pages</a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPages">
                            <a class="dropdown-item" href="full-width.html">Full Width Page</a>
                            <a class="dropdown-item" href="sidebar.html">Sidebar Page</a>
                            <a class="dropdown-item" href="faq.html">FAQ</a>
                            <a class="dropdown-item" href="404.html">404</a>
                            <a class="dropdown-item" href="pricing.html">Pricing Table</a>
                        </div>
                    </li>
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
                    <img class="d-block w-100" src="https://via.placeholder.com/1900x600" alt="..." />
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
            <h1 class="mb-4">Welcome to Modern Business</h1>
            <!-- Marketing Icons Section-->
            <div class="row">
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <div class="card h-100">
                        <h4 class="card-header">Card Title</h4>
                        <div class="card-body"><p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p></div>
                        <div class="card-footer"><a class="btn btn-primary" href="#!">Learn More</a></div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <div class="card h-100">
                        <h4 class="card-header">Card Title</h4>
                        <div class="card-body"><p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis ipsam eos, nam perspiciatis natus commodi similique totam consectetur praesentium molestiae atque exercitationem ut consequuntur, sed eveniet, magni nostrum sint fuga.</p></div>
                        <div class="card-footer"><a class="btn btn-primary" href="#!">Learn More</a></div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card h-100">
                        <h4 class="card-header">Card Title</h4>
                        <div class="card-body"><p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p></div>
                        <div class="card-footer"><a class="btn btn-primary" href="#!">Learn More</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr class="my-0" />
    <!-- Portfolio Section-->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="mb-4">Portfolio Heading</h2>
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
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="card h-100">
                        <a href="#!"><img class="card-img-top" src="https://via.placeholder.com/700x400" alt="..." /></a>
                        <div class="card-body">
                            <h4 class="card-title"><a href="#!">Project Four</a></h4>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="card h-100">
                        <a href="#!"><img class="card-img-top" src="https://via.placeholder.com/700x400" alt="..." /></a>
                        <div class="card-body">
                            <h4 class="card-title"><a href="#!">Project Five</a></h4>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="card h-100">
                        <a href="#!"><img class="card-img-top" src="https://via.placeholder.com/700x400" alt="..." /></a>
                        <div class="card-body">
                            <h4 class="card-title"><a href="#!">Project Six</a></h4>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque earum nostrum suscipit ducimus nihil provident, perferendis rem illo, voluptate atque, sit eius in voluptates, nemo repellat fugiat excepturi! Nemo, esse.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr class="my-0" />
    <!-- Features Section-->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="mb-4">Modern Business Features</h2>
                    <p>The Modern Business template by Start Bootstrap includes:</p>
                    <ul>
                        <li><strong>Bootstrap 4.6.0</strong></li>
                        <li>jQuery 3.5.1</li>
                        <li>Font Awesome 5.15.3</li>
                        <li>Working PHP contact form with validation</li>
                        <li>Unstyled page elements for easy customization</li>
                    </ul>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis quia dolorum ducimus unde.</p>
                </div>
                <div class="col-lg-6"><img class="img-fluid rounded" src="https://via.placeholder.com/700x450" alt="..." /></div>
            </div>
        </div>
    </section>
    <hr class="my-0" />
    <!-- Call to Action-->
    <aside class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-8"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p></div>
                <div class="col-md-4"><a class="btn btn-lg btn-secondary btn-block" href="#!">Call to Action</a></div>
            </div>
        </div>
    </aside>

<?php
include 'footer.php';
?>