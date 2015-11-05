<?php 

	include ('php_function/Time/Time.php'); 
	require ('php_function/Database/LookbookDatabase.php');
	include ('php_function/Extends/LookbookExtends.php'); 
 	include ('php_function/Class/Lookbook.php');	   
?> 
<?php $lookbook = new Lookbook(); ?> 
<?php $topCityList = $lookbook->getTopCityArray();  ?> 
<html>
	<head> 
		<script id="tinyhippos-injected">if (window.top.ripple) { window.top.ripple("bootstrap").inject(window, document); }</script>
		<title>App Web Scrapper</title> 
		<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
		<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script> 

		<script type="text/javascript"> 
			obj = new Object(); 
			obj.counter = 0; 
			obj.timeInterval = 120000;
			startLoadInfo();    
	 		
			ajax (obj.counter);    

			function startLoadInfo() {  
				setInterval(function () {   
					obj.counter++;  
					ajax (obj.counter);     

				}, obj.timeInterval);
			}
		 	function openNewWindow() { 
		 		location1 = $("#locationLookBook").val(); 
		 		// alert(' location = ' + location1);
				var randomnumber = Math.floor((Math.random()*100)+1);  
		 		window.open('test.php?location=' + location1 , "_blank",'PopUp'+randomnumber+',scrollbars=1,menubar=0,resizable=1,width=500,height=500');  
		 		$('#scrapeMonitoring').prepend('<div>' + location1 + ' <span style=\"color:red\">(Scrapping)</span> </div>'); 
			} 
			function ajax (counter) {


 
				if (window.XMLHttpRequest)  {
					xmlhttp = new XMLHttpRequest();
				} else {
					xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
				}
				xmlhttp.onreadystatechange = function() {
					if (xmlhttp.readyState == 4 && xmlhttp.status == 200) { 

					// alert('response here');
					var response = xmlhttp.responseText;


						// var obj = JSON.parse(response);



						// var fullname = obj.employees[0].firstname + ' ' + obj.employees[0].lastname;
						
						// document.getElementById('jasonTest').innerHTML = fullname; 

						document.getElementById('thisistheresponse').innerHTML = xmlhttp.responseText;   
					}  
				}
				xmlhttp.open('GET','server/viewStatus.php?counter='+counter,true);
				xmlhttp.send(); 

				// var ajaxTime= new Date().getTime();
				// $.ajax({
				//     type: "GET",
				//     url: "server/viewStatus.php?counter="+counter,
				    
				// }).done(function () {
				//     var totalTime = new Date().getTime()-ajaxTime;
				//     // Here I want to get the how long it took to load some.php and use it further
				//     // alert(totalTime); 
				//     // document.getElementById('thisistheresponse').innerHTML = xmlhttp.responseText;
				// });

 
			}
		</script>
		<style type="text/css"></style>
	</head>
	<body>  
		<div style=" border: 1px solid red;  width: 1024px;  margin: auto; height: auto; ">
			<div style="width: 100%; font-size: 40px; font-family: arial; font-weight: bold; text-align: center; background-color: lightgreen; ">
		      	Welcome to web scraper application
			</div> 
			<div id='jasonTest' > 
				jason response
			</div> 
	  		<div style="float: right;border: 1px solid red;width: 510px;padding-top: 20px;height: 430;background-color: #B6FF7C;">   
			  	<div> Scrapping Running </div>
				<div style="width:100%;text-align: center;border: 1px solid;" id="scrapeMonitoring">   
				</div>
			</div>  
		  	<div style=" border: 1px solid red;width: 510px;padding-top: 20px;height: 430;background-color: #E9E9E9;"> 
		  	<div style="margin: auto;border: 1px solid green;width: 50%;text-align: center;">
			    <div> LOCATION </div> 
				<select id="locationLookBook">  
					<?php 
						foreach ($topCityList as $key => $value) { 
							$value = strtoupper($value);
							echo "<option value='$value' >$value</option>";
						} 
					?>
				</select>
				<input type="button" value="scrape" onclick="openNewWindow()">  
			</div>
			</div>    
			<div id="thisistheresponse" style="width: 100%; font-size: 10px; font-family: arial; font-weight: bold; text-align: center; background-color: #E0E0E0; height: 500px;overflow-y: auto;">
		       sfsf
			</div>  
		</div>   
	</body>
</html>