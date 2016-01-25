<?php
@session_start();
error_reporting(0);
#xampp version : win32 v 1.8.1
// $_SERVER['HTTP_HOST'] = 'localhost';
// echo " host " . $_SERVER['HTTP_HOST'];




/**
 * EXTRA FUNCTIONS AND THIS MUST BE A GENERAL FUNCTION ALL THE PAGES USES THIS
 */

if(!function_exists('environment')) {

	function environment() {
		$fullUrl =  "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		$development = strpos($fullUrl, 'dev.') ;
		$staging = strpos($fullUrl, 'stage.') ;
		$production = '';
		$integration = strpos($fullUrl, 'intg.') ;

		//Add conditions
		if($development > -1) {
			return 'dev.';
		} else if ($staging > -1) {

			//Return as staging site
			return 'stage.';
		} else if ($integration > -1) {

			//Return as integration
			return 'intg.';
		} else {

			//Return as production
			return '';
		}
	}
}

//echo "environment = " .  environment() . '<br>';

/**
 * CONNECT TO DATABASE
 */

if ($_SERVER['HTTP_HOST'] == 'localhost' || $_SERVER['HTTP_HOST'] == '192.168.1.126'||  strpos($_SERVER['HTTP_HOST'], '168') > -1) {
	// mysql_connect("localhost","root","replacement") or die(mysql_error()); Nnetbook
	$con = mysql_connect("localhost","root","") or die(mysql_error()); //laptop
	$dbName = "fs_records";
	if ( $con  ) {
		//echo " connected to localhost <br>";
	} else {
		// echo " not connected to localhost <br>";
	}

	$_SESSION['tagPath']     = 'http://localhost/fs/new_fs/alphatest/fs_folders/images/uploads';
	$_SESSION['tagPatShort'] = 'fs_folders/images/uploads';
	$_SESSION['is_online']   = 'no';

} else {

	if(environment() == 'dev.') {

		$dbName = "ricopeco_fs_development";
		$dbUsername = 'ricopeco_jesus7';
		$dbPassword = 'Q?l-tpVNV)v+';

	} else if (environment()  == 'stage.') {

		$dbName = "ricopeco_fs_staging";
		$dbUsername = 'ricopeco_jesus7';
		$dbPassword = 'Q?l-tpVNV)v+';

	} else if (environment()  == 'intg.') {

		$dbName = "ricopeco_fs_integration";
		$dbUsername = 'ricopeco_jesus7';
		$dbPassword = 'Q?l-tpVNV)v+';

	}else {

		$dbName = "ricopeco_fs_production";
		$dbUsername = 'ricopeco_jesus7';
		$dbPassword = 'Q?l-tpVNV)v+';

	}

	$con  = mysql_connect("localhost",$dbUsername,$dbPassword) or die(mysql_error()); // swag

	$_SESSION['tagPath']      = 'http://' . subDomain . 'fashionsponge.com/fs_folders/images/uploads';
	$_SESSION['tagPatShort']  = 'fs_folders/images/uploads';
	$_SESSION['is_online']    = 'yes';

	if ( $con  ) {
		// echo " connected to online <br>";
	} else {
		// echo " not connected to online <br>";
	}
}

$dbConn = mysql_select_db($dbName) or die("dili ka-connect sa database"); //fs

if ( $dbConn ) {
	// echo "connected to $dbName <br> ";
} else {
	// echo "not connected to $dbName <br> ";
}
// echo " database $dbName <br> ";

/*
echo "Db $dbName <br>";
echo "user $dbUsername  <br>";
echo "pass $dbPassword <br>";

*/








/**
 * SET UP SOME FUNCTIONALITY THAT CAN BE USE ALL OVER THE SITE
 */
