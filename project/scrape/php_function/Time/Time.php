<?php
/**
* 
*/ 
// echo "this is time class ";
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
		//date 2014-01-12
		//return 2014-01
		return  substr($date , 0 , strlen($date)-3); 
	}
	public static function removeLookBookTime($dateTime)
	{
		//2013-11-16T03:47:32-05:00 
		$dateTimeArray = explode('T', $dateTime); 
		// return 2013-11-16
		return $dateTimeArray[0]; 
	}  
	public static function getDateRemoveTime($dateTime)
	{ 	
	    //date time: 2013-11-16 32-05:00 
		// return 2013-11-16
		$date = explode(' ', $dateTime);
		return $date[0];
	} 
	public static function getTimeRemoveDate($dateTime)
	{
		//date time: 2013-11-16 32-05:00 
		// return 32-05:00
		$date = explode(' ', $dateTime);
		return $date[1];
	} 
	public static function getTimeDbFormatArray()
	{ 
		return array( 
	 		'08:00:00'=> '8:00 AM',
		 	'09:00:00'=> '9:00 AM',
		 	'10:00:00'=> '10:00 AM',
		 	'11:00:00'=> '11:00 AM',
		 	'12:00:00'=> '12:00 PM',
		 	'13:00:00'=> '1:00 PM',
		 	'14:00:00'=> '2:00 PM',
		 	'15:00:00'=> '3:00 PM',
		 	'16:00:00'=> '4:00 PM',
		 	'17:00:00'=> '5:00 PM',
		 	'18:00:00'=> '6:00 PM',
		 	'19:00:00'=> '7:00 PM',
		 	'20:00:00'=> '8:00 PM',
		 	'21:00:00'=> '9:00 PM',
		 	'22:00:00'=> '10:00 PM',
		 	'23:00:00'=> '11:00 PM',
		 	'00:00:00'=> '12:00 AM',
		 	'01:00:00'=> '1:00 AM',
		 	'02:00:00'=> '2:00 AM',
		 	'03:00:00'=> '3:00 AM',
		 	'04:00:00'=> '4:00 AM',
		 	'05:00:00'=> '5:00 AM',
		 	'06:00:00'=> '6:00 AM',
		 	'07:00:00'=> '7:00 AM'
		 );
	}



} 
 