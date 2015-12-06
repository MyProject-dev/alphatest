<?php 
	@session_start(); 
    error_reporting(0);
	#xampp version : win32 v 1.8.1 
    // $_SERVER['HTTP_HOST'] = 'localhost';
// echo " host " . $_SERVER['HTTP_HOST'];
	if ($_SERVER['HTTP_HOST'] == 'localhost' || $_SERVER['HTTP_HOST'] == '192.168.1.126'|| $_SERVER['HTTP_HOST'] == '192.168.254.102')
 	{
 		// mysql_connect("localhost","root","replacement") or die(mysql_error()); Nnetbook
 		$con = mysql_connect("localhost","root","") or die(mysql_error()); //laptop
 	 	$dbName = "fs_records";
 		if ( $con  ) 
 		{
 		     //echo " connected to localhost <br>";
 		}
 		else 
 		{ 
 			  // echo " not connected to localhost <br>";
 		}

        $_SESSION['tagPath']     = 'http://localhost/fs/new_fs/alphatest/fs_folders/images/uploads';
        $_SESSION['tagPatShort'] = 'fs_folders/images/uploads';
        $_SESSION['is_online']   = 'no';

    }
 	else
 	{
		// echo "online connect <br>";
 		// mysql_connect("localhost","ricopeco_fsgjaro","d7)pIG=#%{oy") or die(mysql_error()); // fs 
 		// $dbName = "recopeco_fs_records_v1"; #ss
 	 	// $dbName = "ricopeco_fs_records_v1"; #fs
 		$dbName = "ricopeco_fs_records_v1_testing_1"; #fs  
 		$con  = mysql_connect("localhost","ricopeco_jesus7","Q?l-tpVNV)v+") or die(mysql_error()); // swag  
 		
 		if ( $con  ) 
 		{
 		 	// echo " connected to online <br>";
 		}
 		else 
 		{ 
 			// echo " not connected to online <br>";
 		}

        $_SESSION['tagPath']      = 'http://dev.fashionsponge.com/fs_folders/images/uploads';
        $_SESSION['tagPatShort']  = 'fs_folders/images/uploads';
        $_SESSION['is_online']    = 'yes';
 	} 
 	 $dbConn = mysql_select_db($dbName) or die("dili ka-connect sa database"); //fs

 	if ( $dbConn ) 
 	{ 
 		// echo "connected to $dbName <br> ";
 	}
 	else  
 	{
 		// echo "not connected to $dbName <br> ";
 	} 
 	// echo " database $dbName <br> "; 
?>
