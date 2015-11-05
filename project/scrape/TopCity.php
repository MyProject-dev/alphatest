<?php 
	include ('php_function/String/String.php'); 
	include ('php_function/Time/Time.php'); 
	require ('php_function/Database/LookbookDatabase.php');
	include ('php_function/Extends/LookbookExtends.php'); 
 	include ('php_function/Class/Lookbook.php');	   
?> 
<?php $lookbook = new Lookbook(); ?> 
 


<?php
	$topCityList = $lookbook->getTopCityArray();


	echo "<pre>";
 	print_r($topCityList);
 	 
	foreach (Time::getTimeDbFormatArray() as $key => $value) {
		echo "<br> $key => $value ";
	}



