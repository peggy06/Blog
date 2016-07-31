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
    <div class="blog-publisher">
        <h4><span class="glyphicon glyphicon-blackboard"></span> Write a Blog ...</h4>
        <hr>
        <form action="src/Controller.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="blog-title">Blog Title</label>
                <input name="title"  type="text" id="title" class="form-control" required="required">
            </div>
            <div class="form-group">
                <label for="blog-post">Blog</label>
                <textarea name="blog_post" id="blog_post" rows="5"  class="form-control" placeholder="What's on your mind?" required="required"></textarea>
            </div>
            <div class="form-group">
                <label for="user_srv">Image</label>
                <input name="img_src" type="file" value="" required="required" class="btn btn-default">
            </div>
            <hr>
                <input name="blog" type="submit" id="blog" value="Post" class="btn btn-primary">
        </form>
    </div>

