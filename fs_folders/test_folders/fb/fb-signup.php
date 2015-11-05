
<?php
	require("signup.php");
?>

<script>
															
		/*	getID("fb-id").value=me.id;
		FB.api('/me', function(response) {
		  alert(fbID);
		});
			me = response.authResponse;
			alert(me.userFirstName);
			getID('fb-user-photo').src="http://graph.facebook.com/"+me.userID+"/picture";
			getID("tr-fb").style.display="block";
			getID("t2").value=me.first_name;
			getID("t1").value=me.last_name;
			getID("t3").value=me.email;
			getID("t4").value=me.email;
			getID("t5").value=me.username;
			
			//if(me.gender=="male")
			//	getID("t8").value="Male";
			//else
			//	getID("t8").value="Female";
			
			var bday=me.birthday.split("/"); 
			getID("t6").value=bday[0];
			getID("t7").value=bday[1];
			getID("t8").value=bday[2];
		*/


</script>

	<script>
			getID('fb-user-photo').src="http://graph.facebook.com/<?php echo $_GET['id']; ?>/picture";
			getID('tr-fb').style.display='block';
			getID('fb-id').value="<?php echo $_GET['id']; ?>";
			getID('t1').value="<?php echo $_GET['ln']; ?>";
			getID('t2').value="<?php echo $_GET['fn']; ?>";
			getID('t3').value="<?php echo $_GET['email']; ?>";
			getID('t4').value="<?php echo $_GET['email']; ?>";
			getID('t5').value="<?php echo $_GET['un']; ?>";
			
			//if(me.gender=='male')
			//	getID('t8').value='Male';
			//else
			//	getID('t8').value='Female';
			
			var bday="<?php echo $_GET['bd']; ?>".split('/'); 
			getID('t6').value=bday[0];
			getID('t7').value=bday[1];
			getID('t8').value=bday[2];
		</script>
	";



