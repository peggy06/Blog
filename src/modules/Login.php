<?php

/**
 * Created by PhpStorm.
 * User: jimuelpalaca
 * Date: 7/25/2016
 * Time: 3:37 AM
 *
 *
 */

include 'lib/MySQLDatabase.php';
include 'lib/Hash.php';

class Login extends MySQLDatabase
{
    function login(){
        if($_POST!=null){
            $email_or_username=$_POST["email"];
            $password=$_POST["pwd"];

            $data=$this->select("tbl_users","*","");
            while($account=mysqli_fetch_assoc($data)){
                if($email_or_username==$account["username"] || $email_or_username==$account["user_email"]){
                    if(Hash::check($password, $account["user_password"])==1){
                        session_start();
                        $_SESSION["login"]=$account["user_fname"]." ".$account["user_lname"];


                        header("Location: /private.php");
                        break;
                    }
                }
            }
        }
    }

    function logout(){
        session_start();
        session_unset($_SESSION["login"]);
        session_abort();
        header("Location: /");
    }
}