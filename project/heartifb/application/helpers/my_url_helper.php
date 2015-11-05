<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


	function change_sl2_slash_url($url) 
	{ 
		/**
		* 
		* s12 equavalent ro //
		* 
		*/
		return str_replace('sl2', '//', $url);
	} 
	
	function change_sl1_slash_url($url) 
	{ 
		/**
		* 
		* s12 equavalent ro //
		* 
		*/
		return str_replace('sl1', '/', $url);
	} 
	
	function change_qm_question_url($url) 
	{ 
		/**
		* 
		* s12 equavalent ro //
		* 
		*/
		return str_replace('qm', '?', $url);
	} 
	
	/**
	* 
	* fetcht the entire url and  
	* @return the last request url only
	* 
	*/
	
	function request_url() 
	{ 
  		$url = full_url(); 
		$url = explode("http",$url);  
		print_r($url);
		echo("total " . count($url));
		return (!empty($url[count($url)-1]))? "http" . $url[count($url)-1] : ''; 
	}  
	
	/**
	* 
	* @return the full site url  
	* 
	*/ 
	
	function full_url() 
	{ 
		return "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; 
	}
?>