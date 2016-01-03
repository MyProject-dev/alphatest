<?php 
	@session_start();   
	require("fs_folders/php_functions/connect1.php");
	require("fs_folders/php_functions/function.php");
	require("fs_folders/php_functions/myclass.php");
	require("fs_folders/php_functions/library.php");
	require("fs_folders/php_functions/source.php"); 

 	$mc      = new myclass();   
 	$article = new postarticle ( ); 
 	$image   = new resizeImage( );  
 	$mc->auto_detect_path();         

 	$mno   	     = $_SESSION['temp_mno'];  
 	$logInStatus = $_SESSION['logInStatus'];
 	 	
 
 	// echo " mno  $mno <br>";
    // 	echo "login status $logInStatus <br>"; 
    // 	exit;

	/**
	* Add activity wall profile pic for social when social atheticated user added an fs code
	* @src: social-fblogin-authenticate.php
	*/
	if(!empty($mno) and $logInStatus == 'facebook') {  
 		
 		/**
 		* Get the latest mppno
 		*/
		$mppno = $mc->member_profile_pic_query( array('mno'=>$mno  , 'type'=>'get-latest-mppno' ) ); 
          
        /**
        * Get the just joined activity wall
        */        
		$mc->add_activity_wall_post ($mno, $mppno, 'Joined', 'fs_member_profile_pic', $mc->date_time);

	}  

	/**
	* Redirect to home page after After adding activity post 
	* and processing the social login and signup 
	*/
    $mc->go( 'home' );