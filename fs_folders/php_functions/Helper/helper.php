<?php
/**
 * Created by PhpStorm.
 * User: Jesus
 * Date: 9/25/2015
 * Time: 2:44 PM
 */

if(!function_exists('is_allow_redirect')) {
    function is_allow_redirect($location, $mno)
    {
        if ($mno == 136) {
            echo "<script type=\"text/javascript\">location.href ='$location';</script> ";

        }
    }
}

if(!function_exists('string_limit')) { 
    function string_limit($string, $limit=120, $ext='...') {
        if(strlen($string) > $limit  ) {
           $str = substr($string, 0, $limit) . $ext;
        } else {
            $str = $string;
        }

        return $str;
    } 
}
 
if(!function_exists('clean_url')){ 
    function clean_url($url) {   
        $url = str_replace('http://', '', $url); 
        $url = str_replace('https://', '', $url); 
        $url = str_replace('www.', '', $url); 
        return $url; 
    }  
}