<?php
/**
 * Created by PhpStorm.
 * User: jimuelpalaca
 * Date: 7/27/2016
 * Time: 4:23 AM
 */
session_start();
session_unset($_SESSION["login"]);
header("Location: /");