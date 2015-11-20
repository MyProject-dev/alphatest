<?php
namespace App;

use App\Category;

class Topic
{
    private $db = 0;
    private $mno = 0;
    private $table = 'fs_tag_topic';

    function __construct($db, $mno)
    {
        $this->db = $db;
        $this->mno = $mno;
        $this->category = new Category($this->db, $this->mno);
    }

    public function add($name, $category_id) {
        if($this->db->insert($this->table, array('name'=> $name, 'topic_category_id'=>$category_id))) {
            //echo "inserted new topic <br>";
            return true;
        } else {
            //echo "not inserted <br>";
            return false;
        }
    }

    /**
     * This will add the topic if not exist
     * also the category if not exist then it will automatically be added to the database and automatically used
     * by the topic
     * @param $name
     * @param $category_name
     * @return bool
     */
    public function addIfNotExist($name, $category_name) {

        $category_id = $this->category->getIdByNameOrAdd($category_name);

        if(!$this->isExist($name, $category_id)) {
            if($this->db->insert($this->table, array('name'=> $name, 'topic_category_id'=>$category_id))) {
                //echo "added <br>";
                return true;
            } else {
                //echo "failed to add <br>";
                return false;
            }
        } else {
            //echo "exist <br>";
            return false;
        }
    }

    public function getByName($name){
        $response = select_v3($this->table, '*', " name = '$name'");
        return $response;
    }

    public function getById($name){

    }

    public function getByNameSearch($name) {
        $response = select_v3($this->table, '*', " name Like  '%$name%'");
        return $response;
    }

    public function getByNameWithInCategory($name, $category_id) {
        $response = select_v3($this->table, '*', " name = '$name' and topic_category_id = $category_id");
        return $response;
    }

    public function getByNameSearchWithInCategory($name, $category_id) {
        // echo  " name Like '%$name%' and category_id = $category_id";
        $response = select_v3($this->table, '*', " name Like '%$name%' and topic_category_id = $category_id");
        return $response;
    }

    public function isExist($name, $category_id) {
        $response = select_v3($this->table, '*', " name = '$name' and topic_category_id = $category_id");
        if(!empty($response)){
            return true;
        } else  {
            return false;
        }
    }




}
