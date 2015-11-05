<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class MY_Javascript extends CI_Javascript {
		
		function __construct() 
		{ 
			parent::__construct();
		}   
		
		function proceed($url) 
		{ 
			echo "<script> document.location = '$url'</script>";  	
		}   
	}
?>