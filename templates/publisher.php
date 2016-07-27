<?php
/**
 * Created by PhpStorm.
 * User: jimuelpalaca
 * Date: 7/26/2016
 * Time: 10:34 PM
 */
?>
    <div class="blog-publisher">
        <h4><span class="glyphicon glyphicon-blackboard"></span> Write a Blog ...</h4>
        <hr>
        <form action="modules/Register.php" role="form" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="blog-title">Blog Title</label>
                <input type="text" name="blog-title" id="blog-title" class="form-control" >
            </div>
            <div class="form-group">
                <label for="blog-post">Blog</label>
                <textarea name="blog-post" id="blog-post" rows="5"  class="form-control" placeholder="What's on your mind?"></textarea>
            </div>
            <div class="form-group">
                <label for="img-src">Image</label>
                <input type="file" name="img-src" id="img-src" class="btn btn-default">
            </div>
            <hr>
                <input type="submit" name="post" id="post" value="Post" class="btn btn-primary">
        </form>
    </div>

