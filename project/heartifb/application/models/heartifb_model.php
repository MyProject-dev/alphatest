<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Heartifb_model extends CI_Model {
	
	private $xpath = '';
	private $xpath1 = '';
	private $dom   = '';
	private $url   = ''; 
	private $full_url1 = '';
	private $store = array();
	private $counter = 0;
	private $res = '';
	private $next_url = '';
	private $user_info = array();
	private $page = 0;
	
	function __construct()
    { 
    	parent::__construct();    
    	
	   	$this->load->helper('array');
	  	$this->load->helper('url');   
	  	$this->load->helper('date'); 
	  	$this->load->library('javascript');    
	  	
	  	$this->next_url = next_page(full_url());   
	  	$this->page = page(full_url());  
	  	set_timezone(); 
		//$this->my_test->testasdasd();
		//print_array("this is a test "); 
		//echo "This is just a test library " . $this->test_library->test();   
	}   
	  
	/**
	* call and iniitlaized curl
	* @param undefined $url 
	* @return x path
	* 
	*/
	
	function start_curl($url) 
	{ 
		echo("<br><br>url $url<br><br>");
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER , true);
		$cl=curl_exec($ch);  
		 
		if($cl) 
		{
			echo("sucess"); 
		} 
		else
		{
			echo("failled");
		}
		
		@$dom = new DOMDocument();
		@$this->res = $dom->loadHTML($cl);   
		$xpath= new DomXPath($dom);   
		return $xpath;   
	}
	
	/**
	* 
	* get profile links of the heartifb users
	* 
	* @return
	*/
	
	function curl_get_user_in_the_page() 
	{   
		$this->xpath = $this->start_curl(request_url()); 
		
		$result  = $this->xpath->query("//*[@class='item-title']/a");  
		foreach ($result as $list) 
		{    
		
		
			$profileUrl = $list->getAttribute('href') . 'profile/';
			
			echo "<br> <br>this is the result " . $profileUrl . ' node value ' . $list->nodeValue;  
			 
		 	$this->store[$this->counter] = $profileUrl;   	
		 	
		 	$this->counter++;   
		 	
		 	$user_data = $this->get_user_profile_info($profileUrl);    
		 	  
		 	   
		 	  
		 	/**
			 * validate the final action
			 * @var $user_data
			 * 
			 */
			   
		 	if($user_data == '@no') 
		 	{ 
		 		echo "<b style='color:red'> no email </b> <br>"; 
		 	}
		 	elseif($user_data == '@exist') 
		 	{
				echo "<b style='color:red'> email exist </b> <br>"; 
			}
		 	elseif($this->user_save($user_data)) 
		 	{
				echo "<b style='color:green'>Successfully saved to db </b> <br>";
			}
			else 
			{
				echo "<b style='color:red'>something wrong..</b> " . __LINE__ . " <br>";
			}  
		}   
		
		/**   
		* 
		* reload the page after the first page of scrapping 
		* $var $next_url;
		*/   
		
	 	$this->javascript->proceed($this->next_url);  
		
	}  

	/**
	* set all the user profile info
	* @param undefined $url
	* 
	* @return
	*/
	
	function get_user_profile_info($url) 
	{   
	
		$this->xpath1 = $this->start_curl($url);  
		
		$email = $this->email();  
		$fullname = $this->fullname();  
		$city = $this->city();
		$spr   = $this->state_province_region();   
		$country = $this->country(); 
		$twitter = $this->twitter();  
		$facebook = $this->facebook();  
		$pinterest = $this->pinterest();  
		$instagram = $this->instagram();  
		$timezone = timezone($country); 
		    
		    
		    
		/**
		* if the timezone is empty then the location set to Defdault and timezone set to EST
		* else if timezone is not empty then location set same as timezone
		* @var $timezone
		* 
		*/
		
		if($timezone == NULL)
		{
			$location = 'DEFAULT';
			$timezone = 'EST';
		} 
		else 
		{ 
			$location = $timezone;
		}
		
		/**
		* set profile information to array
		* @var $user_data
		* 
		*/
		
		$user_data = array(
			'invited_email'=>(!empty($email)? $email : ''),
			'invited_fn'=>(!empty($fullname)? $fullname : ''),
			'city'=>(!empty($city)? $city : ''),
			'state'=>(!empty($spr)? $spr : ''),
			'country'=>(!empty($country)? $country : ''),
			'location'=>(!empty($location)? $location : ''), 
			'timezone'=>(!empty($timezone)? $timezone : ''),
			'invited_wob'=>$twitter . ',' . $facebook . ',' . $pinterest . ',' .$instagram,
			'page'=>$this->page,
			'scrape_src'=>request_url(),
			'domain_source'=>$url
		);  
		    
		/**
		* 
		* retur results and validations
		* @var $user_info
		* 
		*/
		
		if($email != NULL) 
		{
			if(!$this->is_email_exist_db($email))  
			{    
				//echo "<b style='color:green'>Email not exist to db</b><br>";  
				print_array($user_data);
				return $user_data;   
			}
			else 
			{
				print_array($user_data);
				//echo "<b style='color:red'>Email exist to db</b><br>";
				return '@exist';
			}
		}
		else 
		{
			print_array($user_data);
			//echo "<b style='color:red'>Email is empty</b><br>";
			return '@no';	
		}
		   
	} 
	 
	/**
	* check if the email exist in the database 
	* if exist return the true else return false
	* @param string $email
	* 
	* @return
	*/ 
	
	function is_email_exist_db($email) {
		
		$this->db->select('*');
		$this->db->from('fs_invited');
		$this->db->where('invited_email', $email);
		$query = $this->db->get(); 
		 
		if ($query->num_rows() > 0) 
		 	return TRUE; 
		else  
			return FALSE;	
			 
	}
	  
	 
	/**
	* saving the profile information to fs_invited table
	* @param array $data
	* 
	* @return
	*/
	function user_save($user_data) 
	{ 
 		$this->db->insert('fs_invited', $user_data);
 		return ($this->db->affected_rows() != 1) ? false : true; 
	} 
	    
	/**
	* get the email info from profile
	* 
	* @return
	*/
	
	function email() 
	{  
		$result = $this->xpath1->query("//*[@class='field_45 field_email alt']/td[2]/p/a/text()");  
		  
		foreach ($result as $list) 
		{  
			if(strpos($list->nodeValue, '@') > 0) 
			{
				return $list->nodeValue;
			} 
			else 
			{
				return false; 
			} 	
		} 
	}

	/**
	* get the fullname info from profile
	* 
	* @return
	*/
	
	function fullname() 
	{  
		$result = $this->xpath1->query("//*[@class='field_119 field_name']/td[2]/p/a/text()");   						 
		foreach ($result as $list) 
		{  
			if($list->nodeValue != NULL) 
			{
				return $list->nodeValue;
			} 
			else 
			{
				return false; 
			} 	
		} 
	}

	/**
	* get the city info from profile
	* 
	* @return
	*/
	 
	function city() 
	{   
		$result = $this->xpath1->query("//*[@class='field_48 field_city alt']/td[2]/p/a/text()");   						 
		foreach ($result as $list) 
		{  
			if($list->nodeValue != NULL) 
			{
				return $list->nodeValue;
			} 
			else 
			{
				return false; 
			} 	
		} 
	} 
	
	/**
	* get the state province region info from profile
	* 
	* @return
	*/
	
	function state_province_region() 
	{  
		$result = $this->xpath1->query("//*[@class='field_49 field_state-province-region']/td[2]/p/a/text()");   						 
		foreach ($result as $list) 
		{  
			if($list->nodeValue != NULL) 
			{
				return $list->nodeValue;
			} 
			else 
			{
				return false; 
			} 	
		} 
	}
	
	/**
	* get country from profile 
	* 
	* @return country
	*/
	
	function country() 
	{ 
	
		$result = $this->xpath1->query("//*[@class='field_50 field_country alt']/td[2]/p/a/text()");   						 
		foreach ($result as $list) 
		{  
			if($list->nodeValue != NULL) 
			{
				return $list->nodeValue;
			} 
			else 
			{
				return false; 
			} 	
		} 
		
	}
	 
	/**
	* get the twitter info from profile
	* 
	* @return
	*/ 
	
	function twitter() 
	{  
		$result = $this->xpath1->query("//*[@class='field_51 field_twitter-page']/td[2]/p/a/text()");   						 
		foreach ($result as $list) 
		{  
			if($list->nodeValue != NULL) 
			{
				return $list->nodeValue;
			} 
			else 
			{
				return false; 
			} 	
		} 
	}

	/**
	* get the facebook info from profile
	* 
	* @return
	*/
	
	function facebook() 
	{  
		$result = $this->xpath1->query("//*[@class='field_52 field_facebook-page alt']/td[2]/p/a/text()");   						 
		foreach ($result as $list) 
		{  
			if($list->nodeValue != NULL) 
			{
				return $list->nodeValue;
			} 
			else 
			{
				return false; 
			} 	
		}  
	}
	
	/**
	* get the pinterest info from profile
	* 
	* @return
	*/
	 
	function pinterest() 
	{   
		$result = $this->xpath1->query("//*[@class='field_53 field_pinterest-page']/td[2]/p/a/text()");   						 
		foreach ($result as $list) 
		{  
			if($list->nodeValue != NULL) 
			{
				return $list->nodeValue;
			} 
			else 
			{
				return false; 
			} 	
		}   
	}
	
	/**
	* get the instagram info from profile
	* 
	* @return
	*/ 
	
	function instagram() 
	{  
		$result = $this->xpath1->query("//*[@class='field_54 field_instagram-page alt']/td[2]/p/a/text()");   						 
		foreach ($result as $list) 
		{  
			if($list->nodeValue != NULL) 
			{
				return $list->nodeValue;
			} 
			else 
			{
				return false; 
			} 	
		}   
	}  

} 
?>