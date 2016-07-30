<?php
/**
 * Created by PhpStorm.
 * User: jimuelpalaca
 * Date: 7/27/2016
 * Time: 2:04 AM
 */


//autoload class
function __autoload($class_name){
    $directories = array(
        'lib/',
        'modules/');

    foreach($directories as $directory){
        ((file_exists($directory.$class_name.'.php'))? include($directory.$class_name.'.php'):"");

    }
}


$user=new Account;

if($_POST!=null){
    if(isset($_POST["register"])){
        $user->register();
    }elseif(isset($_POST["login"])){
        $user->login();
    }elseif(isset($_POST["blog"])){
        $user->save_blog();
    }
}
?>