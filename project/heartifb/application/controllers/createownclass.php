<?php
/**
 * Created by PhpStorm.
 * User: jesus
 * Date: 05/02/2015
 * Time: 4:31 PM
 */
 
class Pages extends CI_Controller {

     

    public function view($page = 'home', $param1 = NULL, $para2 = NULL)
    {
         
         
         
        $data['title'] = 'this is title'; 
        $data['description'] = 'this is desc'; 
		$this->load->view('pages/create_own_class', $data); 
		
		 
    }
}











