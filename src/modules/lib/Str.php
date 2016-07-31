<?php

/**
 * Created by PhpStorm.
 * User: jimuelpalaca
 * Date: 7/27/2016
 * Time: 2:37 AM
 *
 * wag niyo po sanang pagtawanan xD haha
 * gawa-gawa ko lang po xD
 * inspired sa Laravel
 */
class Str
{
    public static function random($count)
    {
        $random="";
        $alpha=array(
            "a"=>"A","b"=>"B","c"=>"C","d"=>"D","e"=>"E","f"=>"F","g"=>"G","h"=>"H","i"=>"I",
            "j"=>"J","k"=>"K","l"=>"L","m"=>"M","n"=>"N","o"=>"O","p"=>"P","q"=>"Q","r"=>"R",
            "s"=>"S","t"=>"T","u"=>"U","v"=>"V","w"=>"W","x"=>"X","y"=>"Y","z"=>"Z",);

        for($ctr=1;$ctr<=$count;$ctr++){
            $random=$random."".array_rand($alpha,1);
        }

        return $random;
    }
}