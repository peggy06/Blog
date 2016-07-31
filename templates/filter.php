<?php
/**
 * Created by PhpStorm.
 * User: jimuelpalaca
 * Date: 7/26/2016
 * Time: 10:34 PM
 *
 * Type: HTML Template
 */

?>
<div class="panel-heading">
    <img src="../assets/images/profile_pic/ako.jpg" alt="default" width="250px" class="img-thumbnail"/><br>
    <p class="text-center">
        <span>&nbsp;
            <?php
                echo "Hi, ".ucwords($_SESSION["name"])."!";
            ?>
        </span>
        &nbsp;
        <a class="small" href="/"><span class="glyphicon glyphicon-edit"></span>Edit</a>
    </p><hr>
    <ul class="blog-menu">
        <li>Homes</li>
        <li>Create Blog</li>
        <li>Settings</li>
    </ul>
</div>
