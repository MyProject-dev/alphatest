<?php
/**
* jan 1, 2015
*/

class String
{
	
	function __construct()
	{ 
	}
	public static function removeLeadingAndTrailingSpaces($string)
	{  
		$string = ltrim($string);
		$string = rtrim($string);  
		return $string; 
	}
}

