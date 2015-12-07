<?php
/**
 * Created by PhpStorm.
 * User: JESUS
 * Date: 12/6/2015
 * Time: 4:44 PM
 */

namespace App;


class Notification
{

    private $mno = 0;
    private $db = '';

    function __construct($db, $mno)
    {
        $this->db = $db;
        $this->mno = $mno;
    }





}