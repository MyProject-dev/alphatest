<?php
/**
* 
*/
class Time
{ 
	public function __construct()
	{   
		
		echo '<br> Time start';
	} 
	public static function getTotalDaysPassed($startDate , $currentDate=NULL)
	{  

		if ($currentDate=NULL) $currentDate = date('Y-m-d');  
		$datetime1 = date_create($startDate);
		$datetime2 = date_create($currentDate);
		$interval  = date_diff($datetime1 , $datetime2);
		$response  = $interval->format('%R%a days'); 
		$totalDaysPassed  = intval($response);   
		// echo "<br>  total days ago $response";  
		return $totalDaysPassed; 
	}
	public static function removeDashAndDay($date)
	{ 

		return  substr($date , 0 , strlen($date)-3); 
	}
	public static function removeLookBookTime($dateTime)
	{
		//2013-11-16T03:47:32-05:00 
		$dateTimeArray = explode('T', $dateTime); 
		// return 2013-11-16
		return $dateTimeArray[0]; 
	}
} 
 