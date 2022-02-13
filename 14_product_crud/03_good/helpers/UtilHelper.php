<?php 

namespace app\helpers;

class UtilHelper
{
    public static function randomString($n){
        $letters = '1234567890abcdefghigklmnopqrswtsrxyzABCDEFGHIGKLMNOPQRSWT';
        $str='';
        for ($i=0; $i < $n; $i++) { 
            $index = rand(0,strlen($letters) - 1);
            $str .= $letters[$index];
        }
        return $str;
    }
}