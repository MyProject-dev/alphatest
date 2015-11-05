<?php
	
	
	class Update_location_model extends CI_Model {
		
		
		private $xpath = ''; 
		 
		function __construct() 
		{
			parent::__construct();  
			$this->load->library('curl');  
			
		}
		
		/**
		* 
		* load the data and getting the data
		* start  
		* 
		*/
		 
		function run_update()
		{
			echo("run"); 
			$this->invited_information(); 
		}
		function invited_information()
		{  
			 
			$this->db->select('distinct(city), invited_id, state, country');
			$this->db->from('fs_invited');
			$this->db->group_by(array("city"));   
			$this->db->limit(10,0); 
			$query = $this->db->get();
			
			 
			  
			echo " total result " . $query->num_rows() . '<br>';
			
			$i = 0;
			$city_total = 0;
			
		   	foreach ($query->result() as $row)
		   	{	  
		   	
		   		$i++; 
		   		//query all the distinc city 
		   		echo "$i.) ";
		      	echo 'city = ' . $row->city  ; 
		      	echo  ' invited_id = ' . $row->invited_id    ; 
		      	echo  ' state ' . $row->state  ; 
		      	echo  ' country ' . $row->country  ;   
		      	
		   		if(strlen($row->city) > 5)
		   		{
		   			
		   			//query the total people in the distinct city     
		   			
		   		  	$this->db->select('city');
		   		  	$this->db->from('fs_invited');  
		   		  	$this->db->where('city', $row->city); 
		   		  	
		   		  	echo " total city found = " . $this->db->count_all_results();  
			   		$city_total = $city_total + $this->db->count_all_results();
			   		echo "<hr>";  
				   		
				  	$timezone = $this->get_timezone($row->city);   	
					echo "city<br>"; 
					
					if(empty($timezone))
					{
						$timezone = $this->get_timezone($row->state); 	
						echo "state<br>";
					}
					
					if(empty($timezone))
					{
						$timezone = $this->get_timezone($row->country); 	
						echo "country<br>";
					} 
					
					
					/**
					* update the timezone and location
					* @var 
					* 
					*/
					
					if(!empty($timezone))
					{ 
						$data = array(
							'timezone' => $timezone, 
							'location' => $timezone
						);   
						 
						$this->db->or_where('city',$row->city);
						$this->db->or_where('state',$row->state);
						$this->db->or_where('country',$row->country);
						
						$this->db->update('fs_invited', $data);  
						
						
						if($this->db->affected_rows() != 1) 
						{
							echo "<b stle='color:red' >  timezone and location updated  $timezone </b>";  
						}
						else 
						{
							echo "<b stle='color:green' > timezone and location updated $timezone </b>"; 	
						} 
					}
					else
					{
						echo "<b stle='color:red' > no timezone found</b>"; 
					} 
					//echo "TIME ZONE " . $timezone . '<br>'; 
				}
				else
				{ 	
					//echo "empty<br>";
				} 
		   	}    
		   	
		   	
		   	
		   	echo "<hr> proccess done: affected city total = " . $city_total . ''; 
		} 
		 
		/**
		* inialized curl page 
		* @param string $location
		*  
		*/
		
		function get_timezone($location)
		{
			$url = $this->contact_url($location); 
			//echo 'city = ' . $location .'  url = ' . $url .'  <br> ' ;
			$this->xpath = $this->curl->load_content($url);   
			//echo "<br> This is timezone [" . $this->timezone() . ']';  
			return $this->timezone();
		}
		
		/**
		* get timezone xpath
		* @param string $location
		* 
		* @return url
		*/
		
		function contact_url($location)
		{
			return 'http://localtimes.info/search/?s=' . $location . '&x=0&y=0'; 
		} 
		 
		/**
		* 
		* get timezone
		* @return timezone
		*/
		
		function timezone() 
		{  
		 
			$r = $this->xpath->query("//*[@style='width:50%;']/text()"); 
			//var_dump($r);  
			
			foreach($r as $list) 
			{ 
				if(strpos($list->nodeValue, '(') > 0 ) 
				{ 
					//echo ' location timezone ' . $list->nodeValue . '<br>';	
					$timezone = explode('(', $list->nodeValue); 
				}  
			} 
			return (!empty($timezone[0])) ? str_replace(' ', '', $timezone[0])  : FALSE; 
		} 
	}
	
	
	
?>