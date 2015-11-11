<?php
include 'header.php';
?>
<!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Start Bootstrap</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="html/about.php">About</a>
                    </li>
                    <li>
                        <a href="services.php">Services</a>
                    </li>
                    <li>
                        <a href="html/contact.php">Contact</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Portfolio <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="portfolio-1-col.php">1 Column Portfolio</a>
                            </li>
                            <li>
                                <a href="portfolio-2-col.php">2 Column Portfolio</a>
                            </li>
                            <li>
                                <a href="portfolio-3-col.php">3 Column Portfolio</a>
                            </li>
                            <li>
                                <a href="portfolio-4-col.php">4 Column Portfolio</a>
                            </li>
                            <li>
                                <a href="portfolio-item.php">Single Portfolio Item</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="html/blog-home-1.php">Blog Home 1</a>
                            </li>
                            <li>
                                <a href="html/blog-home-2.php">Blog Home 2</a>
                            </li>
                            <li>
                                <a href="html/blog-post.php">Blog Post</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown active">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Other Pages <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li class="active">
                                <a href="full-width.php">Full Width Page</a>
                            </li>
                            <li>
                                <a href="sidebar.php">Sidebar Page</a>
                            </li>
                            <li>
                                <a href="html/faq.php">FAQ</a>
                            </li>
                            <li>
                                <a href="html/404.php">404</a>
                            </li>
                            <li>
                                <a href="pricing.php">Pricing Table</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Full Width Page
                    <small>Subheading</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li class="active">Full Width Page</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <div class="col-lg-12">
                <p>Most of Start Bootstrap's unstyled templates can be directly integrated into the Modern Business template. You can view all of our unstyled templates on our website at <a href="http://startbootstrap.com/template-categories/unstyled">http://startbootstrap.com/template-categories/unstyled</a>.</p>
            </div>
        </div>
        <!-- /.row -->

        <hr>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
        <?php
        include 'footer.php';
        ?>