<?php
/**
*
*/

include ('php_function/String/String.php');  
include ('php_function/Log/Log.php');  
include ('php_function/Database/Database.php');
include ('php_function/Time/Time.php'); 
require ('php_function/Database/LookbookDatabase.php');
include ('php_function/Extends/LookbookExtends.php'); 
include ('php_function/Class/Lookbook.php');

class Program 
{
	private $database = '';
	public function __construct($database)
	{ 
		echo '<br> Program start now';
		$this->database = $database;
		$this->ConnectToDatabase($database); 
	}
	public function ConnectToDatabase()
	{  
	 	if ($this->database->connect() === TRUE)
	 	{
	 		echo '<br> connected to databse ';
	 	} 
	 	else
	 	{
	 		echo '<br> not connected to databse';
	 	}
	}
	public function scrapeStarts($location , $lookbook)
	{

		$minimumLookInTwoMonths = 4;
		$minimumHypedInTwoMonths = 10;
		$minimumCommentMadeInTwoMonths = 10;  
		$minimumFan = 10;
		$minimumKarma = 10; 
		$totalScore = 0; 
		$overallScore = 0; 
		$passingScore = -2;   
		$counter = 0;
		
		/**
		* set session
		* @var 
		* 
		*/
		 
		if($_SESSION[$location] == NULL)
		{
			$_SESSION[$location] = 0;	
		}
		else
		{
			$_SESSION[$location]++;		 
		}



        echo "Location $location <br>";
		LookbookDatabase::setLastPageScrapped($location);

		while ($counter == 0)
        { 
         
        	/**
			* set sesion incase of the refresh it will continue the page scrapping
			* @var 
			* 
			*/
            $newPage = LookbookDatabase::getLastPageScrapped()+$counter;
				 
			if($_SESSION[$location] == 0)
			{
                $_SESSION[$location] = $newPage;
                $_SESSION[$location] = rand(100,1000);
            } else {
                $_SESSION[$location] = rand(100,1000);
            }
			 

			  
			  echo "Verry cool at this moment <br>";
			  
			echo " session counter  = " . $_SESSION[$location] . '<br>';
			/*   
			echo "<pre>";
			echo "<h3> class Lookbook : initialized </h3>"; 
			echo "<h3> Scrape Location : $location </h3> ";  
			echo "<h3> page : " . LookbookDatabase::getLastPageScrapped() + ' counter = ' . $counter . ' page plus new page session  = ' . $_SESSION[$location] . ' newpage = ' . $newPage;  
 			*/
 			
 			
            $lookbook->setSourceUrlLocation($location , $_SESSION[$location]);
            //initialized and set xpath
		  	$lookbook->setUsernamesAndDescription($lookbook->getSourceUrlLocation());
 
            print_r($lookbook->usernames); 

			$lookbook->usernames    = $lookbook->getUsernames();
			$lookbook->descriptions = $lookbook->getDescriptions();
			$lookbook->setPreviousMonth(date('Y-m-d'));
			//echo "<br>getPreviousMonth = " .$lookbook->getPreviousMonth();
			$lookbook->setLocation($location);
			///echo "<h3> Total People found: " .count($lookbook->username). " </h3>";

            for ($i=0; $i < count($lookbook->usernames); $i++)
            //for ($i=0; $i < 1; $i++)
			{
				//set log execution
			    Log::unsetExecutionLog();   

			    //set user url
				$lookbook->setUserProfileUrl($lookbook->usernames[$i]);     

			    // set comment made tab
				$lookbook->initPhpCurl($lookbook->getUserProfileUrlCommentTab());   	
				$lookbook->setPostedCommentMadeInTwoMonthsTotal($lookbook->getPreviousMonth());
					  
				// set look tab 
			    $lookbook->initPhpCurl($lookbook->getUserProfileUrlLookTab());    
				$lookbook->setPostedLookInTwoMonthsTotal($lookbook->getPreviousMonth());

				// set comment hyped tab
				$lookbook->initPhpCurl($lookbook->getUserProfileUrlLookTabHyped());   
				$lookbook->setPostedHypedInTwoMonthsTotal($lookbook->getPreviousMonth());

				// sepecific username and desc
				$lookbook->setSpecificDescription($i);
	 			$lookbook->setSpecificUsername($i);

	 			// set user attributes 
	 			
	 			$lookbook->setTotalLook(); 
	 			$lookbook->setTotalKarma();
	 			$lookbook->setTotalHyped();
	 			$lookbook->setTotalCommentMade($lookbook->getUserProfileUrlCommentTab()); 
	 			$lookbook->setFullName();
	 			$lookbook->setEmail();
	 			$lookbook->setTimeZone($location); 
	 			$lookbook->setUserDomainInfo();
	 			$lookbook->setInvitedStatus(); 
	 			$lookbook->setUserInformation(); 
	 			
	 			
	 			/*
				echo "  $i .)";   
				echo '<br> Time zone:  ' . $lookbook->getTimeZone();
				echo '<br> Full Name:  ' . $lookbook->getFullName();
				echo '<br> Invited Status:  ' . $lookbook->getInvitedStatus();
				echo "<h3> ready to save information bellow </h3>";  
				print_r($lookbook->getUserInformation());    
				*/
				
				echo '<br> Full Name:  <B>' . $lookbook->getFullName() . '</B>';

			 	//start the validation 
				$isPassed = $lookbook->setValidateUserInformation($lookbook->usernames[$i] , $lookbook->descriptions[$i] , $totalScore , $overallScore , $passingScore , $minimumLookInTwoMonths , $minimumHypedInTwoMonths , $minimumCommentMadeInTwoMonths  , $minimumFan , $minimumKarma);   
					
				
	 			// check if user passed 
				$isPassed = TRUE; 
				
				if ($isPassed == TRUE) 
				{   
					if ($lookbook->isUserWithEmailOrBlog() == TRUE) 
					{   
						echo "<br><b>user has email</b>";	
						if (LookbookDatabase::isUserExistToFs($lookbook->getEmail(), $lookbook->getFullName()) == TRUE)
					   	{      
					   		echo "<br><b style='color:red' >user exist no insert or update happen</b>"; 
					   	}   
					   	else
					   	{      
					  		echo "<br><b style='color:yellow' > user email didnt exist to fs db</b>";    
						 	if (LookbookDatabase::addInvitedUser($lookbook->getUserInformation())) 
						 	{
						 		echo "<br><b style='color:green'>user email Inserted</b>";
						 	}
						 	else
						 	{
						 		echo "<br><b style='color:red'>user email not Inserted</b>";
						 	}   
					   	}
					}
					else
					{
						echo "<br><b style='color:red'>user do not have email</b>";
					}
		   		}
				else
				{ 
					echo "<br><b> user didn't passed </b>";
					#Log::setExecutionLog('User dosnt passed the qualification');     						
				} 
				
				
				/*
				echo '<br> EXUCUTION LOG: ' . Log::getExecutionLog();
	 			echo '<br> Passing Score:  ' . $lookbook->getPassingScore(); 
				echo '<br> Total Score: ' . $lookbook->getTotalScore(); 
				echo '<br> pass or not: ' . $lookbook->isUserPassedQualification(); 
				echo '<br> Over all Score:  ' . $lookbook->getOverAll();
				echo '<br> Profile url Look tab:  ' . $lookbook->getUserProfileUrlLookTab();
				echo '<br> Email:  ' . $lookbook->getEmail();
				echo '<br> Full Name:  ' . $lookbook->getFullName();
				echo '<br> Time Zone:  ' . $lookbook->getTimeZone();
				echo '<br> User Domain:  ' . $lookbook->getUserDomainInfo(); 
				echo '<br> description:  ' . $lookbook->description[$i]; 
				echo "<hr><hr><hr><hr><hr><hr><hr><hr><hr>";  
				
				*/
				
				
				
			} 
			
			$_SESSION[$location] = $_SESSION[$location] + 1;
			$counter++; 
			
		} 
	} 
}