	<script src="http://connect.facebook.net/en_US/all.js"></script>
	<script>
		var noEntry=0;
		var userId;
		
		FB.init({
			// appId: '375477082499399', 
			appId: '528594163842974', 
			cookie: true,
			status: true, 
			xfbml: true
		});
		
		
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
					window.location="home";
				}
			}						
			xmlhttp.open("GET","ajaxquery/loginwithfbortwitter.php?"+param+"&type=twitter",true);
			xmlhttp.send();
		}
		
		function afterLogin(page,param){
			signupFB(page,param);	
		}
	</script>
	
	
<script src="http://platform.twitter.com/anywhere.js?id=5gQEE06N5wx4b3MlTriEQA&v=1" type="text/javascript"></script>
<script type="text/javascript">
	twttr.anywhere(function (T) {
		document.getElementById("twlogin").onclick = function () {
			T.signIn();
		}
		
		T.bind("authComplete", function (e, user) {
			currentUser = T.currentUser;
			id=currentUser.data('id');
			un = currentUser.data('screen_name');
			imgURL = currentUser.data('profile_image_url').replace("http://","");
			fname=currentUser.data('name');
			fname = fname.split(" ");
			fn=fname[0];
			ln=fname[2];
			signupFB("id="+id+"&un="+un+"&imgURL="+imgURL+"&fn="+fn+"&ln="+ln);
		});
		
		document.getElementById("twlogin1").onclick = function () {
			T.signIn();
		}

	});
 
</script>