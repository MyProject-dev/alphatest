<?php 
 
	require('fs_folders/php_functions/Helper/helper.php');

	$url = $_GET['url'];
	echo "  1 url - " . $url;
	echo "post " . strpos($url, 'http://') . "<br>"; 

	if(empty(strpos($url, 'ww.'))){  
		$url = 'www.'.$url; 
	} 
	if(empty(strpos($url, 'ttp://'))){  
		$url = 'http://'.$url; 
	} 

	echo " $url ";
	exit;
    //is_allow_redirect($_GET['url'], 136);    
    //echo "url = 	$url  <br> ";
?>