<script>
			if (window.XMLHttpRequest)
				xmlhttp=new XMLHttpRequest();
			else
				xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
							
			function signupFB(param)
			{
				
				xmlhttp.onreadystatechange=function()
				{
					if (xmlhttp.readyState==4 && xmlhttp.status==200)
					{
						if(xmlhttp.responseText==1)
						{
							window.location="profile.php";
						}
						else
						{	
							alert(xmlhttp.responseText);		
						}
					}
				}						
				xmlhttp.open("GET","ajaxquery/signupfb.php?"+param,true);
				xmlhttp.send();
			}
		
		  // Load the SDK Asynchronously
		  (function(d){
			 var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
			 if (d.getElementById(id)) {return;}
			 js = d.createElement('script'); js.id = id; js.async = true;
			 js.src = "//connect.facebook.net/en_US/all.js";
			 ref.parentNode.insertBefore(js, ref);
		   }(document));

		  // Init the SDK upon load
		  window.fbAsyncInit = function() {
			FB.init({
			  appId      : '243563845750474', // App ID
			  channelUrl : '//'+window.location.hostname+'/channel', // Path to your Channel File
			  status     : true, // check login status
			  cookie     : true, // enable cookies to allow the server to access the session
			  xfbml      : true  // parse XFBML
			});

			// listen for and handle auth.statusChange events
				
				
			FB.Event.subscribe('auth.statusChange', function(response) {
			  if (response.authResponse) {
				FB.getLoginStatus(function(response) {
				  if (response.status === 'connected') {
					// the user is logged in and has authenticated your
					// app, and response.authResponse supplies
					// the user's ID, a valid access token, a signed
					// request, and the time the access token 
					// and signed request each expire
					var uid = response.authResponse.userID;
					var accessToken = response.authResponse.accessToken;
				  } else if (response.status === 'not_authorized') {
					// the user is logged in to Facebook, 
					// but has not authenticated your app
				  } else {
					// the user isn't logged in to Facebook.
				  }
				 });
				// user has auth'd your app and is logged into Facebook
				FB.api('/me', function(me){
				  if (me.name) {
					document.getElementById('auth-displayname').innerHTML = "Full name: <b>"+me.name+"</b><br>"
						+"User ID: <b>"+me.id+"</b><br>"
						+"Gender: <b>"+me.gender+"</b><br>"
						+"Link: <b>"+me.link+"</b><br>"
						+"Username: <b>"+me.username+"</b><br>"
						;
					document.getElementById('auth-pic').src="http://graph.facebook.com/"+me.id+"/picture";

					var fbid=me.id;
					var lname=me.last_name;
					var fname=me.first_name;
					var email="";
					var gender=me.gender;
					var uname=me.username;
					var param="fbid="+fbid 
						+ "&lname="+lname
						+ "&fname="+fname
						+ "&email="+email
						+ "&gender="+gender
						+ "&uname="+uname;
					signupFB(param);
				  }
				});
				
				document.getElementById('auth-loggedout').style.display = 'none';
				document.getElementById('auth-loggedin').style.display = 'block';
				
			  } else {
				// user has not auth'd your app, or is not logged into Facebook
				document.getElementById('auth-loggedout').style.display = 'block';
				document.getElementById('auth-loggedin').style.display = 'none';
			  }
			});

			// respond to clicks on the login and logout links
			document.getElementById('auth-loginlink').addEventListener('click', function(){
			  FB.login();
			});
			document.getElementById('auth-logoutlink').addEventListener('click', function(){
			  FB.logout(window.location="logout.php");
			}); 
		  } 
		</script>