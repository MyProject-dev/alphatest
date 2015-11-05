<?php 
class Create_own_class {
	
	function __construct() 
	{ 
		
		$this->load->library("Test_library");
		
		echo " " . $this->Test_library->test(); 
	}
	
	function test() 
	{ 
		echo "this is a test";
	}
}

?>