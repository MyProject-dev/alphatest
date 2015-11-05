		<?php
			echo"<script>
					var isfblog='".$_GET["isfblog"]."';
				</script>
			";
		?>
		
		<script>	
			
			function signup(param)
			{
					
				xmlhttp.onreadystatechange=function()
				{
					if (xmlhttp.readyState==4 && xmlhttp.status==200)
					{	
						//alert(xmlhttp.responseText);
						window.location="http://fashionsponge.com/fs/home";
					}
				}		
				// alert("sending this data = "+param);
				xmlhttp.open("GET","ajaxquery/loginwithfbortwitter.php?"+param+"&type=facebook",true);
				xmlhttp.send();
			}


			
			FB.getLoginStatus(function(response) {
				if (response.status === 'connected' && isfblog=="true" ) {
					FB.api('/me', function(response) {
						if(response.id){
							signup("id="+response.id
								+"&fn="+response.first_name
								+"&ln="+response.last_name
								+"&email="+response.email
								+"&un="+response.username
								+"&gen="+response.gender
								+"&bd="+response.birthday
							);
						}
					});
				}
			});
			
			function FBLogin()
			{
				
				FB.getLoginStatus(function(response) {
					if (response.status === 'connected' ) {
						alert("connecting to fb....");
						FB.api('/me', function(response) {
							if(response.id){
								
								// alert("Your full is = "+response.first_name+" "+response.last_name +" checking database..");
								signup("id="+response.id
									+"&fn="+response.first_name
									+"&ln="+response.last_name
									+"&email="+response.email
									+"&un="+response.username
									+"&gen="+response.gender
									+"&bd="+response.birthday
								);
							}
						});
					} else {
							alert("sending to facebook login page....");
							// alert("generating facebook log in page");
							var scope=	"ads_management,create_event,create_note,email,export_stream,friends_about_me, friends_activities, friends_birthday, friends_checkins, friends_education_history, friends_events,"+
							"friends_games_activity, friends_groups, friends_hometown, friends_interests,"+
							"friends_likes, friends_location, friends_notes, friends_online_presence,"+
							"friends_photo_video_tags, friends_photos, friends_questions, friends_relationship_details,"+
							"friends_relationships, friends_religion_politics, friends_status, friends_subscriptions,"+
							"friends_videos, friends_website, friends_work_history, manage_friendlists,"+
							"manage_notifications, manage_pages, offline_access, photo_upload, publish_actions,"+
							"publish_checkins, publish_stream, read_friendlists, read_insights, read_mailbox,"+
							"read_requests, read_stream, rsvp_event, share_item, sms, status_update, user_about_me,"+
							"user_activities, user_birthday, user_checkins, user_education_history, user_events,"+
							"user_games_activity, user_groups, user_hometown, user_interests, user_likes,"+
							"user_location, user_notes, user_online_presence, user_photo_video_tags, user_photos,"+
							"user_questions, user_relationship_details, user_relationships, user_religion_politics,"+
							"user_status, user_subscriptions, user_videos, user_website, user_work_history,"+
							"video_upload xmpp_login";			
							// window.location = encodeURI("https://www.facebook.com/dialog/oauth/?client_id=375477082499399&redirect_uri="+window.location.href.replace("?errno=2","")+"?isfblog=true&scope="+scope);	 // when not login and visit to facebook login.
							window.location = encodeURI("https://www.facebook.com/dialog/oauth/?client_id=528594163842974&redirect_uri="+window.location.href.replace("?errno=2","")+"?isfblog=true&scope="+scope);	 // when not login and visit to facebook login.
					}
				});	
				
				email
				/*
					FB.api('/me', function(response) {
					if(response.id){
						signup("id="+response.id
							+"&fn="+response.first_name
							+"&ln="+response.last_name
							+"&email="+response.email
							+"&un="+response.username
							+"&gen="+response.gender
							+"&bd="+response.birthday
						);
					}
					else{
						var scope=	"ads_management,create_event,create_note,email,export_stream,friends_about_me, friends_activities, friends_birthday, friends_checkins, friends_education_history, friends_events,"+
							"friends_games_activity, friends_groups, friends_hometown, friends_interests,"+
							"friends_likes, friends_location, friends_notes, friends_online_presence,"+
							"friends_photo_video_tags, friends_photos, friends_questions, friends_relationship_details,"+
							"friends_relationships, friends_religion_politics, friends_status, friends_subscriptions,"+
							"friends_videos, friends_website, friends_work_history, manage_friendlists,"+
							"manage_notifications, manage_pages, offline_access, photo_upload, publish_actions,"+
							"publish_checkins, publish_stream, read_friendlists, read_insights, read_mailbox,"+
							"read_requests, read_stream, rsvp_event, share_item, sms, status_update, user_about_me,"+
							"user_activities, user_birthday, user_checkins, user_education_history, user_events,"+
							"user_games_activity, user_groups, user_hometown, user_interests, user_likes,"+
							"user_location, user_notes, user_online_presence, user_photo_video_tags, user_photos,"+
							"user_questions, user_relationship_details, user_relationships, user_religion_politics,"+
							"user_status, user_subscriptions, user_videos, user_website, user_work_history,"+
							"video_upload xmpp_login";			
							window.location = encodeURI("https://www.facebook.com/dialog/oauth/?client_id=375477082499399&redirect_uri="+window.location.href+"&scope="+scope);		
					}
					/*
					else{
						FB.login(function(response){
								if (response.authResponse) {
									FB.api('/me', function(response) {
										signup("id="+response.id
											+"&fn="+response.first_name
											+"&ln="+response.last_name
											+"&email="+response.email
											+"&un="+response.username
											+"&gen="+response.gender
											+"&bd="+response.birthday
										);
									});
								} 
								else{
									
								}
							},
							{
								perms:"ads_management,create_event,create_note,email,export_stream,friends_about_me, friends_activities, friends_birthday, friends_checkins, friends_education_history, friends_events,"+
										"friends_games_activity, friends_groups, friends_hometown, friends_interests,"+
										"friends_likes, friends_location, friends_notes, friends_online_presence,"+
										"friends_photo_video_tags, friends_photos, friends_questions, friends_relationship_details,"+
										"friends_relationships, friends_religion_politics, friends_status, friends_subscriptions,"+
										"friends_videos, friends_website, friends_work_history, manage_friendlists,"+
										"manage_notifications, manage_pages, offline_access, photo_upload, publish_actions,"+
										"publish_checkins, publish_stream, read_friendlists, read_insights, read_mailbox,"+
										"read_requests, read_stream, rsvp_event, share_item, sms, status_update, user_about_me,"+
										"user_activities, user_birthday, user_checkins, user_education_history, user_events,"+
										"user_games_activity, user_groups, user_hometown, user_interests, user_likes,"+
										"user_location, user_notes, user_online_presence, user_photo_video_tags, user_photos,"+
										"user_questions, user_relationship_details, user_relationships, user_religion_politics,"+
										"user_status, user_subscriptions, user_videos, user_website, user_work_history,"+
										"video_upload xmpp_login"
							}
						);
					}
				
				});
				*/
						
			}
			
			/*ORIG BACKUP SEPT 27, 2012
				function FBLogin()
			{
				FB.api('/me', function(response) {
					if(response.id){
						afterLogin("fb-signup.php?id="+response.id
							+"&fn="+response.first_name
							+"&ln="+response.last_name
							+"&email="+response.email
							+"&un="+response.username
							+"&gen="+response.gender
							+"&bd="+response.birthday
						,"id="+response.id);
						//FB.getLoginStatus(function(response) {
						//	userId=response.authResponse.userID;
						//});
					}
					else{
						FB.login(function(response){
								if (response.authResponse) {
									FB.api('/me', function(response) {
										afterLogin("fb-signup.php?id="+response.id
										+"&fn="+response.first_name
										+"&ln="+response.last_name
										+"&email="+response.email
										+"&un="+response.username
										+"&gen="+response.gender
										+"&bd="+response.birthday
										,"id="+response.id);
									});
								} 
								else{
									
								}
							},
							{
								perms:"ads_management,create_event,create_note,email,export_stream,friends_about_me, friends_activities, friends_birthday, friends_checkins, friends_education_history, friends_events,"+
										"friends_games_activity, friends_groups, friends_hometown, friends_interests,"+
										"friends_likes, friends_location, friends_notes, friends_online_presence,"+
										"friends_photo_video_tags, friends_photos, friends_questions, friends_relationship_details,"+
										"friends_relationships, friends_religion_politics, friends_status, friends_subscriptions,"+
										"friends_videos, friends_website, friends_work_history, manage_friendlists,"+
										"manage_notifications, manage_pages, offline_access, photo_upload, publish_actions,"+
										"publish_checkins, publish_stream, read_friendlists, read_insights, read_mailbox,"+
										"read_requests, read_stream, rsvp_event, share_item, sms, status_update, user_about_me,"+
										"user_activities, user_birthday, user_checkins, user_education_history, user_events,"+
										"user_games_activity, user_groups, user_hometown, user_interests, user_likes,"+
										"user_location, user_notes, user_online_presence, user_photo_video_tags, user_photos,"+
										"user_questions, user_relationship_details, user_relationships, user_religion_politics,"+
										"user_status, user_subscriptions, user_videos, user_website, user_work_history,"+
										"video_upload xmpp_login"
							}
						);
					}
				});
				
			}
				
			*/
		</script>