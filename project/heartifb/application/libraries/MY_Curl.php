<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class MY_Curl extends CI_Curl {
		
		function __construct() 
		{ 
			parent::__construct();
		}   
		 
		 
		/**
		* load the page u want to scrape using xpath
		* @param string $url
		* 
		* @return xpath
		*/
		 
		function load_content($url) 
		{   
			echo("<br><br>url $url<br><br>");
			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER , true);
			$cl=curl_exec($ch); 
			
			if($cl)
			{
				echo("<br><p style='color:green'>success</p><br>"); 
			}
			else
			{
				echo("<br><p style='color:red'>failled</p><br>"); 
			}
			  
			@$dom = new DOMDocument();
			@$this->res = $dom->loadHTML($cl);   
			$xpath= new DomXPath($dom);   
			return $xpath;  
		}   
	}
?>