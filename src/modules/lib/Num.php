<?php

/**
 * Created by PhpStorm.
 * User: jimuelpalaca
 * Date: 7/27/2016
 * Time: 1:44 AM
 *
 * wag niyo po sanang pagtawanan xD haha
 * gawa-gawa ko lang po xD
 * inspired sa Laravel
 */
class Num
{
    public static function random($count)
    {
        $random=null;
        $num=array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9);
        for($ctr=0;$ctr<$count;$ctr++){
            $random=$random."".array_rand($num, 1);
        }

        return $random;
        /**
        **/
    }
}