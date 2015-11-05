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
        if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
        {
            // Whoops, we don't have a page for that!
            show_404();
        }
         	
         	
         	echo $page;
        switch($page){
			case  'practice':   
					$this->load->model('Practice_model', '', TRUE); 
					$data['title'] = "This is practice title" . $this->Practice_model->getAllData();
			        $data['description'] = "this is practice description"; 
			        $data['query'] = $this->Practice_model->login($param1, $para2);
				break;  
			case 'heartifb':  
						
					echo "heart fb lol";
					//$this->load->model("Heartifb_model", '', TRUE); 
					//$this->Heartifb_model->curl_initialized($param1);
					  
					/*
					$this->load->library('Curl');
					//create($url) 
    				echo $this->curl->simple_get('http://example.com');   
    				*/ 
    				//$this->load->library('Curl');  
    				
    				/*
    				$ch=curl_init($url);
					curl_setopt($ch, CURLOPT_RETURNTRANSFER , true);
					$cl=curl_exec($ch); 
					@$dom = new DOMDocument();
					@$this->res=$dom->loadHTML($cl);   
					$xpath= new DomXPath($dom);  
					$this->xpath = $xpath; 
					*/ 
					
					//$data['title'] = " <br><br><br> this is the title = adsasd " . $this->Heartifb_model->curl_get_user_in_the_page() . " <--- "; //$this->Heartifb_model->curl_initialized();
					//$data['description'] = "this is the desc asdas d";  
					
					$data['title'] = ''; 
			default: 
					$data['title'] = "This is title" .  $page; 
			        $data['description'] = "this is description " . $page;  	
				break;
		}  
		
		
		print_r($data); 
		$this->load->view('templates/header', $data); 
		$this->load->view('pages/'.$page, $data);
		$this->load->view('templates/footer', $data);   
		
		 
    }
}











