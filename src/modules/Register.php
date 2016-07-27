<?php

/**
 * Created by PhpStorm.
 * User: jimuelpalaca
 * Date: 7/27/2016
 * Time: 1:32 AM
 */

include 'lib/MySQLDatabase.php';
include 'lib/Num.php';
include 'lib/Hash.php';

class Register extends MySQLDatabase
{
    function save(){
        if($_POST!=null){
            //store $_POST values
            $_id=Num::random(15);
            $_fname=$_POST["fname"];
            $_lname=$_POST["lname"];
            $_email=$_POST["email"];
            $_uname=$_POST["username"];
            $_pwd=Hash::make($_POST["password"]);
            $_bday=$_POST["month"]."-".$_POST["day"]."-".$_POST["year"];
            $_gender=$_POST["gender"];

            //set table and fields
            $table="tbl_users";
            $fields="user_id, username, user_email, user_password, user_fname, user_lname, user_bday, user_gender";

            //set values
            $values=$_id.",'".$_uname."','".$_email."','".$_pwd."','".$_fname."','".$_lname."','".$_bday."',".$_gender;

            //save data
            $this->insert($table,$fields,$values);

            session_start();
            $_SESSION["registered"]=true;

            header("Location: /");
        }
    }

    function generate_id(){
        $id=Num::random(15);
        $this->check_id($id);
    }

    function check_id($id){
        //set flag
        $duplicated=false;

        //filter id
        $data=$this->select("tbl_users","user_id","");
        while($saved=mysqli_fetch_assoc($data)){
            if($id==$saved["user_id"]){
                $duplicated=true;
                break;
            }else{
                $duplicated=false;
            }
        }

        if($duplicated){
            $this->generate_id();
        }else{
            return $id;
        }
    }
}