<?php

/**
 * Created by PhpStorm.
 * User: jimuelpalaca
 * Date: 7/25/2016
 * Time: 3:37 AM
 */

include 'lib/MySQLDatabase.php';
include 'lib/Hash.php';
include 'lib/Num.php';


class Account extends MySQLDatabase
{

    function login(){
        if($_POST!=null){
            $success=false;
            $email=$_POST["email"];
            $password=$_POST["pwd"];


            $data=$this->select("tbl_users","*","user_email='".$email."'");
            while($account=mysqli_fetch_assoc($data)){
                if(Hash::check($password, $account["user_password"])==1){
                    session_start();
                    $_SESSION["login"]=true;
                    $_SESSION["id"]=$account["user_id"];
                    $_SESSION["name"]=$account["user_fname"]." ".$account["user_lname"];

                    $this->set_id($account["user_id"]);

                    $success=true;

                    header("Location: /");
                    break;
                }else{
                    $success=false;
                }
            }

            if(!$success){
                session_start();
                $_SESSION["login_error"]=true;
                header("Location: /login_error_page.php");
            }
        }
    }

    function register(){
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
        if($this->check_id($id)){
            return $id;
        }
    }

    function check_id($id){
        //set flag
        $duplicated=false;
        /**
         * Filter user_id
         * Checks if generated id was already exist and used by other user
        **/
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
            return true;
        }
    }

    function upload_image($name, $tmp){
        $old_dir=$tmp;
        $new_dir="../assets/images/blog/".$name;

        move_uploaded_file($old_dir,$new_dir);
    }

    function save_blog(){
        if($_POST!=null){
            session_start();
            $f_name=$_FILES["img_src"]["name"];
            $f_tmp=$_FILES["img_src"]["tmp_name"];
            $user_id=$_SESSION["id"];
            $blog_id=Num::random(15);

            $title=$_POST["title"];
            $blog=$_POST["blog_post"];
            $timestamp=strtotime(date("Y-m-d H:i:s"));

            $_table="tbl_blog";
            $_fields="blog_id, user_id, title, post, img_src, timestamp";
            $_values="'".$blog_id."','".$user_id."','".$title."','".$blog."','".$f_name."',".$timestamp."";

            $this->upload_image($f_name, $f_tmp);
            $this->insert($_table,$_fields,$_values);

            header("Location: /");
        }
    }

    function list_blogs(){
        //filter blog post by current user
        $data=$this->select("tbl_blog","*","user_id=".$_SESSION["id"]."");

        $clone=null;
        $tmp=null;
        $ctr=0;

        while($blog=mysqli_fetch_assoc($data)){
            /**
             * Sort blog post by timestamp
             * Sorting Algorithm: Insertion Sort(reverse)
            **/
            $clone[$ctr]=$blog; //clone the original array to preserve original array structure. maybe for the future use .
            for($sort=$ctr; $sort>0; $sort--) {
                if ($clone[$sort]["timestamp"] > $clone[$sort - 1]["timestamp"]) {
                    $tmp = $clone[$sort];
                    $clone[$sort] = $clone[$sort - 1];
                    $clone[$sort - 1] = $tmp;
                }
            }
            $ctr++;
        }

        //display sorted post according to timestamp
        for($sort=0; $sort<$ctr; $sort++){
            echo "
                <br>
                        <div class='blog-post' id='blog_post'>
                            <div class='row'>
                                <div class='col-lg-12'>
                                    ".$_SESSION["name"]." <span class='small pull-right'>".date("m-d-Y H:i:s", $clone[$sort]["timestamp"])."</span>
                                    <br>

                                    <hr>
                                </div>
                            </div>
                            <div class='row'>
                                <div class='col-lg-12 text-center'>
                                    <img src='assets/images/blog/".$clone[$sort]["img_src"]."' alt='".$clone[$sort]["img_src"]."' class='img-circle pull-left' width='150px' height='150px'><br>
                                    <h2>".$clone[$sort]["title"]."<br> <small>by ".ucwords($_SESSION["name"])."</small></h2>
                                </div>
                            </div>
                            <div class='row'>
                                <div class='col-lg-12'>
                                    <hr>
                                     <p class='text-justify'>
                                ".$clone[$sort]["post"]."
                            </p>
                                </div>
                            </div>
                        </div>
            ";
        }
    }
}