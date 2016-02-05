<?php 
	session_start(); 

    require("../../../fs_folders/php_functions/connect.php");
	require("../../../fs_folders/php_functions/function.php");
	require("../../../fs_folders/php_functions/myclass.php"); 
	$mc = new myclass(); 
	unset($_SESSION['adm_no']);

	$mc->go("../../../adminlogin");

?>