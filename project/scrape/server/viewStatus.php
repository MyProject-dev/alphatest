<?php  
    require ("../../../fs_folders/php_functions/connect.php"); 
    require ("../../../fs_folders/php_functions/function.php");
    require ("../../../fs_folders/php_functions/library.php");
    require ("../../../fs_folders/php_functions/source.php");
    require ("../../../fs_folders/php_functions/myclass.php"); 
 
    require ("../../../fs_folders/php_functions/Email/Email.php");
    require ("../../../fs_folders/php_functions/Time/Time.php");
    require ("../../../fs_folders/php_functions/Database/LookbookDatabase.php");  
    require ("../../../fs_folders/php_functions/Extends/LookbookExtends.php");  
    require ("../../../fs_folders/php_functions/Class/Lookbook.php");  
    require ("../../../fs_folders/php_functions/Program.php");  

 

    // declare classes
    $mc              =  new myclass();     
    $pa              =  new postarticle( ); 
    $ri              =  new resizeImage (); 
    $sc              =  new scrape();   
    $lookbook        =  new lookbook();   

    LookbookDatabase::$database = $db; 

 





  echo " total result ." . count(LookbookDatabase::getAllApprovedInvitedEmail());


$lookbook->sendInvitationToInvitedEmail(LookbookDatabase::getAllApprovedInvitedEmail() , $sc , $mc); 
$id = Database::selectV1('fs_invited' , 'invited_id,invited_fn,invited_email' , "like 'Lexicon of Style Alexandr' limit 1"); 
 echo "<hr>";












  
  $jason = ' 
  		{employees:[
  			{firstname:John, lastname:Doe}, 
  			{firstname:Jesus, lastname:Suarez},
  			{firstname:Francis, lastname:Yacapin}
  		]}; 
  '; 


  // echo '<br>' . $jason . '<br><br>';  
	$counter = (!empty($_GET['counter'])) ? $_GET['counter'] : 0; 
	echo 'Server Refreshed' . $counter . ' Times';
 










 ?>
