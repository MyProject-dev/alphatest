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
			obj.timeInterval = 100;
			startLoadInfo();    
	 
			function startLoadInfo() {  
				setInterval(function () {    
					ajax (obj.counter);    
					obj.counter++; 

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
		 
			<div id="thisistheresponse" style="width: 100%; font-size: 40px; font-family: arial; font-weight: bold; text-align: center; background-color: #DAFDF9; ">
		       sfsf
			</div>
		  	  
		</div>   
	</body>
</html>