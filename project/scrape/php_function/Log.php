<?php 
/**
*  December 31, 2014 
*/
class Log
{
	public static $executionMessage = ''; 

	function __construct()
	{ 	 
	}
 
	public static function setExecutionLog($message)
	{ 
		echo "<br> this is the log $message ";
		self::$executionMessage = self::$executionMessage  . '<br>';
		self::$executionMessage = self::$executionMessage  . $message;

	 
		echo "<br> this is the log CONCAT " . self::$executionMessage;
		return self::$executionMessage;
	}
	public static function getExecutionLog()
	{ 

		return self::$executionMessage;
	}
	public static function unsetExecutionLog()
	{ 

		return self::$executionMessage = '';
	}

}
