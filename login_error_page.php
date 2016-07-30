<?php
/**
 * Created by PhpStorm.
 * User: jimuelpalaca
 * Date: 7/30/2016
 * Time: 7:13 PM
 */

session_start();
((isset($_SESSION["login"]))? header("Location: private.php"): header("Locaion: /"));
((!isset($_SESSION["login_error"]))? header("Location: /"): "");
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fakeblog</title>
    <!--Load CSS-->
    <?php include 'src/css_loader.php';?>
</head>
<body>
    <header class="private-header">
        <!--navbar-->
        <?php include 'templates/navbar.php';?>
    </header>

    <section>
            <div class="col-lg-4">

            </div>
            <div class="col-lg-4">
                <div class=" log-error-panel">
                    <div class="text-center"><h3>Log into Fakeblog</h3></div>
                    <form class="form-horizontal" role="form" action="src/Controller.php" method="post">
                        <div class="form-group">
                            <div class="col-sm-12">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Enter password">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-primary pull-right" name="login">Log in</button>
                            </div>
                        </div>

                        <div class="text-center">
                            <span class="text-danger">Invalid email and password!</span>
                        </div>
                    </form>
                </div>

            </div>
            <div class="col-lg-4">

            </div>
    </section>

    <footer>
    </footer>

    <!--Load Script-->
    <?php include 'src/script_loader.php';?>
</body>
</html>
