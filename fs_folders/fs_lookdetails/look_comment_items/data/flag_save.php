<?php 
	session_start();
	require ("../../../php_functions/connect.php");
	require ("../../../php_functions/function.php");
	require ("../../../php_functions/library.php");
	require ("../../../php_functions/source.php");
	require ("../../../php_functions/myclass.php");
	$mc = new myclass();
	insert_flagged_info();
	

	function insert_flagged_info() {  
		
		$plcno        = $_GET['plcno'];
		$mno          = $_SESSION['mno'];
		$flag_date    = date("Y-m-d h:m:s");
		$flag_option  = $_GET['cbox'];
		$flag_note    = $_GET['flag_note'];

		insert(
			'fs_cflag',
			array('mno','plcno','flag_option','flag_note','flag_date'),
			array($mno,$plcno,$flag_option,tcleaner($flag_note),$flag_date),
			'flagno'
		);	
	}
	








?>