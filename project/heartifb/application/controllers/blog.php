<?php
/**
 * Created by PhpStorm.
 * User: jesus
 * Date: 07/02/2015
 * Time: 1:11 AM
 */


class Blog extends CI_Controller {
    public function view()
    {

        $data['title'] = 'blog title'; // Capitalize the first letter
        $data['description'] = "this is description";
        $this->load->view('templates/header', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer', $data);
    }
}

