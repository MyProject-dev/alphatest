<?php      
	// report error
	error_reporting(E_ALL);
	ini_set('display_errors', '1');   

    // call the file 
  include ('php_function/Program.php');
   	
   	// declare classes
   	$database = new Database();
   	$program  = new Program($database);
   	$lookbook = new Lookbook(); 

   	// pass the database accessor   
   	LookbookDatabase::$database = $database; 

   	// connect   
   	$program ->ConnectToDatabase(); 
 
  
  // LookbookDataBase::deleteAllScrapedVersion(1);  

  echo "<pre>"; 
  echo "<br>total result";
  $totalResult = Database::selectV1('fs_invited' , 'count(*)' , 'scrape_version = 1 order by invited_id desc');      
  print_r($totalResult);


  echo "<br>array result";

	$response = Database::selectV1('fs_invited' , '*' , 'scrape_version = 1 order by invited_date desc');   
	
	print_r($response); 


echo "<br> mrjesus erwin suarez email";
  $response = Database::selectV1('fs_invited' , '*' , "invited_email = 'mrjesuserwinsuarez@gmail.com'");   
  
  print_r($response); 
 

 
