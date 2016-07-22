<?php
/**
 * Created by PhpStorm.
 * User: jimuelpalaca
 * Date: 7/18/2016
 * Time: 12:29 AM
 *
 * Type: HTML TEMPLATE
 * NOTE: not totally responsive **font-size->static , I don't know how to make it responsive **
 * TODO: research about "how to make a responsive fonts-size"
 */
?>
<html>
    <header>
        <title>Welcome to BlogSpot</title>
        <!--load css-->
        <?php include 'src/css.php';?>

    </header>
    <body>

        <header>
            <!--page banner-->
            <img src="assets/img/header/banner4.jpg" class="banner img-responsive" />
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
            <?php include 'templates/navbar.php';?>
        </footer>

        <!--load of scripts-->
        <?php include 'src/script.php';?>

    </body>
</html>