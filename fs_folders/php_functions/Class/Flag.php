<?php
/**
 * Created by PhpStorm.
 * User: JESUS
 * Date: 12/6/2015
 * Time: 1:54 PM
 */

namespace App;

use DB\Mysql;

class Flag
{

    private $table = 'fs_flagged';
    public $db = '';

    function __construct($db, $mno)
    {

        $this->db = $db;
        $this->mno = $mno;
        //        $this->db = new Mysql();
        //        $this->db->connect();
    }

    public function getFlagged($mno=null) {
        if(!empty($mno)) {
            //Get flagged
            $response = select_v3(
                'fs_flag',
                'distinct table_id, table_name, action',
                "mno = $mno"
            );
        } else {
            //Get flagged
            $response = select_v3(
                'fs_flag',
                'distinct table_id, table_name, action',
                "mno > 0"
            );
        }
        return $response;
    }

    public function remove_activity_by_flagged($act, $myFlag)
    {

        // $array[$c]['ano'] 	  = $r[$modalsCounter]["ano"];
        // $array[$c]['_table']  = $r[$modalsCounter]["_table"];

        $c=0;
        $array = array();

        for ($i=0; $i < count($act) ; $i++)
        {
            $_table    = $act[$i]['_table'];
            $_table_id = $act[$i]['_table_id'];
            $remove = false;

            for ($j=0; $j < count($myFlag) ; $j++)
            {
                $table_name = $myFlag[$j]['table_name'];
                $table_id   = $myFlag[$j]['table_id'];
                $action     = $myFlag[$j]['action'];

                if ($table_name == $_table  and $_table_id == $table_id and ($action == 'hide post' || $action == 'flag post')) {
                    //This post is flagged and don't show in the feed
                    // echo "table name = $table_name and id = $table_id <br>";
                    $remove = true;
                    // unset($act[$i]);

                    // [0] => Array
                    //  (
                    //      [0] => 59
                    //      [ano] => 59
                    //      [1] => 137
                    //      [mno] => 137
                    //      [2] => Dripped
                    //      [action] => Dripped
                    //      [3] => postedlooks
                    //      [_table] => postedlooks
                    //      [4] => 8
                    //      [_table_id] => 8
                    //      [5] => 2015-06-26 01:36:35
                    //      [_date] => 2015-06-26 01:36:35
                    //      [6] => 1
                    //      [active] => 1
                    //  )
                }
            }


            if($remove == false) {
                // echo "false<br><br>";
                // $array[$c]['ano'] 	    = $act[$i]['ano'] ;
                //    $array[$c]['mno']       = $act[$i]['mno'];
                //    $array[$c]['action']    = $act[$i]['action'];
                //    $array[$c]['_table']    = $act[$i]['_table'];
                //    $array[$c]['_table_id'] = $act[$i]['_table_id'];
                //    $array[$c]['_date']     = $act[$i]['_date'];
                //    $array[$c]['active']    = $act[$i]['active'];

                foreach ($act[$i] as $key => $value) {
                    $array[$c][$key] = $value;
                }
                $c++;
            }
            else
            {
                // echo "true<br><br>";
            }
        }

        return $array;
    }



}