<?php
/**
 * Created by PhpStorm.
 * User: jesus
 * Date: 07/02/2015
 * Time: 12:17 AM
 */

class login extends CI_DB_active_record {
    public function login(){
        $query = $this->db->get('accounts');
        foreach ($query->result() as $row)
        {
            echo $row->title;
        }
    }
}


