<?php
 
class Heartifb extends CI_Controller { 

	function __construct() {
		// use parent clas
		parent::__construct();
	}  
	
	/**
	* this is the actual view of the heartifb scrapping
	* @param undefined $url
	* 
	* @return
	*/
	
	function view($url=NULL) {  
	
		if($url == 'timezone-test')
		{
			echo "time zone test ";
		} 
		else 
		{ 
			$this->load->model("heartifb_model", "", TRUE);   
			$data['title'] = 'this is the title 1' . $this->heartifb_model->curl_get_user_in_the_page();
			$data['description'] = 'this is the desc 2';
			
		}
		
		$this->load_view($data, 'heartifb');
	} 
	
	/**
	* this is just for testing
	* 
	* @return
	*/
	
	function test() 
	{ 
		
	 	$this->load->model("Test_model", "" , TRUE);
		
		$data['title'] = 'this is the test title';
		$data['description'] = 'this is the test description';
		$data['content'] = ' this is the content asdasd as ' . $this->Test_model->first_test();
		
		$this->load_view($data, 'test');
	}  

	/**
	* update all the city location and timezone if city is not found then province else country
	* 
	* @return
	*/
	
	function update_location_timezone($limit=50,$offset=0)
	{  
		$this->load->model('Update_location_timezone_model', '', TRUE); 
		$data['title'] = 'title';
		$data['content'] = "this is the content wew " . $this->Update_location_timezone_model->run_update($limit,$offset); 
		$this->load_view($data, 'update_location'); 
	} 
	
	/**
	* this is to load the view of the model 
	* @param undefined $data
	* 
	* @return
	*/
	
	function load_view($data, $page) 
	{
		
		$this->load->view('templates/header', $data); 
		$this->load->view('pages/' . $page, $data);
		$this->load->view('templates/footer', $data);   
	} 
} 
?>