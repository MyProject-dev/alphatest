<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>FashionSponge</title>
<link href="style.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"> </script>
<script type="text/javascript" src="script.js"></script>

<script type="text/javascript">

		//check empty field
		function validateForm()
		{
			var x=document.forms["myForm"]["name"].value;
			if (x==null || x=="" || x=='NAME')
			  {
			  alert("Name must be filled out");
			  return false;
			  }
			  
			/*var x=document.forms["myForm"]["website"].value;
			if (x==null || x=="" || x=='WEBSITE')
			  {
			  alert("Website must be filled out");
			  return false;
			  }*/
		  
		  var x=document.forms["myForm"]["email"].value;
			var atpos=x.indexOf("@");
			var dotpos=x.lastIndexOf(".");
			if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
			  {
			  alert("Not a valid e-mail address");
			  return false;
			  } 			  
		}	
</script>

</head>

<body>
    <div id="wrapper">
    	<div id="header"></div> <!-- end #header -->            

<?php
if(isset($_POST['submit']))
{
				 $to = "info@fashionsponge.com";
				 $subject = "FashionSponge - Sign Up For Beta";
 
 				$name = $_REQUEST['name'] ;
				$email = $_REQUEST['email'] ;
				$website = $_REQUEST['website'] ;
				
				if ($website=="WEBSITE")
				{
				$website1 = '';
				}
				else
				{
				$website1 =  $website;
				}
				
				$ipi = $_SERVER["REMOTE_ADDR"];
			
$body = "\n\nName: ".$name.
"\nEmail: ".$email.
"\nWebsite: ".$website1.
"\nIP Address: ".$ipi;
				
 if (mail($to, $subject, $body, "From: $email"))
	 {
		 ?>             
                    <div id="output"></div>
                        
                    <div id="overlay" class="web_dialog_overlay"></div>
                        
                    <div id="dialog" class="web_dialog">
                       <table style="width: 100%; border: 0px;" cellpadding="3" cellspacing="0">
                          <tr>
                             <td class="web_dialog_title">FashionSponge Invitation</td>
                             <td class="web_dialog_title align_right">
                                <a href="#" id="btnClose">Close</a>
                             </td>
                          </tr>
                          <tr>
                             <td>&nbsp;</td>
                             <td>&nbsp;</td>
                          </tr>
                          <tr>
                             <td colspan="2" style="padding-left: 15px;">
                                <p>
							<center><img src="images/fashion-sponge-logo.png" /></center>
							Hi <?php echo $name; ?>,
							<br /><br />
							Thank you for signing up for an invitation to FashionSponge!
							We appreciate your interest. Our designers and developers are 
							hard at work to bring you the best experience possible. <br /><br />
							
							Check your email for a welcome message, and make sure to 
							follow our social pages for more information about our community.<br /><br />
							
							Thanks, <br />
							Salvador Mussolini
						</p>
                             </td>
                          </tr>
                       </table>
                    </div>
                         
                    <script type="text/javascript"> 
						loadPopupBox();
							function loadPopupBox() {    // To Load the Popupbox
							   ShowDialog(true);
							 e.preventDefault();         
							}        	
				   </script>
            
	   <?php
	  } 
	  else 
		  {}
}
?>


<?php
if(isset($_POST['submit']))
{
 $to = $email;
 $subject = "FashionSponge - Sign Up For Beta";
 
 				$name = $_REQUEST['name'] ;
				$email = $_REQUEST['email'] ;
				$website = $_REQUEST['website'] ;
				
$body = "Hi ".$name.",\n\nThank you for signing up to become a member of FashionSponge.com, a community where your style inspires, your voice is heard, and your participation is rewarded. I just wanted to say hello, and I can't wait to welcome you to the FashionSponge community. FashionSponge is days away from launching its BETA period, and you will be the ﬁrst to get a private invite to join. Before the BETA launch, we will be hosting a online style contest for cash and additional prizes.

Just in case you'd like to help us spread the word, we would be honored if you share our link www.fashionsponge.com on your social networks and if you blog and would like to write about FashionSponge email us at info@fashionsponge.com.

Oh, and if you haven't already, don't forget to follow us on Facebook at https://www.facebook.com/fashionsponge or Twitter at https://twitter.com/fashionsponge and http://instagram.com/fashionsponge on Instagram to get the latest information on the contest and the sites development.

If you have any questions or want to join the FashionSponge movement, advertise or collaborate email me at salvador@fashionsponge.com. I'm always
happy to connect with people!

Thank you so much for your support!

Salvador Mussolini
Founder/Creative Director
Don't Just Dress. Dress Well.";
				
	  if (mail($to, $subject, $body, "From: FashionSponge"))
	      {
	      } 
	  else 
		  {  
		  }
}
?>


<div id="content">

<h2>The Easiest and Fastest Way To...</h2>

<div class="arrow"></div>

<div class="colcontainer">
	<div class="col1">
        <p><img src="images/share-icon.png" width="120" style="margin:auto;"/></p>
        <h3>SHARE</h3>
        <p>Fashion & Lifestyle Photos</p>
        <p>Daily Outfits</p>
        <p>Blog Posts</p>
   </div>
   <div class="col2">
    	<p><img src="images/discover-icon.png" width="120" /></p>
        <h3>DISCOVER</h3>
        <p>Fashionable People</p>
        <p>Brands & Botiques</p>
        <p>New Blogs</p>
   </div>
	<div class="col3">
        <p><img src="images/learn-icon.png" width="120" /></p>
        <h3>LEARN</h3>
        <p>Get Beauty/Grooming Tips</p>
        <p>Get Style Advise</p>
        <p>Get News</p>
    </div>
	<div class="col4">
        <p><img src="images/rewards-icon.png" width="120" /></p>
        <h3>REWARDS</h3>
        <p>Get Featured</p>
        <p>Win Prizes</p>
        <p>Win Cash</p>
    </div>
</div>    
    
<div style="clear:both;"></div>


</div> <!-- end #content -->


    <div id="footer">
            <div class="colcontainer">
               <div class="col1">
                   <h3>BE THE FIRST</h3>
                   <p>Join a fashion community of<br/> tastemakers and creators.<br/> FashionSponge is an<br/> environment of diverse and<br/> unrehearsed fashion inspiration. </p>
               </div>
               <div class="col2">
               
    
                   <form name="myForm" action="index.php" onsubmit="return validateForm()" method="post">
                   <input type="text" value="NAME" onfocus="if(this.value  == 'NAME') { this.value = ''; } " onblur="if(this.value == '') { this.value = 'NAME'; } " name="name" id="name" />
                   <input type="text" value="E-MAIL" onfocus="if(this.value  == 'E-MAIL') { this.value = ''; } " onblur="if(this.value == '') { this.value = 'E-MAIL'; } " name="email" id="email" />
                   <input type="text" value="WEBSITE" onfocus="if(this.value  == 'WEBSITE') { this.value = ''; } " onblur="if(this.value == '') { this.value = 'WEBSITE'; } " name="website" id="website" />
                   <input type="submit" value="" name="submit" />
                   </form>
    
      
               </div>
            </div>
            <div style="clear:both;"></div>    
        <p>Copyright &copy; 2013 FashionSponge</p>
    </div> <!-- end #footer -->

</div> <!-- End #wrapper -->  
        
</body>
</html>