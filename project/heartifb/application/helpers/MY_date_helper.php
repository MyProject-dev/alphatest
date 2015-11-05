<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
	
	
	
	/**
	* set the time to timezone
	* @param string $timezone
	* 
	* @void
	*/
	
	function set_timezone($timezone = 'America/New_York')
	{
		date_default_timezone_set($timezone);	
	}
	
	
	
	/**
	* return the specific timezone base on the country provided.
	* @param string $location ex: country name: philippines, brazil and more
	* 
	* @return timezone timezone
	*/ 
	
	if(!function_exists('timezone')) 
	{  
		//initialize the country library
		$country = array(
			'EST'=>array('', '', ''),
			'UST'=>array('', '', ''),
			'BRZL'=>array('', '', '') 
		);
		 
		function timezone($location) 
		{
			if(!empty($location)) 
			{   
				$timezone_identifiers = DateTimeZone::listIdentifiers(); 
				$i = 0;  
				
				//check server timzone country 
				foreach($timezone_identifiers as $tz_country) 
				{     
				 	if(strpos($tz_country, $location) > 0 and strpos($tz_country, $location) != NULL) 
				 	{
						return $tz_country;	
					} 
				}   
				
				//check external timezone  
			}
			else 
			{
				return FALSE;	
			}
		} 
	}
	
	
	
	
	
	
	
	
	
	
	
?>
 