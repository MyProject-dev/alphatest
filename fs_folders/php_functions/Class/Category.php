<?php
namespace App;


class Category
{
    private $db = 0;
    private $mno = 0;
    private $table = 'category';

    function __construct($db, $mno)
    {
        $this->db = $db;
        $this->mno = $mno;
    }

    public function add($name) {
        if($this->db->insert($this->table, array('name'=> $name))) {
           // echo "added <br>";
            return true;
        } else {
           // echo "failed to add <br>";
            return false;
        }
    }

    public function getByName($name) {
        $response = select_v3($this->table, '*', " name = '$name'");
        return $response;
    }


    public function getIdByName($name) {
        $response = select_v3($this->table, '*', " name = '$name' ");
        return  (!empty($response[0]['id'] )) ? $response[0]['id'] : 0 ;
    }


    /**
     * If topic exist then id will return else if not then add new the
     * inputed category and return the new id
     * @param $name
     * @return bool
     */
    public function getIdByNameOrAdd($name) {

        if($this->getIdByName($name)) {
            $response = select_v3($this->table, '*', " name = '$name'");
        } else {
            if($this->add($name)){
                //echo "added new Category <br>";
                $response = select_v3($this->table, '*', " name = '$name'");
            } else {
                //echo "failed added new Category <br>";
                return false;
            }
        }
        return $response[0]['id'];
    }

    public function getById($id){
        $response = select_v3($this->table, '*', " id = $id");
        return $response;
    }
}
