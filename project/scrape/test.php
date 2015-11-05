<?php
	session_start();


	// report error
	error_reporting(E_ALL);
	ini_set('display_errors', '1');   

    // call the file 	  
 	include ('php_function/Program.php');



    echo "This is the test <br>";
   	// declare classes
   	$database = new Database();
   	$program  = new Program($database);
   	$lookbook = new Lookbook(); 

   	// pass the database accessor   
   	LookbookDatabase::$database = $database; 

   	// connect   
   	$program ->ConnectToDatabase(); 
 	 
   	// test   
   	// $memberInfo = $lookbook->isUserExistToFs('jesus@gmail.com' , 'jesus erwin suarez');
 	 
	 // print_r($database->getResult());
	 // echo "<hr>";
	// $memberInfo = $lookbook->checkIfLookBookUserExistToFs('msmjsuarez@gmail.com' , 'mj');
 	
	// print_r($database->getResult());	
	// echo "<hr>"; 
 ?> 
 <html>
	<head> 
		<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
		<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
		<title><?php echo $_GET['location'] . ' Is RUnning..'; ?></title>
		<style type="text/css"> .red { color:red; } .green { color:green; } </style>  \
		<script type="text/javascript">  
	        jQuery(window).load(function(){ 
                location.reload(); 
	        });
		</script> 	
	</head>
	<body>  
		<?php $lookbook->printAlgorthm(); ?> 
		<?php if ( isset($_GET['location'])) {  $program->scrapeStarts($_GET['location'] , $lookbook);  }  ?>
	</body> 
</html>




