<?php
/**
 * Created by PhpStorm.
 * User: jimuelpalaca
 * Date: 7/18/2016
 * Time: 12:59 AM
 *
 * Type: HTML TEMPLATE
 */

?>

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
                            <li><a href="#blogs"><span class="glyphicon glyphicon-inbox"></span> Blogs</a></li>
                            <li><a href="#reg"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                            <!--Trigger the modal-->
                            <li><a href="" data-toggle="modal" data-target="#loginModal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>

                            <!--Login Modal-->
                            <div class="modal fade" id="loginModal" role="dialog">
                                <div class="modal-dialog modal-sm">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Login your Account</h4>
                                        </div>
                                        <div class="modal-body">
                                            <form role="form">
                                                <div class="form-group">
                                                    <label for="email">Email:</label>
                                                    <input type="email" class="form-control" id="email">
                                                </div>
                                                <div class="form-group">
                                                    <label for="pwd">Password:</label>
                                                    <input type="password" class="form-control" id="pwd">
                                                </div>
                                                <button type="submit" class="btn btn-default">Submit</button>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            Fakeblog &copy; 2016
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Login Modal-->
                        </ul>
                        <!--end-line: nav menu-->
                    </div>
                </div>
            </nav>
            </div>