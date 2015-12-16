<?php 

		  // echo "<pre> ";


		  // print_r($uinfo);
	



	// occupation 
		$occupation  = (!empty($uinfo[0]['occupation'])) ? $uinfo[0]['occupation'] : '' ;  
		$occupation  .= (!empty($occupation)) ? ' at ' : '' ;  
		$occupation  .=  (!empty($uinfo[0]['work_at'])) ? $uinfo[0]['work_at'] : '' ;  

  	// about 
  		$ab = ''; 

  		if ( $uinfo[0]['aboutme'] != null ) { 
 	 		$ab .= $uinfo[0]['aboutme'];
  		}
	// education 

		$educ = ''; 
		if ( !empty($uinfo[0]['studied_at'])) { 
			$educ.= $uinfo[0]['studied_at']; 
		} 
		if ( !empty($uinfo[0]['studied_with'])) { 
			$educ.= ' / '.$uinfo[0]['studied_with']; 
		}
		if ( $uinfo[0]['studied_graduate_date'] != '0000' ) { 
			$educ.= ' / '.$uinfo[0]['studied_graduate_date']; 
		}  
	    
	    if(!empty($uinfo[0]['nickname'])) { 
	    	$middleInitials = ucfirst( substr($uinfo[0]['nickname'], 0,1));
	    } else { 
	    	$middleInitials = '';
	    }
 
	    $fullname =  ucfirst($uinfo[0]['firstname']) . " $middleInitials. ". ucfirst($uinfo[0]['lastname']);

	// location  
		$loc = '';

		if ( !empty($uinfo[0]['city'])) { 
			$loc.= $uinfo[0]['city']; 
		}  
		if ( !empty($uinfo[0]['state_'])) { 
			$loc.= ', '.$uinfo[0]['state_']; 
		} 
		if ( !empty($uinfo[0]['zip'])) { 
			$loc.= ', '.$uinfo[0]['zip']; 
		}  
		if ( !empty($uinfo[0]['country'])) { 
			$loc.= ', '.$uinfo[0]['country']; 
		} 
	
	
	// datejoined 

		$djoined = $mc-> date_format( $uinfo[0]['datejoined'] );     
	  	$mi['about']       = $ab; //'e specimen book. It has survived not only  tting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'; //$ab;
	  	$mi['occupation']  = $occupation; //'Fashion Designer, Diesel';  //$occupation;
	  	$mi['location']    = $loc; // 'Atlanta, GA, USA';   // $loc;
	  	$mi['education']   = $educ; //'Savanna College of Art and Design <br> Fashion Design, 2006'; //$educ;
	  	$mi['djoined']     = $djoined;  
	  	$logtime           = ( $uinfo[0]['logtime'] != '0000-00-00 00:00:00' ) ? $mc->get_time_ago($uinfo[0]['logtime']) : '22 HOURS' ; 
	  	$mi['fullName']    = $fullname; //'Jesus Erwin Suarez'; 
	  	$mi['blogName']    = $uinfo[0]['blogdom']; ;
	  	$mi['follower']    = $uinfo[0]['tfollower'];
	  	$mi['following']   = $uinfo[0]['tfollowing'];
	  	$mi['rankLook']    = 0;
	  	$mi['rankArticle'] = 0;


	  	  
?>
 
<!-- background black opacity to make the text  visible -->
 <div style=" position:absolute; z-index:100; width:900px;  height:240px; background-color:#000; opacity:0.6; " >   
 </div>		 
<!-- profile member info  -->
	<div id="profile-body-content-info-right" style="display:block;border:1px solid none ;"  >     
		<table border="0" cellpadding="0" cellspacing="0" id="profile-body-content-info-right-table"  style="width:100%;color:black; float:left; margin-top:20px;" > 
			<tr>   
				<td style="height:70px;"  >   
					<div id="profile-userdesc-title" >  
					</div>
					<div id="profile-info-button"> 
						<table>
						 	<tbody>
						 		<tr>
							 		<td> 
							 		    <img 
						 					id="profile-about-me-button"  
						 					style="margin-left:3px;border-radius:4px;" 
							 				src="fs_folders/images/profile/about-me.png"  
							 				onclick="show_profile_about()" 
							 				onmousemove=" mousein_change_button ( '#profile-about-me-button' , 'fs_folders/images/profile/about-me-mouse.png' )" 
							 				onmouseout="mouseout_change_button (  '#profile-about-me-button'  , 'fs_folders/images/profile/about-me.png' ) "
						 				/> 
	                                </td> 
	                                <?php if($mno1 != $_SESSION['mno']): ?>
		                          		<td> 
		                          			<div style="padding-left:2px;" >
			                          		 	<?php
		                                        	// echo "mno = $mno1 and mno1 = $mno1 <br>";
		                                            echo  $mc->print_user_modals_follow_or_unfollow_buttons($mno,  $mno1, 'width:121px !important', 'fs_folders/images/profile/follow.png', 'fs_folders/images/profile/following.png', 'details', '#details-follow-counter');
		                                        ?>
	                                        </div>
		 								    <!-- <img src="fs_folders/images/profile/follow.png"> -->  
									 		<!-- 
			 								    <img 
								 					id="profile-follow-button"  
								 					style="margin-left:3px;" 
									 				src="fs_folders/images/profile/follow.png"  
									 				onmousemove=" mousein_change_button ( '#profile-follow-button' , 'fs_folders/images/profile/following.png' )" 
									 				onmouseout="mouseout_change_button (  '#profile-follow-button'  , 'fs_folders/images/profile/follow.png' ) "
								 				/> 
 							 			    -->
		                                </td>
		                                <td>  
		  									  <img 
							 					id="profile-message-button"  
							 					style="margin-left:3px;" 
								 				src="fs_folders/images/profile/message.png"  
								 				onmousemove=" mousein_change_button ( '#profile-message-button' , 'fs_folders/images/profile/message-mouse.png' )" 
								 				onmouseout="mouseout_change_button (  '#profile-message-button'  , 'fs_folders/images/profile/message.png' ) "
								 				onclick="chat( 'chat?u=<?php echo $member['username']; ?>' , 'open-new-chat' ) " 
							 				/> 



		                                </td>
		                            <?php else: ?>
		                            	  <td> 
		                            	  		<a href="account?at=7">
			  									  	<img 
									 					id="profile-edit-button"  
									 					style="margin-left:3px; border-radius:4px;" 
										 				src="fs_folders/images/profile/edit.png"  
										 				onmousemove=" mousein_change_button ( '#profile-edit-button' , 'fs_folders/images/profile/edit-mouse.png' )" 
										 				onmouseout="mouseout_change_button (  '#profile-edit-button'  , 'fs_folders/images/profile/edit.png' ) "
								 					/> 
							 					</a>
		                                	</td> 
		                            <?php endif;?> 
                                </tr>
                            </tbody>
                        </table>
					</div>
				</td>
			<tr> 
				<td>  
				  	<div id="profile-name">  
  						<name> <?php echo $mi['fullName']; ?></name>
				  	</div>  
				  	<div id="profile-about">   	  
  					   <of> of </of> <desc> <?php echo $mi['blogName']; ?> </desc> 
				  	</div>
				  	<?php if(false): ?>
				  	<div id="profile-stat"  >  
			  			<span>
			   				 <text>Followers </text>  <b><?php echo $mi['follower']; ?></b> | <text>Following </text><b><?php echo $mi['following']; ?></b> | <text>Overall Ranking: Looks </text><b>#<?php echo $mi['rankLook']; ?></b> <text>| Article</text> <b>#<?php echo $mi['rankArticle']; ?></b>
						</span>
				  	</div>   
				  	<?php endif; ?> 

				  	<div id="profile-stat"  >  
			  			<span>
			   				 <text>Overall Ranking: Looks </text><b>#<?php echo $mi['rankLook']; ?></b> <text>| Article</text> <b>#<?php echo $mi['rankArticle']; ?></b>
						</span>
				  	</div>    
				</td>  
		</tr>
		</table>  
	</div>    
<!-- profile avatar and circle options --> 
	<div id="profile-body-content-info-left-1" style="border:1px solid none"   >
		<div id="profile-body-content-info-left-pic" >

			<a href="account?at=1#accountsetting-wrapper-container-table-body-right-profile-table-social-accounts">
				<?php  if ( file_exists("$mc->ppic_profile/$mppno.jpg") ) { echo "<img src='$mc->ppic_profile/$mppno.jpg' >"; }else{ $avatar = $mc->get_male_female_avatar( $mno1 );  echo "<img src='$mc->ppic_profile/$avatar' />"; }   ?>
			</a>
		</div>    
	</div>