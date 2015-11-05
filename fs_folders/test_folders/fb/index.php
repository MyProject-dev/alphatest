
	fb invite friends yeah



	<script type="text/javascript" src='//code.jquery.com/jquery-1.10.2.min.js' ></script>
	<script type="text/javascript" src='//code.jquery.com/ui/1.10.4/jquery-ui.js' ></script>
	<link rel="stylesheet" type="text/css" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">

<html xmlns="http://www.w3.org/1999/xhtml"
  xmlns:fb="https://www.facebook.com/2008/fbml">
  <head>
    <title>Frictionless Request Example</title>
  </head>

  <body>
    <div id="fb-root"></div>
    <script src="http://connect.facebook.net/en_US/all.js"></script>
    <p>
      <input type="button"
        onclick="sendRequestToOneRecipient(); return false;"
        value="Send Request to One User"
      />
      <input type="text" value="User ID" name="user_id" size=”50” />
    </p>
    <p>
      <input type="button"
        onclick="sendRequestToManyRecipients(); return false;"
        value="Send Request to Many Users"
      />
        <input type="text" 
          value="Comma Delimited List of Multiple User IDs" 
          name="user_ids" size=”50” />
       </p>
    
    <script>
      FB.init({
        appId  : '528594163842974',
        status : true,
        cookie : true,
        frictionlessRequests : true,
        oauth: true
      });

 function sendRequestToOneRecipient() {
        var user_id = document.getElementsByName("user_id")[0].value;
        FB.ui({method: 'apprequests',
          message: 'My Great Request',
          to: user_id, 
        }, requestCallback);
      }

      function sendRequestToManyRecipients() {
        var user_ids = document.getElementsByName("user_ids")[0].value;
        FB.ui({method: 'apprequests',
          message: 'My Great Request',
          to: user_ids,
        }, requestCallback);
      }
      
      function requestCallback(response) {
        // Handle callback here 
        console.log(response);
      }









		function sendRequestViaMultiFriendSelector() {
		    FB.ui({
		        method: 'apprequests',
		        message: "This message is displayed in invitation"
		    },send_wall_invitation); 
		}

		function send_wall_invitation(response) {
		   // alert(response.to);
		    var send_invitation_url=base_url+'send_invitation';
		    jQuery.ajax({
		        url:send_invitation_url,
		        data:{
		            to:response.to
		            },
		        dataType:"json",
		        type: 'POST',
		        success: function(data){
		//            alert("");
		        }

		    })
		}
    </script>
  </body>
</html>
