<?php require("fs_folders/php_functions/Helper/helper.php");
$redirect = TRUE;
$url = (!empty($_GET['url'])) ? $_GET['url'] : "";  
$url = str_replace('http://', '', $url); 
$url = str_replace('www.', '', $url);   
// echo "Url = $url <br>";
$url = "http://www.".$url; 
if($redirect) { 
  print("Redirecting...."); 
  echo " <script> window.location = '$url' </script>"; 
  die();
} else {
	print("Failed to redirect"); 
	echo " <script> window.location = 'home' </script>"; 
}
