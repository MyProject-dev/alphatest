<?php  
	error_reporting(E_ALL);
	ini_set('display_errors', '1'); 
?>



<html>
	<head> 

		<script type="text/javascript">

		</script>
	</head>
	<body>  
		<?php
		// $xml =  file_get_contents("http://lookbook.nu/elodieinparis");

		// $result = $xml->xpath("//*[@id='userheader']/div/div[1]/h1/a");

		// print_r($result);
		?>
		 
 
		 <?php
		// $xml = simplexml_load_file("phttp://lookbook.nu/elodieinparis");
		
		// $result = $xml->xpath("//*[@id='userheader']/div/div[1]/h1/a");
		// print_r($products);
		 ?>

		 <?php
			// to retrieve selected html data, try these DomXPath examples:

			
			// $doc = new DOMDocument();
			// $doc->loadHTMLFile($file);

			// $xpath = new DOMXpath($doc);

			// example 1: for everything with an id
			//$elements = $xpath->query("//*[@id]");

			// example 2: for node data in a selected id
			//$elements = $xpath->query("/html/body/div[@id='yourTagIdHere']");

			// example 3: same as above with wildcard
			// $elements = $xpath->query("//*[@id='userheader']/div/div[1]/h1/a");

			// print_r($elements);

			// if (!is_null($elements)) {
			//   foreach ($elements as $element) {
			//     echo "<br/>[". $element->nodeName. "]";

			//     $nodes = $element->childNodes;
			//     foreach ($nodes as $node) {
			//       echo $node->nodeValue. "\n";
			//     }
			//   }
			// }



		if ( isset($_POST['url'])) {
			get_look_book_usernameinfo($_POST['url']); 	 
		} 
		function get_usernames_users($array = array())
		{ 

			// page_end total = 38751
			// page_start = 1 
			// $query['page_start']=(!empty($array['page_start']))?intval($array['page_start']):'';
			// $query['page_end']=(!empty($array['page_end'])) ? intval($array['page_end']):''; 
			$query['url1']=$query['url']='http://lookbook.nu/search/users?gender=both&locations%5B%5D=new-york&page=123&q=&r=5&sort=newest&time=';
			$c=0;   
			//for ($i=$query['page_start']; $i <=$query['page_end'] ; $i++) {   
			$query['url']=$query['url1'].$i;//concat url and page 
			echo "<h3> url = ".$query['url'].'</h3><br>';
			$ch = curl_init("$query[url]");  
            curl_setopt( $ch , CURLOPT_RETURNTRANSFER , true ); 
            $cl = curl_exec( $ch );   
            @$dom = new DOMDocument(); 
            @$res=$dom->loadHTML($cl); 
            $xpath = new DomXPath($dom);   
       		// query the username all of the usernames using xpath
           	$anchors = $xpath->query("//*[@data-label='search - users']/a");  
           	$description = $xpath->query("//*[@class='grey less_linespaced least_topspaced force_wrap']");  
	  
				$desc=array();
				$c=0; 
			  	foreach ($description as $d) 
			  	{
 			 		$desc[$c] = $d->nodeValue; 
 			 		$c++;
			 	}   
   			$c=0;
			foreach($anchors as $a) {    
				$d=$desc[$c];
			    $username1 = $a->getAttribute("href"); 
			    $username1 = str_replace('/fan','',$username1); 
			    echo "<br><br><br><span id='query-response' >$c.) $username1 <b>desc:</b> $d <br></span> "; 
 			    $username[$c]['username'] = $username1; 
 			    $c++;     
 			    $look_tab="http://lookbook.nu$username1/looks";  
 			    echo "  $look_tab <br>"; 
			}   
		}   
		function get_look_book_usernameinfo($url) 
		{  

			$lookbook = new Lookbook($url); 
			$lookbook->getDateJoined();
			$lookbook->setTimeZone('MANILA');
			$lookbook->setSourceUrlLocation('NEW YORK' , 1); 
			$lookbook->setUsernamesAndDescription($lookbook->getSourceUrlLocation()); 
			$lookbook->setUserProfileUrl('/user/18883-Lua-P');
			 

			echo '<hr> <h1> setUserProfileUrl()  </h1>';   
			echo ' loobook domains '.$lookbook->getUserDomainInfo();
				echo '<hr> <h1> setUserProfileUrl()  </h1>';   
 
			 
			echo '<br> getProfileUrLookTab ' . $lookbook->getProfileUrLookTab();
			echo '<br> getProfileUrlCommentTab ' . $lookbook->getProfileUrlCommentTab(); 
				
			echo '<br> totalComment made '.$lookbook->getTotalCommentMade($lookbook->profileUrlCommentTab);

		 
			echo '<hr> <h1> getUsernames() getDescription() </h1>';  
				echo "<pre>";
					print_r($lookbook->getUsernames());
					print_r($lookbook->getDescriptions());
				echo "</pre>";


			echo '<hr> <h1> getSourceUrlLocation() </h1>';  
			echo '<br> get Source Url Location = '.$lookbook->getSourceUrlLocation(); 
			echo '<hr> <h1> timezone() </h1>'; 
			echo '<br> timezone = '.$lookbook->getTimeZone();
			echo '<br> timezone url = '.$lookbook->getTimeZoneUrl(); 
			echo '<hr> <h1> getTotalMonthsPassedAfterDateJoined() </h1>';
			echo '<br> total month after joined date ' . $lookbook->getTotalMonthsPassedAfterDateJoined();
			echo '<hr> <h1> getTotalDaysPassedAfterDateJoined() </h1>';
			echo '<br> total days after joined date ' . $lookbook->getTotalDaysPassedAfterDateJoined(); 
			echo '<hr> <h1> getTotalPostedLookInTwoMonths() </h1>'; 
			echo '<br> Total Look Uploaded In Two Months ' . $lookbook->getTotalPostedLookInTwoMonths($lookbook->getRecentPostedLooksInTheMonthsArray()); 
			echo '<br> Last Month User Posted Look ' . $lookbook->getRecentMonthUserUploadLook(); 
			echo '<hr> <h1> getEmail() </h1>' . $lookbook->getEmail(); 
			echo '<hr> <h1> getEmailExtraDomain() </h1>'; 
			echo 'extra domains from email ' . $lookbook->getEmailExtraDomain();

			
 			

			/* 
			$lookbook->getDateJoined();  

			$lookbook->getTotalLook();

			$lookbook->getTotalFan(); 

			$lookbook->getTotalKarma(); 
 
			echo "<br> url = ".$lookbook->url; 

			echo "<br> totalLook = ".$lookbook->totalLook;

			echo "<br> totalFan = ".$lookbook->totalFan;

			echo "<br> totalHype = ".$lookbook->totalHype; 

			echo "<br> year = ".$lookbook->year;

			echo "<br> day = ".$lookbook->day;

			echo "<br> monthNumeric = ".$lookbook->monthNumeric;

			echo "<br> monthString = ".$lookbook->monthString;

			echo "<br> dateTextFormat = ".$lookbook->dateTextFormat;

			echo "<br> dateNumericFormat = ".$lookbook->dateNumericFormat; 

			echo "<br> totalDaysPassed From Registered Until Now = ".$lookbook->totalDaysPassed; 
 
			echo '<br> total hype each look '.$lookbook->getTotalHypeEachLook($lookbook->totalHype , $lookbook->totalLook);
 
			$lookbook->getRecentPostedLooksInTheMonthsArray(); 
 			*/
 			// $lookbook->totalDaysPassed = 10;

			/** 
			* validation and conditions here..
			*/     
 			/*
			echo " this page is to validate output <br>";
			if ($lookbook->validateOutput() === NULL)
			{
				echo "<span style='green' > this data is ready to scrape and save to database </span>";
			}
			else
			{
				echo "<span <span style='green' > something wrong with this lookbook user </span>";
			}



			*/
		} 
		function get_blog_tlook_location( $url ) 
		{   
          $ch = curl_init("$url");  
          curl_setopt( $ch , CURLOPT_RETURNTRANSFER , true ); 
          $cl = curl_exec( $ch );   
          @$dom = new DOMDocument( ); 
          @$res=$dom->loadHTML($cl); 
          $xpath = new DomXPath($dom);  
          // get total look   
          	//get name
          	echo " <br> name: "; $divs = $xpath->query("//*[@id='userheader']/div/div[1]/h1/a");   foreach($divs as $div) {  echo "   $div->nodeValue";  }      
            // get email  
           	echo "<br>  email : "; $divs = $xpath->query("//*[@id='userabout']");    foreach($divs as $div) {   echo " $div->nodeValue";  } 
           /**
            *get domains
            *
            **/  
            //Website 
            echo "<br>  website : "; $divs = $xpath->query("//*[@id='userabout']/a[2]"); foreach($divs as $div) { echo " $div->nodeValue";  }
            // lookbook 
            echo "<br>  lookbook : "; $divs = $xpath->query("//*[@id='side_col']/div[3]/div[1]/div[4]/div[1]/a"); foreach($divs as $div) { echo " $div->nodeValue";  }
            // blog 
            echo "<br>  blog : "; $divs = $xpath->query("//*[@id='side_col']/div[3]/div[1]/div[4]/div[7]/a"); foreach($divs as $div) { echo " $div->nodeValue";  }
             // tlook  
            echo "<br>  tlook : "; $divs = $xpath->query("//*[@id='side_col']/div[2]/ul/li[2]/span[1]"); foreach($divs as $div) { echo " $div->nodeValue";  }
            // country
            echo "<br>  country : "; $divs = $xpath->query("//*[@id='userheader']/div/div[1]/p/a[2]"); foreach($divs as $div) { echo " $div->nodeValue";  }
             // state
            echo "<br>  state : "; $divs = $xpath->query(" //*[@id='userheader']/div/div[1]/p/text()[2]"); foreach($divs as $div) { echo " $div->nodeValue";  }   
           	// echo "<br>  usernames : "; $divs = $xpath->query("//a[@class='image']/@href");    foreach($divs as $div) {   echo " <a href=' http://lookbook.nu/$div->nodeValue/following?page=1'> $div->nodeValue </a> <br>";  } 
   			// get total following 
   			 echo "<br>  total following : "; $divs = $xpath->query("//*[@id='fanned_subtab']/a"); 
   			 foreach($divs as $div) {   
   			 	$tfollowing =  str_replace("People", '', $div->nodeValue);  
   			 	$tfollowing =  str_replace("(", '', $tfollowing);  
   			 	$tfollowing =  str_replace(")", '', $tfollowing);  
			}               	
           	$c=0;
           	echo " =  $tfollowing <br>";
           	echo "<br> usernames: <br>";
           $anchors = $xpath->query("//*[@data-label='user profile - fanned.users']/a");
			foreach($anchors as $a) { 
				$c++;
			    // print $a->nodeValue." - ".$a->getAttribute("href")."<br/>"; 
			    //following usernames
			    $username=$a->getAttribute("href"); 
			    $username=str_replace('/fan','',$username);

			    echo "$c.) $username <br>"; 
			} 
           	// action_btn fan-button fan 
      	} 
		// Jessica R. hapa artist from south bay area, ca, united states fan 77,205 fans 291 looks
		$url =  "http://lookbook.nu/willaaaa";
		$url =  "http://lookbook.nu/zoesuen";
		// $url =   "http://lookbook.nu/user/17530-Willabelle-O/following"; 
		$url = "http://lookbook.nu/user/1175447-Jessica-R/following";
		$url = "http://lookbook.nu/user/61127-Sabina-O/following?page=1";
		$url = "http://lookbook.nu/user/3107104-Phen-H/following?page=3";
		$url = "http://lookbook.nu/search/users?page=1"; 
		// get_blog_tlook_location( $url );  



		?> 
		<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" > 
			<input type="text" placeholder='scrape at page start' name="page_start" >
			<input type="text" placeholder='scrape at page end'   name="page_end" >
			<input type="text" placeholder='url'   name="url" >

			<input type="submit" value="SEARCH NOW" name="SCRAPE_NOW" />
		</form><?php    
		if (isset( $_POST['SCRAPE_NOW'])) { 
			echo " submitted  page_start = ".intval($_POST['page_start']).' page_end = '.intval($_POST['page_end']);
			// get_usernames_users(array('page_start'=>intval($_POST['page_start']),'page_end'=>intval($_POST['page_end'])));  
		}else{
			echo "not submitted <br> ";
		} 
		?>   
 
	</body> 
</html>

 
 
<?php 
/**
* 
*/
interface LookBookTemplate
{
 //    public function getDateJoined();
	// public function getTotalLook(); 
	// public function getTotalHype();
	// public function getRecentLookPostedStatus(); 
	// public function getTotalHypeEachLook($totalHype , $totalLook);
	// public function validateOutput(); 
}

/**
* 
*/
class LookbookDataBase
{ 
	function __construct()
	{    
	}
	public function checkIfLookBookUserExistToFs($email , $name)
	{ 

		return;
	} 
	public function saveLookBookUser(
		$userEmail , $userName , $userDomainInfo , $userDescription , $dateJoinedLookBook , 
		$urlSource , $urlPage ,  $urlLocation  , $timeZone , $totalHyped , $totalKarma , $totalCommentMade , $totalFan , 
		$totalLookUploadedIntwoMonths , $totalHypePerMonth , $totalCommentMadePerMonths)
	{ 


		return;
	}  
} 
/**
* 
*/ 
class LookBookExted  extends LookbookDataBase 
{
	public $totalHypeEachLook = 0; 
	public function __construct()
	{ 
	}
	public function getTotalHypeEachLook($totalHype , $totalLook)
	{
	 	// calculate the total hype each look  
		return intval($this->totalHypeEachLook = $totalHype / $totalLook); 
	}
	public function validateOutput()
	{
		if ($this->totalDaysPassed >= 60) {   
			$this->bool  = TRUE;
		} else { 
			$this->error .= '<br> TOTAL DAY PASSED ' . '<span style=\'color:red\' >' . $this->totalDaysPassed . '</span>';
		}    
		if ($this->totalLook >= 5) {    
			$this->bool  = TRUE;
		} else {  
			$this->error .= '<br> TOTAL LOOK ' . '<span style=\'color:red\' >' . $this->totalLook . '</span>';
		} 
		if ($this->totalFan >= 10) { 
			$this->bool  = TRUE; 
		} else {    
			$this->error .= '<br> TOTAL FAN ' . '<span style=\'color:red\' >' . $this->totalFan . '</span>'; 
		}
		if ($this->totalHype >= 10) {    
			$this->bool  = TRUE;
		} else {  
			$this->error .= '<br> TOTAL HYPE ' . '<span style=\'color:red\' >' . $this->totalHype . '</span>'; 
		} 
		if ($this->bool == TRUE && $this->error == NULL ) { 
			echo " <h4 style='color:green' > this user passed the requirement of FS </h4><br>";	 
		} else { 
			echo " <h4  > this user <span style='color:red' > do not passed </span> the requirement of FS  $this->error </h4> <br>"; 
		} 
 
		return $this->error;  
	}
	public function getEmailExtraDomain()
	{
		/**
		* required: getEmail() 
		*/
	 	return $this->userDomainInfo;
	}
	public function getTotalPostedLookInTwoMonths($recentPostedLooksInTheMonthsArray)
	{ 
		/**
		* need to run this function first recentPostedLooksInTheMonthsArray() before this function getTotalPostedLookInTwoMonths()
		* because data is from recentPostedLooksInTheMonthsArray() function.
		**/    
		/*
			$yearMonthCurrent = date('Y-m'); 
			$monthCurrent = date('m');
			$yearCurrent = date('Y'); 
			$monthCurrent = intval($monthCurrent) - 1; 
			$yearMonthPrevious = $yearCurrent . '-' . $monthCurrent;  
			echo " Current Month Uploaded look <br>"; 
			print_r($recentPostedLooksInTheMonthsArray[$yearMonthCurrent]);  
			echo " Previous Month Uploaded look <br>"; 
			print_r($recentPostedLooksInTheMonthsArray[$yearMonthPrevious]);   
			echo "<br><br><br> here ";  
			// 
		*/   
		// echo "<pre>";
		// print_r($recentPostedLooksInTheMonthsArray);     
		return intval($recentPostedLooksInTheMonthsArray[0]['totalLookUploaded']) + intval($recentPostedLooksInTheMonthsArray[1]['totalLookUploaded']);
	}  
	public function getRecentMonthUserUploadLook()
	{
		/* data added and initialized from function getRecentPostedLooksInTheMonthsArray() */
	 	return $this->lastMonthUploadLook;
	} 
	public function getTotalDaysPassedAfterDateJoined()
	{ 
		/**
		* the function is initialized from getDateJoined() 
		*/
		return $this->totalDaysPassed;
	}
	public function getTotalMonthsPassedAfterDateJoined()
	{ 
		/**
		* the function return value is from getDateJoined()
		*/
		return $this->totalMonthPassed;
	}   
	public function getTimeZone() 
	{  
		/**
		* initialized from getTimeZone($location)
		*/ 
		return $this->timeZone; 
	}
	public function getTimeZoneUrl() 
	{  
		/**
		* initialized from getTimeZone($location)
		*/ 
		return $this->timeZoneUrl; 
	}
	public function getSourceUrlLocation() 
	{  
		/**
		* required: setSourceUrlLocation($location , $page)
		**/
	  	return $this->setSourceUrlLocation;
	}
	public function getUsernames()
	{ 
		/**
		* required: setUsernamesAndDescription($url)
		*/
		return $this->username;
	}
	public function getDescriptions()
	{
		/**
		* required: setUsernamesAndDescription($url)
		*/
		 return $this->description; 
	}
	public function getProfileUrLookTab()
	{
		/**
		* required: setUserProfileUrl($lookBookDomain = 'http://lookbook.nu' , $username , $profileTab)
		*/
		return $this->profileUrLookTab;	
	}
	public function getProfileUrlCommentTab()
	{
		/**
		* required: setUserProfileUrl($lookBookDomain = 'http://lookbook.nu' , $username , $profileTab)
		*/
		return $this->profileUrlCommentTab;	
	}  
	public function isExistDomainThenNoAddToList($search , $subject)
	{ 

		echo "  isExistDomainThenNoAddToList($search , $subject) len ".strpos($subject, $search);
		if (empty($subject)) 
		{
			return $search;
		}
		elseif (strpos($subject, $search) > 0) 
		{  
			return NULL; 
		}
		else
		{
			return $search; 
		}
	}
} 
/**
* this is the scrape class
*/
class Lookbook extends LookBookExted
{  
	
	public $bool = FALSE;
	public $error = NULL;
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
	public $description = array(); 
	public $username = array();
	public $profileUrLookTab = '';
	public $profileUrlCommentTab = ''; 
	private $counter = 0;

	public function __construct($url)
	{ 
		$this->url = $url;
		$ch=curl_init($url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER , true);
		$cl=curl_exec($ch); 
		@$dom = new DOMDocument();
		@$res=$dom->loadHTML($cl);   
		$xpath= new DomXPath($dom);  
		$this->xpath = $xpath;
	}   
	public function getTotalLook()
	{ 
		$totalLookQuery  = $this->xpath->query("//*[@id='side_col']/div[2]/ul/li[2]/span[1]");//get total look uploaded
		foreach ($totalLookQuery as $tLQ) {
			$tLQ->nodeValue = str_replace(',' , '' , $tLQ->nodeValue);
			echo "<br>this is the total look <b>$tLQ->nodeValue</b>"; 
			$totalLook = $tLQ->nodeValue;
			break; 
		}
		$this->totalLook = $totalLook; 
		return $totalLook;
	}
	public function getTotalFan()
	{ 
		$totalFanQuery   = $this->xpath->query("//*[@id='side_col']/div[2]/ul/li[1]/span[1]");//get total fans  
		foreach ($totalFanQuery as $tFQ) 
		{
			$tFQ->nodeValue = str_replace(',' , '' , $tFQ->nodeValue);
			echo "<br> this is the total fans of the user <b>$tFQ->nodeValue</b> "; 
			$totalFan = $tFQ->nodeValue;
			break;
		}  
		$this->totalFan = $totalFan;
		return $totalFan;
	}
	public function getTotalKarma()
	{ 
		$totalKarmaQuery  = $this->xpath->query("//*[@id='side_col']/div[2]/ul/li[4]/span[1]");//get total hype 
		foreach ($totalKarmaQuery as $tK) { 
			echo " total hype $tK->nodeValue <br>";
			// $totalKarma = $tK->nodeValue;
			$totalKarma = preg_replace("/[^0-9]/", "" , $tK->nodeValue); 
			break;
		} 	
		$this->totalKarma = $totalKarma;
		return $totalKarma;
	}    
	public function getTotalHyped()
	{ 
		/**
		* get the total hyped of the user under the look tab in the profile
		**/
		$totalHypedQuery  = $this->xpath->query("//*[@id='looks_subtab']/a[2]");//get total hype 
		foreach ($totalHypedQuery as $tHQ) { 
			echo " total hype $tHQ->nodeValue <br>";
			// $totalHype = $tHQ->nodeValue;
			$totalHype = preg_replace("/[^0-9]/", "" , $tHQ->nodeValue); 
			break;
		} 	
		$this->totalHyped = $totalHyped;
		return $totalHyped; 
	}
	public function getEmail()
	{ 
		/**
		* email can also retrieved a domain because email container in lookbook 
		* has domain of the user placed also so the userDomainInfo contain some 
		* of domain from the lookbook user
		**/ 
		$userabout   = $this->xpath->query("//*[@id='userabout']/a"); 
		foreach ($userabout as $ua)
		{ 
			// echo ' <br> this is the email found ' . $ua->nodeValue . '';   
			if (strpos($ua->nodeValue, '@') > 0 )
			{
				// echo '<br>This node is email ' . $ua->nodeValue . '';
				$this->email = $ua->nodeValue;
			}
			elseif ($ua->nodeValue !== NULL and stripos($ua->nodeValue, '.com') > 0) 
			{
				$this->userDomainInfo .= $this->isExistDomainThenNoAddToList($ua->nodeValue . ',' , $this->userDomainInfo);   
			} 
		} 
		// echo "<br><br><Br>";
		// echo "<br> thid is the domains: $this->userDomainInfo ";
		// echo "<br> thid is the domains: $this->email ";   
		return $this->email; 
	}
	public function getRecentPostedLooksInTheMonthsArray()
	{

		$dateMonthUpload = ''; 
		$totalLookUploaded = 0; 
		$resultArray = array(); 
		$nodeArray = array(); 
		$dateValues = array();
		$counter = 0;
		$counter1 = 0; 

		$recentLookPostedQuery  = $this->xpath->query("//*[@class='look_meta_container']/p[2]/meta[3]");//get total hype  
		foreach ($recentLookPostedQuery as $query) 
		{  	 	 
			// echo " <br> the latest look posted ".$query->getAttribute('content');
 			$nodeArray[$counter] = $query->getAttribute('content');
 			$counter++;
			// echo " <br> the latest look posted ".$query->nodeValue;
			// $totalHype = $tHQ->nodeValue;  
			// $totalHype = preg_replace("/[^0-9]/", "" , $q->nodeValue);   
		} 	
		// $this->totalHype = $totalHype;
		// return $totalHype;  
		// echo " <br> this is the array from foreach  <pre>"; 
		// print_r($nodeArray);  

		$counter = 0; 

		if ( !empty($nodeArray)) 
		{
			$totalLookUploaded++; // set 1 because first date at $nodeArray[0] is counted as 1 so thats why it is directly $totalLookUpload++ that is the counter
			$dateMonthUpload = Time::removeDashAndDay($nodeArray[0]);  // add dateMonth in index 0 
			$dateValues[$counter1] = $nodeArray[0]; // add dateValue in index 0  
		}  
		for ($i=1; $i <= count($nodeArray) ; $i++) {  
			// echo " totalLookUploaded = $totalLookUploaded if ( dateMonthUpload  $dateMonthUpload  == nodeValue " . Time::removeDashAndDay($nodeArray[$i]) . ") <br> ";

			if (empty($nodeArray[$i])) 
			{  
				 
				/************************************************************************************************************************/
		 		/* this condition will work when the nodeArray is empty and its happens when the array index or i is in the last value 
		 		/************************************************************************************************************************/																														   													 
		 		//numiric index
		 	  	$resultArray[$counter]['dateMonthUpload'] = $dateMonthUpload; /* store the manth look uploaded ex: 2014-12 */
		 	  	$resultArray[$counter]['totalLookUploaded'] = $totalLookUploaded; /* store the total look uploaded in a month ex: 1 or 2 */ 
		 	  	$resultArray[$counter]['dateValues'] = $dateValues; /* this is the array month that is under the dateUploaded stored to array */  
		 	  	//month index
		 	  	$resultArray[$dateMonthUpload]['dateMonthUpload'] = $dateMonthUpload; /* store the manth look uploaded ex: 2014-12 */
		 	  	$resultArray[$dateMonthUpload]['totalLookUploaded'] = $totalLookUploaded; /* store the total look uploaded in a month ex: 1 or 2 */ 
		 	  	$resultArray[$dateMonthUpload]['dateValues'] = $dateValues; /* this is the array month that is under the dateUploaded stored to array */  

		 	} 
		 	elseif ($dateMonthUpload == Time::removeDashAndDay($nodeArray[$i])) 
		 	{
		 		
		 		/************************************************************************************************************************/
		 		/* if date Month Upload value is equal to node Array then the nodeArray added to the list of current month uploaded  
		 		/************************************************************************************************************************/
 
		 		$dateMonthUpload = Time::removeDashAndDay($nodeArray[$i]);   
		 		// echo " $i if $dateMonthUpload <br>";
		 		$totalLookUploaded++;
		 		$counter1++;
		 		$dateValues[$counter1] = $nodeArray[$i]; // add dateValue in index 0  

		 	} 
		 	else 
		 	{ 

	 			/************************************************************************************************************************/
		 		/* if date Month Upload value is not equal to node Array then the nodeArray to main array to display in the screen 
		 		/************************************************************************************************************************/
		 		//numiric index
		 	  	$resultArray[$counter]['dateMonthUpload'] = $dateMonthUpload;// store the manth look uploaded ex: 2014-12 
		 	  	$resultArray[$counter]['totalLookUploaded'] = $totalLookUploaded; // store the total look uploaded in a month ex: 1 or 2  
		 	  	$resultArray[$counter]['dateValues'] = $dateValues;  // this is the array month that is under the dateUploaded stored to array  
		 	  	//month index
		 	  	$resultArray[$dateMonthUpload]['dateMonthUpload'] = $dateMonthUpload;// store the manth look uploaded ex: 2014-12 
		 	  	$resultArray[$dateMonthUpload]['totalLookUploaded'] = $totalLookUploaded; // store the total look uploaded in a month ex: 1 or 2  
		 	  	$resultArray[$dateMonthUpload]['dateValues'] = $dateValues;  // this is the array month that is under the dateUploaded stored to array  
		 	  	
		 	  	$totalLookUploaded = 1;// initialized the look uploaded to 1 when dateMonthUploaded not equal to new one 
				$dateMonthUpload = Time::removeDashAndDay($nodeArray[$i]);  // trim dateMonthUpload and add to use if for compare  
				unset($dateValues); // unset array where the dateValue stored 
		 	  	$counter++; // this is used to replace the date counter
		 	  	$counter1=0; // counter initialized to zero again  
		 	  	$dateValues[$counter1] = $nodeArray[$i];  // add dateValue in index 0    
		 	  	// echo " <h2> $i else </h1> "; 
		 	} 
		}   
		// echo " 
		// 	<h3>this is the posted look with the user and the dates posted</h3> <br>
		// <pre>  
		// ";
		// print_r($resultArray);     
		// $this->recentLookPostedStatus = 

		$this->lastMonthUploadLook = $resultArray[0]['dateMonthUpload'];  
		return $resultArray;  
	}   
	public function getDateJoined()
	{ 
		$dateJoinedQuery = $this->xpath->query("//*[@id='side_col']/div[5]");//get date joined
		foreach ($dateJoinedQuery as $dJQ) {
			echo "<br> this is the data joined <b> $dJQ->nodeValue </b>";
			$dateJoined = explode('.' , $dJQ->nodeValue); 
			// echo "<br> date1 ".$dateJoined[0]; 
			$dateJoined    = str_replace(' ', '' , $dateJoined[0]); // replace all the white space in the string 
			$dateJoined    = str_replace('OGsince', '' , $dateJoined); // "OGsinceJanuary5,2009" replace the "OGsince" string result "January5,2009"
			// echo "<br> date2 $dateJoined "; 
			// echo "<br>".preg_replace("/[^0-9,.]/", "", $dateJoined); 
			$dayYearString = preg_replace("/[^0-9,.]/", "" , $dateJoined); // remove all the letters both upper case and lower case
			$month   		= preg_replace("/[^a-z^A-Z.]/", "" , $dateJoined); // remove all numbers 
			$month   		= str_replace("Membersince", "" , $month);
			$dayYearSArray  = explode(',' , $dayYearString); // convert string day and year to array using comma separator
			$day 		    = $dayYearSArray[0]; // pass days array at index 0 to string 
			$year 		    = $dayYearSArray[1]; // pass year to string
			break;
		}      
		$this->year  			 = $year;
		$this->day   			 = $day;
		$this->monthNumeric      = date('m', strtotime($month));   
		$this->monthString 		 = $month; 
		$this->dateTextFormat    = $month . ' ' . $day . ', ' . $year; 
		$this->dateNumericFormat = $year . '-' . date('m' , strtotime($month)) . '-' . $day;    
		$this->totalDaysPassed   = Time::getTotalDaysPassed($year . '-' . date('m' , strtotime($month)) . '-' . $day);  
		$this->totalMonthPassed  = intval(intval(Time::getTotalDaysPassed($year . '-' . date('m' , strtotime($month)) . '-' . $day))/30);
	}   
	public function setTimeZone($location)
	{  
		$url='';
  		$timezone='';
		switch ($location) 
		{ 
		    case 'NEW YORK': 
		        $url='EST';
		        $timezone='http://www.timeanddate.com/worldclock/usa/new-york';
		    break;
		    case 'LONDON': 
		      	$url='GMT';
		      	$timezone='http://www.timeanddate.com/worldclock/uk/london';
		    break;
		    case 'CALIFORNIA': 
			 	$url='PST';
			 	$timezone='http://www.timeanddate.com/worldclock/usa/los-angeles';
		  	break;
		    case 'MANILA': 
		        $url='PHT';
		        $timezone='http://www.timeanddate.com/worldclock/philippines/manila';
		   	break;
		    case 'LOS ANGELES':
		        $url='PST';
		        $timezone='http://www.timeanddate.com/worldclock/usa/los-angeles';
		    break;
		    case 'SÃO PAULO':
		        $url='BRST';
		        $timezone='http://www.timeanddate.com/worldclock/brazil/sao-paulo';
		    break;
		    case 'BANGKOK':
		        $url='http://www.timeanddate.com/worldclock/thailand/bangkok';
		        $timezone='ICT';
		  	break;
		    case 'TAIPEI':
		        $url='http://www.timeanddate.com/worldclock/taiwan/taipei';
		        $timezone='CST';
		    break;
		    case 'PARIS':
		        $url='http://www.timeanddate.com/worldclock/france/paris';
		        $timezone='CET';
		    break;
		    case 'TORONTO':
		        $url='http://www.timeanddate.com/worldclock/canada/toronto';
		        $timezone='EST';
		      break;
		    case 'SINGAPORE':
		        $url='http://www.timeanddate.com/worldclock/singapore/singapore';
		        $timezone='SGT';
		    break;
		    case 'RIO DE JANEIRO':
		        $url='http://www.timeanddate.com/worldclock/brazil/rio-de-janeiro';
		        $timezone='BRST';
		    break;
		    case 'JAKARTA':
		        $url='https://www.timeanddate.com/worldclock/indonesia/jakarta';
		        $timezone='WIB';
		    break;
		    case 'FLORIDA':
		        $url='https://www.timeanddate.com/worldclock/usa/miami';
		        $timezone='EST';
		    break;
		    case 'SYDNEY':
		        $url='http://www.timeanddate.com/worldclock/australia/sydney';
		        $timezone='AEDT';
		    break;
		    case 'TEXAS':
		        $url='http://www.timeanddate.com/worldclock/usa/houston';
		        $timezone='CST';
		    break;
		    case 'MELBOURNE':
		        $url='http://www.timeanddate.com/worldclock/australia/melbourne';
		        $timezone='EDT';
		    break;
		    case 'MOSCOW':
		        $url='http://www.timeanddate.com/worldclock/russia/moscow';
		        $timezone='MSK';
		    break;
		    case 'HONG KONG':
		        $url='http://www.timeanddate.com/worldclock/hong-kong/hong-kong';
		        $timezone='HKT';
		    break;
		    case 'SAN FRANCISCO':
		        $url='https://www.timeanddate.com/worldclock/usa/san-francisco';
		        $timezone='PST';
		    break;
		    case 'MEXICO CITY':
		        $url='http://www.timeanddate.com/worldclock/mexico/mexico-city';
		        $timezone='CST';
		    break;
		    case 'VANCOUVER':
		        $url='http://www.timeanddate.com/worldclock/canada/vancouver';
		        $timezone='PST';
		    break;
		    case 'HANOI':
		        $url='http://www.timeanddate.com/worldclock/vietnam/hanoi';
		        $timezone='ICT';
		    break;
		    case 'MONTREAL':
		        $url='http://www.timeanddate.com/worldclock/canada/montreal';
		        $timezone='EST';
		    break;
		    case 'SEOUL':
		        $url='http://www.timeanddate.com/worldclock/south-korea/seoul';
		        $timezone='KST';
		    break;
		    case 'LIMA':
		        $url='http://www.timeanddate.com/worldclock/peru/lima';
		        $timezone='PET';
		    break;
		    case 'BERLIN':
		        $url='http://www.timeanddate.com/worldclock/germany/berlin';
		        $timezone='CET';
		    break;
		    case 'ISTANBUL':
		        $url='http://www.timeanddate.com/worldclock/turkey/istanbul';
		        $timezone='EET';
		    break;
		    case 'WASHINGTON':
		        $url='https://www.timeanddate.com/worldclock/usa/seattle';
		        $timezone='PST';
		    break;
		    case 'CHICAGO':
		        $url='http://www.timeanddate.com/worldclock/usa/chicago';
		        $timezone='CST';
		    break;
		    case 'AMSTERDAM':
		        $url='http://www.timeanddate.com/worldclock/netherlands/amsterdam';
		        $timezone='CET';
		    break;
		    case 'WARSAW':
		        $url='http://www.timeanddate.com/worldclock/poland/warsaw';
		        $timezone='CET';
		    break;
		    case 'BUENOS AIRES':
		        $url='http://www.timeanddate.com/worldclock/argentina/buenos-aires';
		        $timezone='ART';
		    break;
		    case 'NEW JERSEY':
		        $url='http://www.timeanddate.com/worldclock/usa/newark';
		        $timezone='EST';
		    break;
		    case 'ATLANTA':
		        $url='http://www.timeanddate.com/worldclock/usa/atlanta';
		        $timezone='EST';
		    break;
		    case 'MADRID':
		        $url='http://www.timeanddate.com/worldclock/spain/madrid';
		        $timezone='CET';
		    break;
		    case 'BUCHAREST':
		        $url='http://www.timeanddate.com/worldclock/romania/bucharest';
		        $timezone='EET';
		    break;
		    case 'ILLINOIS':
		        $url='http://www.timeanddate.com/worldclock/usa/chicago';
		        $timezone='CST';
		    break;
		    case 'BOGOTA':
		        $url='http://www.timeanddate.com/worldclock/colombia/bogota';
		        $timezone='COT';
		    break;
		    case 'STOCKHOLM':
		        $url='http://www.timeanddate.com/worldclock/sweden/stockholm';
		        $timezone='CET';
		    break;
		    case 'TOKYO':
		        $url='http://www.timeanddate.com/worldclock/japan/tokyo';
		        $timezone='JST';
		    break;
		    case 'SANTIAGO':
		        $url='http://www.timeanddate.com/worldclock/chile/santiago';
		        $timezone='CLST';
		    break;
		    case 'VIRGINIA':
		        $url='http://www.timeanddate.com/worldclock/usa/richmond';
		        $timezone='EST';
		    break;
		    case 'BEIJING':
		        $url='http://www.timeanddate.com/worldclock/china/beijing';
		        $timezone='CST';
		    break;
		    case 'GEORGIA':
		        $url='http://www.timeanddate.com/worldclock/usa/atlanta';
		        $timezone='EST';
		    break;
		    case 'PHILADELPHIA':
		        $url='http://www.timeanddate.com/worldclock/usa/philadelphia';
		        $timezone='EST';
		    break;
		    case 'SHANGHAI':
		        $url='https://www.timeanddate.com/worldclock/china/shanghai';
		        $timezone='CST';
		    break;
		    case 'BOSTON':
		        $url='https://www.timeanddate.com/worldclock/usa/boston';
		        $timezone='EST';
		    break;
		    case 'MICHIGAN':
		        $url='http://www.timeanddate.com/worldclock/usa/detroit';
		        $timezone='EST';
		    break;
		    case 'MILAN':
		        $url='https://www.timeanddate.com/worldclock/italy/milan';
		        $timezone='CET';
		    break;
		    case 'HOUSTON':
		        $url='http://www.timeanddate.com/worldclock/usa/houston';
		        $timezone='CST';
		    break;
		    case 'OHIO':
		        $url='http://www.timeanddate.com/worldclock/usa/cleveland';
		        $timezone='EST';
		    break;
		    case 'SEATTLE':
		        $url='https://www.timeanddate.com/worldclock/usa/seattle';
		        $timezone='PST';
		    break;
		    case 'NORTH CAROLINA':
		        $url='http://www.timeanddate.com/worldclock/usa/raleigh';
		        $timezone='EST';
		    break;
		    case 'SAN DIEGO':
		        $url='https://www.timeanddate.com/worldclock/usa/san-diego';
		        $timezone='PST';
		    break;
		    case 'KRAKOW':
		        $url='http://www.timeanddate.com/worldclock/poland/krakow';
		        $timezone='CET';
		    break;
		    case 'MASSACHUSETTS':
		        $url='http://www.timeanddate.com/worldclock/usa/boston';
		        $timezone='EST';
		    break;
		    case 'MUNICH':
		        $url='https://www.timeanddate.com/worldclock/germany/munich';
		        $timezone='CET';
		    break;
		    case 'PRAGUE':
		        $url='http://www.timeanddate.com/worldclock/czech-republic/prague';
		        $timezone='CET';
		    break;
		    case 'PENNSYLVANIA':
		        $url='http://www.timeanddate.com/worldclock/usa/pittsburgh';
		        $timezone='EST';
		    break;
		    case 'ATHENS':
		        $url='http://www.timeanddate.com/worldclock/greece/athens';
		        $timezone='EET';
		    break;
		    case 'BRISBANE':
		        $url='http://www.timeanddate.com/worldclock/australia/brisbane';
		        $timezone='AEST';
		    break;
		    case 'MARYLAND':
		        $url='http://www.timeanddate.com/worldclock/usa/baltimore';
		        $timezone='EST';
		    break;
		    case 'ARIZONA':
		        $url='http://www.timeanddate.com/worldclock/usa/phoenix';
		        $timezone='MST';
		    break;
		    case 'LAS VEGAS':
		        $url='http://www.timeanddate.com/worldclock/usa/las-vegas';
		        $timezone='PST';
		    break;
		    case 'SALVADOR':
		        $url='http://www.timeanddate.com/worldclock/brazil/salvador';
		        $timezone='BRT';
		    break;
		    case 'DALLAS':
		        $url='http://www.timeanddate.com/worldclock/usa/dallas';
		        $timezone='CST';
		    break;
		    case 'PORTLAND':
		        $url='https://www.timeanddate.com/worldclock/usa/portland-or';
		        $timezone='PST';
		    break;
		    case 'AUSTIN':
		        $url='http://www.timeanddate.com/worldclock/usa/austin';
		        $timezone='CST';
		    break;
		    case 'DELHI':
		        $url='http://www.timeanddate.com/worldclock/india/new-delhi';
		        $timezone='IST';
		    break;
		    case 'MINNESOTA':
		        $url='https://www.timeanddate.com/worldclock/usa/minneapolis';
		        $timezone='CST';
		    break;
		    case 'SAINT PETERSBURG':
		        $url='https://www.timeanddate.com/worldclock/russia/saint-peterburg';
		        $timezone='MSK';
		    break;
		    case 'BROOKLYN':
		        $url='https://www.timeanddate.com/time/zone/usa/new-york';
		        $timezone='EST';
		    break;
		    case 'DUBAI':
		        $url='http://www.timeanddate.com/worldclock/united-arab-emirates/dubai';
		        $timezone='GST';
		    break;
		    case 'COLORADO':
		        $url='http://www.timeanddate.com/worldclock/usa/denver';
		        $timezone='MST';
		    break;
		    case 'COPENHAGEN':
		        $url='http://www.timeanddate.com/worldclock/denmark/copenhagen';
		        $timezone='CET';
		    break;
		    case 'TENNESSEE':
		        $url='https://www.timeanddate.com/worldclock/usa/nashville';
		        $timezone='CST';
		    break;
		    case 'WISCONSIN':
		        $url='https://www.timeanddate.com/worldclock/usa/milwaukee';
		        $timezone='CST';
		    break;
		    case 'BRUSSELS':
		        $url='http://www.timeanddate.com/worldclock/belgium/brussels';
		        $timezone='CET';
		    break;
		    case 'ALABAMA':
		        $url='https://www.timeanddate.com/worldclock/usa/montgomery';
		        $timezone='CST';
		    break;
		    case 'FRANKFURT':
		        $url='http://www.timeanddate.com/worldclock/germany/frankfurt';
		        $timezone='CET';
		    break;
		    case 'JOHANNESBURG':
		        $url='http://www.timeanddate.com/worldclock/south-africa/johannesburg';
		        $timezone='SAST';
		    break;
		    case 'INDIANA':
		        $url='http://www.timeanddate.com/worldclock/usa/indianapolis';
		        $timezone='EST';
		    break;
		    case 'MISSOURI':
		        $url='http://www.timeanddate.com/worldclock/usa/st-louis';
		        $timezone='CST';
		    break;
		    case 'OREGON':
		        $url='https://www.timeanddate.com/worldclock/usa/portland-or';
		        $timezone='PST';
		    break;
		    case 'CONNECTICUT':
		        $url='http://www.timeanddate.com/worldclock/usa/hartford';
		        $timezone='EST';
		    break; 
		    case 'ORANGE COUNTY':
		        $url='https://www.timeanddate.com/worldclock/usa/orange';
		        $timezone='PST';
		    break;
		    case 'BALTIMORE':
		        $url='http://www.timeanddate.com/worldclock/usa/baltimore';
		        $timezone='EST';
		    break;
		    case 'WASHINGTON, D.C.':
		        $url='http://www.timeanddate.com/worldclock/usa/washington-dc';
		        $timezone='EST';
		    break;
		    case 'CAIRO':
		        $url='http://www.timeanddate.com/worldclock/egypt/cairo';
		        $timezone='EET';
		    break;
		    case 'HAWAII':
		        $url='http://www.timeanddate.com/worldclock/usa/honolulu';
		        $timezone='HAST';
		    break;
		    case 'SAN JOSE':
		        $url='http://www.timeanddate.com/worldclock/usa/san-jose';
		        $timezone='PST';
		    break;
		    case 'UTAH':
		        $url='http://www.timeanddate.com/worldclock/usa/salt-lake-city';
		        $timezone='MST';
		    break;
		    case 'LOUISIANA':
		        $url='http://www.timeanddate.com/worldclock/usa/new-orleans';
		        $timezone='CST';
		    break;
		    case 'KANSAS':
		        $url='https://www.timeanddate.com/worldclock/usa/wichita';
		        $timezone='CST';
		    break;
		    case 'OKLAHOMA':
		        $url='https://www.timeanddate.com/worldclock/usa/oklahoma-city';
		        $timezone='CST';
		    break;
		    case 'ANTWERP':
		        $url='http://www.timeanddate.com/worldclock/belgium/antwerp';
		        $timezone='CET';
		    break;
		    case 'SOUTH CAROLINA':
		        $url='https://www.timeanddate.com/worldclock/usa/columbia';
		        $timezone='EST';
		    break;
		    case 'GUANGZHOU':
		        $url='http://www.timeanddate.com/worldclock/china/guangzhou';
		        $timezone='CST';
		    break;
		    case 'CARACAS':
		        $url='http://www.timeanddate.com/worldclock/venezuela/caracas';
		        $timezone='VET';
		    break;
		    default:
			break;    
		}     
		$this->timeZone = $timezone;  
		$this->timeZoneUrl = $url;  
		return $timezone;  
	}
	public function setSourceUrlLocation($location , $page)
	{ 

	   $this->setSourceUrlLocation = 'http://lookbook.nu/search/users?locations%5B%5D=' .str_replace(' ', '-' , $location). '&page=' .$page. '&r=1'; 
	} 
	public function setUsernamesAndDescription($url)
	{ 

		$ch=curl_init($url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER , true);
		$cl=curl_exec($ch); 
		@$dom = new DOMDocument();
		@$res=$dom->loadHTML($cl);   
		$xpath= new DomXPath($dom);    

		$usernames = $xpath->query("//*[@data-label='search - users']/a");  
     	$descriptions = $xpath->query("//*[@class='grey less_linespaced least_topspaced force_wrap']");  

      	$c = 0; 
		foreach ($descriptions as $d) { 
			$description[$c] = $d->nodeValue; 
		 	$c++;
	 	} 
	 	$c = 0;   
		foreach($usernames as $u) 
		{    
		    $username1 = $u->getAttribute("href"); 
		    $username[$c] = str_replace('/fan','',$username1);  
		    $c++;   
		}   

		$this->description = $description; 
		$this->username = $username;  
	}  
	public function setUserProfileUrl($username)
	{ 
		$lookBookDomain = 'http://lookbook.nu';
		$profileTabComment = 'comments';
		$profileTabLook = 'looks'; 

		$this->profileUrLookTab = $lookBookDomain .'/'. $username . '/' .$profileTabLook; 
		$this->profileUrlCommentTab = $lookBookDomain .'/'. $username . '/' .$profileTabComment; 
	} 
	public function getTotalCommentMade($url)
	{
		$ch=curl_init($url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER , true);
		$cl=curl_exec($ch); 
		@$dom = new DOMDocument();
		@$res=$dom->loadHTML($cl);   
		$xpath= new DomXPath($dom);   

	 	$totalCommentMade1 = $xpath->query("//*[@id='comments_subtab']/a[1]");//get total hype  
		foreach ($totalCommentMade1 as $tCM) 
		{   
 			$totalCommentMade = $tCM->nodeValue;
		} 	 
		return $this->totalCommentMade = $totalHype = preg_replace("/[^0-9]/", "" , $totalCommentMade);
	} 
	public function getSourceUrlPage($url)
	{     
	}
	public function getUserDomainInfo()
	{   
		$domainInfo = $this->xpath->query("//*[@class='linespaced']/div/a");  
		foreach ($domainInfo as $d)   
		{
			if ( $d->getAttribute('href') !== NULL and stripos( $d->getAttribute('href'), '.com') > 0) 
			{
				$this->userDomainInfo .= $this->isExistDomainThenNoAddToList($d->getAttribute('href') . ',' , $this->userDomainInfo);   
			}  
		}  
		return $this->userDomainInfo;
	}
} 
/**
* 
*/
class Time
{ 
	public function __construct()
	{   
	} 
	public static function getTotalDaysPassed($startDate , $currentDate=NULL)
	{  

		if ($currentDate=NULL) $currentDate = date('Y-m-d');  
		$datetime1 = date_create($startDate);
		$datetime2 = date_create($currentDate);
		$interval  = date_diff($datetime1 , $datetime2);
		$response  = $interval->format('%R%a days'); 
		$totalDaysPassed  = intval($response);   
		// echo "<br>  total days ago $response";  
		return $totalDaysPassed; 
	}
	public static function removeDashAndDay($date)
	{ 

		return  substr($date , 0 , strlen($date)-3); 
	}
}

