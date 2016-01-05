<?php
namespace App;


class TopicCategory
{
    private $db = 0;
    private $mno = 0;
    private $table = 'fs_tag_topic_category';

    function __construct($db, $mno)
    {
        $this->db = $db;
        $this->mno = $mno;
    }  

    public function categoryIdByName($brand) {

        $response = select_v3($this->table, '*', "name = '$brand'");

        return $response[0]['id'];

    }

    public function categoryIds() {

        $response = select_v3($this->table, '*', "id > 0");

        return $response;
    }

    public function getIdByName($name) {
        $response = select_v3($this->table, '*', "name = '$name' ");
        return $response[0]['id'];
    }




}
