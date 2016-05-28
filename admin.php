<?php
/**
 * Created by PhpStorm.
 * User: php
 * Date: 23/05/16
 * Time: 5:08 PM
 */
?>
<html>
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
    <body>

    <header>

        <ul class="nav nav-tabs">
            <li role="presentation" class="active"><a href="#">Home</a></li>
            <li>
                <a class="page-scroll" href="#profile">profile</a>
            </li>
            <li role="presentation"><a href="#">Messages</a></li>
        </ul>

        <div class="container">
            <div class="row"> -------------------</div>
            <div class="row"> -------------------</div>

            <div class="row"> -------------------</div>
            <div class="row"> -------------------</div>


        </div>
    </header>

    <section id="profile" class="container text-center">
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
