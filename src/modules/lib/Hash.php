<?php

/**
 * Created by PhpStorm.
 * User: jimuelpalaca
 * Date: 7/27/2016
 * Time: 2:35 AM
 *
 */
include 'Str.php';

class Hash
{
    public static function make($str)
    {
        $work = str_pad(10, 2, '0', STR_PAD_LEFT);

        // Bcrypt expects the salt to be 22 base64 encoded characters including
        // dots and slashes. We will get rid of the plus signs included in the
        // base64 data and replace them with dots.
        if (function_exists('openssl_random_pseudo_bytes'))
        {
            $salt = openssl_random_pseudo_bytes(16);
        }
        else
        {
            $salt = Str::random(40);
        }

        $salt = substr(strtr(base64_encode($salt), '+', '.'), 0 , 22);

        $hash=crypt($str, '$2a$'.$work.'$'.$salt);

        return $hash;
        //Source: Stack Overflow - stackoverflow.com, trend: "How to create a laravel hashed password", post by: Fabián Valencia;
        //I add or edit some codes or properties from the original post, this is to make the function more flexible. -Jimuel Palaca
    }


    public static function check($str, $hash)
    {
        return password_verify($str, $hash);
    }
}