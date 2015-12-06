<?php
namespace App;

class TopicSelected
{
    private $mno = 0;
    private $db = '';
    private $table = 'fs_tag_topic_selected';

    function __construct($db, $mno)
    {
        $this->db = $db;
        $this->mno = $mno;
    }

    public function save($topic_id, $topic_ids=array()) {

        $bool = true;

        //Save single post
        if(!empty($topic_id)) {
            //save now
            if($bool = $this->add($this->mno, $topic_id)){
                echo "added successfully topic_id = $topic_id <br>";
            } else {
                echo "failed to add topic_id = $topic_id <br>";
            }
        }

        //Save array post
        if(count($topic_ids) > 0) {

            // print_r($brand1);

            foreach($topic_ids as $topic_id) {
                if(!empty($topic_id)){
                    print($topic_id . "\n");
                    if($bool = $this->add($this->mno, $topic_id)){
                        echo "added successfully topic_id = $topic_id <br>";
                    } else {
                        echo "failed to add topic_id = $topic_id <br>";
                    }
                }
            }

            //save now
        }

       return $bool;
    }

    public function add($mno, $topic_id) {

        echo "mno $mno and topic id $topic_id<br>";

        if(!select_v3($this->table, '*', " mno = $mno and topic_id = $topic_id ")){
            echo "not exist <br>";



            if($this->db->insert($this->table, array('mno'=>$mno, 'topic_id'=> $topic_id))){
                echo "inserted<br>";

                $bool = true;

            } else {

                echo "failed to insert<br>";
                $bool = false;

            }
        } else {

            $bool = false;
            echo "exist<br>";

        }

        return $bool;
    }
}