<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E2-Exchange</title>

    <!-- Bootstrap Core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="assets/css/grayscale.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a  href="faq.php">FAQ</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#signin">signin</a>
                    </li>
                    <li>
                        <a  href="logout.php">logout</a>
                    </li>
                    <?php if ( $_SESSION['email'] == 'root') {?>
                           <li>
                                <a href="admin.php">admin </a>
                           </li>
                          
                    <?php } ?>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading">Exchange</h1>
                        <p class="intro-text">A free<br>Created by Exchange .</p>
                        <a href="#signin" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Sign in Section -->
    <section id="signin" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>About Exchange</h2>
                <h2>Start for free</h2>
                <h3> easy customization.</h3>
            </div>
        </div>

        <div class="row">
            <form action="login.php" method="post">
                <div class="col-md-3">
                    <div class="form-group">
                        <input type="text" placeholder="username@example.com" name="email" class="form-control">
                    </div>

                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <input type="password" placeholder="password" name="password" class="form-control">
                        <span>forget password</span>
                    </div>

                </div>
                <div class="col-md-3">
                    <div class="form-group text-center">
                        <input type="submit"  class="btn aut btn-info btn-block" value="Login">
                    </div>

                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <input type="button" class="btn btn-block btn-border"
                               data-toggle="modal" data-target="#myModal" value="Registration">
                    </div>
                </div>
            </form>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Contact Us</h2>
                <p>Feel free to email us to provide some feedback on our services, give us suggestions, or to just say hello!</p>
                <p><a href="mailto:exchange@exchange.com">contact</a>
                </p>
                <ul class="list-inline banner-social-buttons">
                    <li>
                        <a href="https://twitter.com/" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                    </li>
                    <li>
                        <a href="https://facebook.com/" class="btn btn-default btn-lg"><i class="fa fa-facebook fa-fw"></i> <span class="network-name">facebook</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Registration</h4>
                </div>
                <div class="modal-body">

                    <form method="post" class="row" action="registration">
                        <div class="form-group col-md-12">

                            <input type="text" class="form-control" placeholder="Username" required="" min="4"
                                   name="login"/>
                        </div>
                        <div class="form-group col-md-12">

                            <input type="email" class="form-control" placeholder="E-mail" required="" name="email"/>
                        </div>

                        <div class="form-group col-md-6">

                            <input type="password" class="form-control" placeholder="Password" required=""
                                   min="4"
                                   name="password"/>
                        </div>
                        <div class="form-group col-md-6">

                            <input type="password" class="form-control" placeholder="Repeat password"
                                   min="4"
                                   name="password2"/>
                        </div>
                        <div class="form-group col-md-12">

                            <input type="submit" class="btn btn-info btn-block reg" value="Registration"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p>Copyright &copy; Exchange <?php  echo date('Y'); ?></p>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="assets/js/jquery.easing.min.js"></script>

    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
    <!--<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>-->

    <!-- Custom Theme JavaScript -->
    <script src="assets/js/grayscale.js"></script>

</body>

</html>
