<?php
/**
 * Created by PhpStorm.
 * User: jimuelpalaca
 * Date: 7/26/2016
 * Time: 9:59 AM
 *
 * Type: HTML Template
 */

?>

<html>
    <head>
        <title>Blogspot</title>

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
                    </div>

                    <div class="col-md-2 panel">
                        <h3 class="text-center">Suggested Page</h3>
                        <img src="assets/img/header/banner4.jpg" alt="blog" width="200px" class="img-thumbnail">
                        <small>TheGreatGreekWriters</small>
                        <hr>
                        <img src="assets/img/header/blog-banner.jpg" alt="blog" width="200px" class="img-thumbnail">
                        <small>BloggyWritersPH</small>
                        <hr>
                        <img src="assets/img/header/1446997501_bunny-easter-watch-wallpaper-nature-wallpapers-array-wallwuzz-hd-wallpaper-3497.jpg" alt="blog" width="200px" class="img-thumbnail">
                        <small>ElectronicArtistPH</small>
                    </div>
                </div>
            </div>
        </section>

        <footer>

        </footer>

    <!--Load Script-->
    <?php include 'src/script_loader.php';?>
    </body>
</html>

