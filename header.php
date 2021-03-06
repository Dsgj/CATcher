<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Leo Ozolins-Carlson & Jesper Gladh">
    <title>CATcher - Your local cat locator</title>

    <!-- Bootstrap Core CSS
    <link href="css/bootstrap.min.css" rel="stylesheet">-->

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"
          integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ=="
          crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css"
          integrity="sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX" crossorigin="anonymous">

    <!-- Modern Business custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom CSS
    <link href="css/custom.css" rel="stylesheet">
    -->

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <script src="cookie.js"></script>


    <![endif]-->

</head>
<body>
<script src="js/facebook.js"></script>
<div id="fb-root"></div>
<div id="status"></div>
<header>
<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">
                <i class="fa fa-home fa-2x"></i>
                <span title="Home"></span>
            </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">

                <li>
                    <a href="CatMap.php">
                        <span title="Cats">
                           <i class="fa fa-2x fa-paw"></i>
                        </span>
                    </a>
                </li>

                <li>
                    <a href="catreg.php">
                        <span title="Register">
                           <i class="fa fa-2x fa-pencil"></i>
                        </span>
                    </a>
                </li>

                <li>
                    <a href="about.php">
                        <span title="About">
                            <i class="fa fa-2x fa-info"></i>
                        </span>
                    </a>
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown">
                        <span title="Blog">
                           <i class="fa fa-2x fa-circle-o-notch fa-spin"></i>
                        </span>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="fb-login-button" onlogin="checkLoginState()" data-scope="public_profile,email" data-max-rows="0" data-size="medium" data-show-faces="false"
                                 data-auto-logout-link="true">

                            </div>
                        </li>
                        <li>
                            <a href="faq.php">
                                FAQ
                            </a>
                        </li>
                        <li>
                            <a href="http://www.piedpiper.com/">
                                <i class="fa fa-pied-piper fa-2x"></i>
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
</header>
