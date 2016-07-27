<?php
/**
 * Created by PhpStorm.
 * User: jimuelpalaca
 * Date: 7/18/2016
 * Time: 12:29 AM
 *
 * Type: HTML TEMPLATE
 */

    session_start();

    //session test
    ((isset($_SESSION["login"]))? header("Location: private.php"): header("Locaion: /"));

?>
<html>
    <head>
        <title>Welcome to BlogSpot</title>
        <!--Load CSS-->
        <?php include 'src/css_loader.php';?>

    </head>
    <body>
        <header class="head-style index">
            <!--navigation-->
            <?php include 'templates/navbar.php';?>
            <!--header content-->
            <div class="container head-content h2">
                <p>Starting a <span class="text-primary">blog</span>? Don't hesitate to try it here!</p>
                <p class="lead">It's free and will always be</p>
            </div>
        </header>

        <section>
            <!--static blog sample-->
            <div class="blog-sample" id="blogs">
                <div class="container">
                    <br>
                    <h2 class="text-center title"> SAMPLE BLOGS</h2>
                    <br>
                    <br>
                    <br>
                    <div class="row text-center center-block">
                        <div class="col-lg-4">
                            <div class="jumbotron" id="banner">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <img src="assets/img/header/blog-banner.jpg" alt="blog" class="blog-img thumbnail img-responsive">
                                    </div>
                                    <div class="col-lg-12">
                                        <p>
                                            Title: Happiness <br>
                                            Author: John Doe <br>
                                            Date: March 2,1997
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="jumbotron" id="nature">
                                <div class="row text-center center-block">
                                    <div class="col-lg-12">
                                        <img src="assets/img/header/1446997501_bunny-easter-watch-wallpaper-nature-wallpapers-array-wallwuzz-hd-wallpaper-3497.jpg" alt="blog" class="blog-img thumbnail img-responsive">
                                    </div>
                                    <div class="col-lg-12">
                                        <p>
                                            Title: Nature of Edit <br>
                                            Author: John Doe <br>
                                            Date: March 2,2013
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div class="col-lg-4">
                            <div class="jumbotron" id="okay">
                                <div class="row text-center center-block">
                                    <div class="col-lg-12">
                                        <img src="assets/img/header/3D-Neon-Colorful-Desktop-HD-Wallpapers.jpg" alt="blog" class="blog-img thumbnail img-responsive">
                                    </div>
                                    <div class="col-lg-12">
                                        <p>
                                            Title: Okay Neon! <br>
                                            Author: John Doe <br>
                                            Date: March 2,2016
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end-line: static blog sample-->

            <!--registration form-->
            <div class="blog-regit" id="reg">
                <div class="container">
                    <br>
                    <h2 class="text-center title"> SIGN UP</h2>
                    <br>
                    <br>
                    <br>
                    <div class="center-block reg">
                        <div class="row">
                            <div class="col-lg-4">
                                &nbsp;
                            </div>
                            <div class="col-lg-4">
                                <?php include 'templates/reg-form.php';?>
                            </div>
                            <div class="col-lg-4">
                                &nbsp;
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--regitration form-->
        </section>

        <footer>
            <div class="container">
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="/"><span class="glyphicon glyphicon-pencil small"></span> fakeblog</a>
                        </div>
                        <div class="collapse navbar-collapse" id="myNavbar">
                            <!--nav menu-->
                            <ul class="nav navbar-nav navbar-right">
                                                           </ul>
                            <!--end-line: nav menu-->
                        </div>
                    </div>
                </nav>
            </div>
        </footer>

        <?php
            //greetings for new user
            if(isset($_SESSION["registered"]) && $_SESSION["registered"]==true){
                session_start();
                $_SESSION["registered"]=false;
                echo "<script>alert('You are now registered blogger at Fakeblog.com. Thank You!');</script>";
            }

        ?>
        <!--load of scripts-->
        <?php include 'src/script_loader.php';?>

    </body>
</html>