<?php
/**
 * Created by PhpStorm.
 * User: jimuelpalaca
 * Date: 7/26/2016
 * Time: 10:34 PM
 */

?>
<div class="panel-heading">
    <img src="../assets/img/profile_pic/ako.jpg" alt="default" width="250px" class="img-thumbnail"/><br>
    <p class="text-center">
        <span>&nbsp;
            <?php
                echo $_SESSION["login"];
            ?>
        </span>
        &nbsp;
        <a class="small" href="/"><span class="glyphicon glyphicon-edit"></span>Edit</a>
    </p><hr>
    <ul class="blog-menu">
        <li>Home</li>
        <li>Create Blog</li>
        <li>Settings</li>
    </ul>
</div>
