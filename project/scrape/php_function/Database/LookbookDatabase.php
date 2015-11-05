<?php
/**
* 
*/
class LookbookDataBase
{ 
	public static $database = '';
	public static $invited_id = 0;
	public static $page = 0;
	
	function __construct()
	{    		
		echo '<br> LB:DB starts '; 
	}
	public static function deleteAllScrapedVersion($scrapedVersion)
	{ 
	   	if ( self::$database->delete('fs_invited' , "scrape_version = $scrapedVersion")) 
	   	{
		    echo "<br> all deleted scrape version = 1";
	   	}
	   	else
	   	{
	    	echo "<br> failled to delete scrape version 1";
	  	}   
	  	// echo " this is the method";
	}
	public static function isUserExistToFs($email , $name)
	{ 
		if($email != NULL || $email != "" || $email != " ") 
		{
			// invited person is with email 
			self::$invited_id = 0; 
            echo "Checking email if exist <br> \n";
            $id1 = Database::selectV1('fs_invited', 'invited_id,invited_fn,invited_email', " invited_email LIKE '%$email%'");
           	echo "<pre> <h3> is email exist? email = $email </h3>"; 
           	
           		 
           		print_r($id1);
           	echo "</pre>";
            self::$invited_id = (!empty($id1[0]['invited_id'])) ? $id1[0]['invited_id'] : NULL;
             
            
            if (self::$invited_id != NULL) 
            {
            	if(count($id1) > 1)
	            { 
	            	echo "multiple email found <br>";
	            	if($database->delete("fs_invited','invited_email  LIKE '%$email%'"))
	            	{
						echo "<br> multiple email successfully deleted <br>";	
						return FALSE;
					}
					else
					{
						echo "<br> multiple email failed deleted <br>";	
					} 
				}
				else
				{
					echo "dont have multiple email <br>";
				}
            	echo "<br> <b style='color:red' >user email exist</b>";
                return TRUE;     
            } 
            else 
            {
            	echo "<br> <b style='color:green' >user email not   exist</b>";
                return FALSE;
            } 
		}  
		else 
		{
			// no email not exist	 
			echo "<br> <b style='color:red' >user email don't have email</b>";
			return false;
		} 
	} 
	public static function getInvitedId()
	{
		return self::$invited_id;
	}
	public static function saveLookBookUser($userEmail , $userName , $userDomainInfo , $userDescription , $dateJoinedLookBook , 
		$urlSource , $urlPage ,  $urlLocation  , $timeZone , $totalHyped , $totalKarma , $totalCommentMade , $totalFan , 
		$totalLookUploadedIntwoMonths , $totalHypePerMonth , $totalCommentMadePerMonths)
	{   
		return;
	}  
	public static function updateInvitedUser($values = array() , $where)
	{    
		// echo "<h2> updating the information here </h3>";
		// echo "<pre>"; 
		// print_r($values); 
		// echo "<br>invited_id = $where";
		return self::$database->update('fs_invited' , $values , $where);    
	}   
	public static function addInvitedUser($values = array())
	{   

		// echo "<h2> updating the information here </h3>";
	 	echo "<pre> to be insert"; 
	 	
	 	
	 	
	 	
	 	
	 	 print_r($values);
 
		return self::$database->insert('fs_invited' , $values);  
	}   
	public static function setLastPageScrapped($location)
	{	
		// $page = array(); 
		// SELECT MAX(article) AS article FROM shop;
		$page = Database::selectV1('fs_invited' , 'Max(page)' , "location = '$location' ");  
		echo "<pre>";  
		print_r($page);  	 
		$pageNumber = (!empty($page[0]['Max(page)'])) ?  $page[0]['Max(page)']  : 1 ;  
 		$pageNumber++;  
		echo "max page  = " .  $page[0]['Max(page)'] . ' new page for max ' . $pageNumber;  
		self::$page = rand(100,500); // $pageNumber;
	}
	public static function getLastPageScrapped()
	{
        return self::$page;

	} 
}  