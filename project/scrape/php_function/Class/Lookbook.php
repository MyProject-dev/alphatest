<?php  
/**
* created dec 20, 2014
*/
 
class Lookbook extends LookBookExted
{  
	
	public $bool = FALSE;
	public $errorLog = NULL;
	public $url = 'http://www.lookbook.nu';
	public $year = '1991';
	public $monthNumeric = 'february';
	public $monthString = 'february';
	public $day = '01';
	public $dateNumericFormat = '2010-12-24'; 
	public $dateTextFormat = 'December 12 2010'; 
	public $xpath = '';
	public $totalLook = 0; 
	public $totalFan = 0;
	public $totalHyped = 0; 
	public $totalKarma = 0;
	public $recentLookPostedStatus = array();
	public $userDomainInfo = '';
	public $email = '';
	public $lastMonthUploadLook = ''; 
	public $totalDaysPassed = 0;   
	public $timeZoneUrl = ''; 
	public $timeZone = ''; 
	public $totalMonthPassed = 0;  
	public $descriptions = array(); 
	public $description = '';  
	public $usernames = array();
	public $username = ''; 
	public $profileUrlLookTab = '';
	public $profileUrlCommentTab = ''; 
	public $profileUrlLookTabHyped = '';
	public $topCityList = array();
	public $totalHypeEachLook = 0; 
	public $previousDate = '';
	public $counter = 0; 
	public $validationUserTotalScore = 0;
	public $overallScore = 0;
	public $passingScore = 0;
	public $statusIfUserInfoPassOrNot = 0;
	public $executionMessage = '';
	public $validationPassingScore = 0;  
	public $postedLooksInTwoMonths = array();
	public $postedHypedInTwoMonths = array();
	public $postedCommentMadeInTwoMonths = array();
	public $fullName = ''; 
	public $userInformation = array();
	public $userInformation1 = array();
	public $location = '';
	public $invitedStatus = 0;


 
	public function __construct()
	{    

		// echo '<br> Lookbook start';
	}    
	public function setValidateUserInformation($userName , $userDescription , $totalScore , $overallScore , $passingScore ,
		$minimumLookInTwoMonths , $minimumHypedInTwoMonths , $minimumCommentMadeInTwoMonths  , $minimumFan , $minimumKarma)
	{ 
	   	/**
	   	* ALGORITHM: 
	   	* member that leaves in the top cities 
	   	* member who has posted 4 or more looks in (2) moths or (2) looks in 1 month (total look each month = total look / total month)
	   	* member has atleast 10 fans 
	   	* member has atleast 10 karma each look (each look karma = total karma / total look)
	   	* member has more than 100 hyped in t months ( total hyped per month (16.6 or 16) = total hyped / total months after joined)
	   	* member has more than 100 comment made in 6 months ( total comment made per month (16.6 or 16) = total comment made / total months after joined) 
	   	*/
			  
	
		// set date joined 
		if ($this->setDateJoined() == TRUE)
		{     
			if (($this->getEmail() !== NULL) || ($this->getUserDomainInfo() !== NULL))
			{ 	
 
				// initialized data
			   	$totalPostedLookInTwoMonths  = $this->getPostedLookInTwoMonthsTotal();  //$this->getTotalLookEachMonth($this->getTotalLook() , $this->getTotalMonthsPassedAfterDateJoined());  
			   	$totalFan 				     = $this->getTotalFan();
			   	$totalKarmaEachMonth         = $this->getTotalKarmaEachMonth($this->getTotalKarma() , $this->getTotalMonthsPassedAfterDateJoined()); 
			   	$totalHypedInTwoMonths 	     = $this->getPostedHypedInTwoMonthsTotal();
			   	$totalCommentMadeInTwoMonths = $this->getPostedCommentMadeInTwoMonthsTotal();  

			   	// execute validation of the user information 
			   	return $this->executeValidationUserInformation( 
			   		$totalPostedLookInTwoMonths , $minimumLookInTwoMonths ,
			   		$totalFan , $minimumFan	,
			   		$totalKarmaEachMonth , $minimumKarma ,
					$totalHypedInTwoMonths , $minimumHypedInTwoMonths ,
					$totalCommentMadeInTwoMonths , $minimumCommentMadeInTwoMonths , 
					$overallScore , $passingScore , $totalScore 
			   	);   
			}
			else
			{ 
				#Log::setExecutionLog('User don\'t have email or domain: email = ' . $this->getEmail() . ' domain = ' .  $this->getUserDomainInfo());   
			}  
		}
	}  



} 