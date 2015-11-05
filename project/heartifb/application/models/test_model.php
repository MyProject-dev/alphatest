<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Test_model extends CI_Model {
	
	function __construct() {
		
		parent::__construct();   
		$this->load->helper('date');   
		$this->load->helper('array');
		set_timezone();
		
	} 
	 
	function first_test() {    
		/*
		echo "this is a test <br>"; 
		$utc = new DateTimeZone('Pacific/Chuuk');
		echo "<br>name timezone " . $utc->getName();
	 	date_default_timezone_set($utc->getName());   
	 	echo "<br>date time = " . date("m-y-d h:i:s a"); 
		//echo " urc = " . DateTimeZone::UTC; 
		echo "<br><br>";
		*/ 
		
		echo "Timezone = " . timezone('New_York');  
		
		date_default_timezone_set(timezone('Vostok'));
		
		echo "<br>date time = " . date("m-y-d h:i:s a");  
		 
		$timezone_identifiers = DateTimeZone::listIdentifiers(); 
		foreach($timezone_identifiers as $tz_country) 
		{   	 
			echo "$tz_country <br>"; 
		}   
	}  
	

}
?>