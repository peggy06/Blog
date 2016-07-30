<?php
/**
 * Created by PhpStorm.
 * User: jimuelpalaca
 * Date: 7/26/2016
 * Time: 9:59 AM
 *
 * Type: HTML Template
 */

    session_start();
    ((!isset($_SESSION["login"]))? header("Location: /"): "");
?>

<!doctype html>
<html lang="en">
    <head>
        <title>Fakeblog</title>

        <!--Load CSS-->
        <?php include 'src/css_loader.php';?>
    </head>
    <body class="private">
        <header class="private-header">
            <!--navbar-->
            <?php include 'templates/navbar.php';?>
        </header>

        <section class="private-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 panel">
                        <!--filter-->
                        <?php include 'templates/filter.php';?>

                    </div>
                    <div class="col-md-7">
                        <!--publisher-->
                        <?php include 'templates/publisher.php';?>

                        <!--Blog POst- Dynamic-->
                        <?php
                            include_once '/src/modules/Account.php';
                            $post=new Account;
                            $post->list_blogs();

                        ?>

                        <!--Sample Blog POst : Static-->
                        <br>
                        <div class="blog-post" id="blog_post">
                            <div class="row">
                                <div class="col-lg-12">
                                    Jimuel Palaca <span class="small pull-right">7-30-2016 - 4:29</span>
                                    <br>

                                    <hr>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 text-center">
                                    <img src="assets/images/header/blog-banner.jpg" alt="static_sample" class="img-circle pull-left" width="150px" height="150px"><br>
                                    <h2>Static Blog Post <br> <small>by Jimuel Palaca</small></h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <hr>
                                    <p class="text-justify">
                                        Lorem ipsum dolor sit amet, consectet ur adipiscing elit. Donec id augue inextrum facilisis. Nam dui elit, feugiat non luctus vitae, commodo rutrum dui sollicitudin veneluctus iaculis augue et iaculis
                                        Lorem ipsum dolor sit amet, consectet ur adipiscing elit. Donec id augue inextrum facilisis. Nam dui elit, feugiat non luctus vitae, commodo rutrum dui sollicitudin veneluctus iaculis augue et iaculis
                                        Lorem ipsum dolor sit amet, consectet ur adipiscing elit. Donec id augue inextrum facilisis. Nam dui elit, feugiat non luctus vitae, commodo rutrum dui sollicitudin veneluctus iaculis augue et iaculis
                                        Lorem ipsum dolor sit amet, consectet ur adipiscing elit. Donec id augue inextrum facilisis. Nam dui elit, feugiat non luctus vitae, commodo rutrum dui sollicitudin veneluctus iaculis augue et iaculis
                                    </p>
                                </div>
                            </div>
                        </div>


                    </div>

                    <div class="col-md-2 panel">
                        <h3 class="text-center">Suggested Page</h3>
                        <img src="assets/images/header/banner4.jpg" alt="blog" width="200px" class="img-thumbnail">
                        <small>TheGreatGreekWriters</small>
                        <hr>
                        <img src="assets/images/header/blog-banner.jpg" alt="blog" width="200px" class="img-thumbnail">
                        <small>BloggyWritersPH</small>
                        <hr>
                        <img src="assets/images/header/1446997501_bunny-easter-watch-wallpaper-nature-wallpapers-array-wallwuzz-hd-wallpaper-3497.jpg" alt="blog" width="200px" class="img-thumbnail">
                        <small>ElectronicArtistPH</small>
                    </div>
                </div>
            </div>
        </section>

        <footer>
            <?php include 'templates/footer.php';?>
        </footer>

    <!--Load Script-->
    <?php include 'src/script_loader.php';?>
    </body>
</html>

