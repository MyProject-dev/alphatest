<?php
/**
 * Created by PhpStorm.
 * User: JESUS
 * Date: 12/29/2015
 * Time: 6:59 PM
 */

namespace App;


class SignUpCode
{
    private $table = 'fs_signup_code';


    function __construct()
    {
        //code started here..
    }
    public static function isUserHasCode($mno=null) {
        //check if the user has code or returns nothing..
        if(!empty($mno)){
            if(!empty(select_v3('fs_signup_code', '*', "mno = " . $mno))) {
                // echo "user already with fs code <br>";
                return TRUE;
            }  else {
                // echo "user don't have fs code <br>";
                return FALSE;
            }
        } else {
            return FALSE;
        }
//        exit;
    }
}
