 <?php 
			$show = true;
			if (!empty($_SESSION['hide_page'])) { 
				if ( in_array('header' , $_SESSION['hide_page'] )  ) {
				 	$show = false;
				} 
			} 
			if ( $show == true ): ?>  		 
					<link rel="stylesheet" type="text/css" href="fs_folders/page_footer/footer_css_file/footer1.css"> 
					<script type="text/javascript" src='fs_folders/page_footer/footer_js_file/footer1_ajax.js'></script>
					<script type="text/javascript" src='fs_folders/page_footer/footer_js_file/footer1_jquery.js'></script> 
				 					<div id='footer_wide_bg' style="<?php echo $footer_container_style; ?>" >  </div>
							 		<div id='body_footer' style="<?php echo $footer_container_table_style; ?>"  >   
								 		<center> 
								 			<table border="0" id='bft1' cellpadding="0" cellspacing="0" > 
								 				<tr> 
									 				<td id='bft1td1' > 
										 				<table id='bft1_1'  border="0"  cellpadding="0" cellspacing="0" > 
										 					<tr>  
											 					<td id='bft1_1td1' > 
											 						<table border="0" id='bft1_1td1_t1' cellpadding="0" cellspacing="0" style="padding-right:3px;"  > 
												 						<tr>     
												 							<td id='bft1_1td1_t1_td1' > <img src="fs_folders/images/footer/footer/left_enclosure.gif">  </td>
												 							<td id='bft1_1td1_t1_td2' > <span> SUBSCRIBE </span> </td>
												 							<td id='bft1_1td1_t1_td3' > 
											 								<span> 
											 									To our newsletter to see the  
											 									weeks top looks and more. 
											 								</span>  </td>
												 						<tr>  
											 						</table>      
											 					</td>  
											 					<td id='bft1_1td2'> 
											 					 	<table border="0" id='bft1_1td2_t1'  cellpadding="0" cellspacing="0" style="border:1px solid #ccc;padding-left:10px;s" > 
												 		 			 	<tr> 
												 					 		<td  id='bft1_1td2_t1_td1' >  
																				  <select style="padding:3px;font-size:11px;color:#c51d20;border:none;height:20px;width:100%;" id='gender_style' onchange="change_style ( 'gender_style' )" >
																				 	<option> MALE </option>
																				 	<option> FEMALE </option>
																				 </select> 
												 					 		 </td>   
												 					 		<td  id='bft1_1td2_t1_td2' style="width:100px;display:none "   >    
												 					 			<select style=" padding:2px;font-size:11px;color:#c51d20;border:none;;width:100%; height:20px;width:110px;"  id="preferred_style_male" onchange="my_style( 'preferred_style_male' )" >
																				 	<option> not provided by fs team</option>
																				 	<option> Androgynous </option> 
																					<option> Bohemian </option> 
																					<option> Casual </option>
																					<option> Electric </option>
																					<option> Goth </option>
																					<option> Grunge </option>
																					<option> Harajuku fashion </option>
																					<option> Menswear </option>
																					<option> Preppy </option>
																					<option> Punk </option>
																					<option> Street </option>
																					<option> Tradition </option>
																					<option> Urban </option>
																					<option> Vintage </option>  
																				</select>
																				<select style="padding:2px;font-size:11px;color:#c51d20;border:none;width:100%; height:20px;width:110px;display:none"  id="preferred_style_female" onchange="my_style( 'preferred_style_female' )" >
																				 	<option> not provided by fs team</option>
																				 	<option> your style</option>
																				 	<option> Androgynous </option> 
																					<option> Bohemian </option> 
																					<option> Casual </option>
																					<option> Chic </option>
																					<option> Electric </option>
																					<option> Goth </option>
																					<option> Grunge </option>
																					<option> Harajuku fashion </option>
																					<option> Menswear </option>
																					<option> Preppy </option>
																					<option> Punk </option>
																					<option> Street </option>
																					<option> Tradition </option>
																					<option> Urban </option>
																					<option> Vintage </option>   
																				</select>
																				<input type="text" value="" id="my_style_input" style="display:none" /> 
												 					 		</td>  
												 					 		<td id='bft1_1td2_t1_td3' >   
		 																		<input id='bf_email' type='text' placeholder='E-MAIL' style="color:#c51d20;width:100%"  >
												 					 		</td> 
												 					 		<td id='bft1_1td2_t1_td4' >  
												 					 			<input id='bf_ok' type='button' value='OK' onclick="save_news_letter()" >
												 					 		</td>  
											 					 	</table>
											 					</td>
											 					<td id='bft1_1td3' > 
											 						<table border="0" id='bft1_1td3_t1'  cellpadding="0" cellspacing="0" > 
												 						<tr> 
												 							<td id='bft1_1td3_t1_td1' style="padding-left:2px;" > 
												 								 
												 								<div style='margin-left:-55px;' >
												 									<span  onmouseover="alert('Your email address will be used solely for sending emails, exclusively from Fashion Sponge. Neither your email address nor your identity will be sold, leased, rented or disclosed to individuals or organizations outside of Fashion Sponge. ') " >  PRIVACY  </span>
												 								</div> 
												 							</td>
												 							<td id='bft1_1td3_t1_td2'> 
												 								 <img src="fs_folders/images/footer/footer/right_enclosure.gif">
												 							</td>
												 						<tr> 
											 						</table>
											 					</td>
										 				</table>
									 				</td> 	 
								 				<tr> 
									 				<td id='bft1td2' > 
									 					<hr style="border:1px solid #e2e2df;  width:99.4%" > 
									 				</td> 
									 		</table> 
								 			<table border="0" id='bft2' > 	
								 				<tr> 
								 					<td > 
								 						<div id='bf_div_1' > 
								 							<table border="0" > 
								 							<tr> 
									 							<td> <span id='bftitle'> PARTICIPATE </span> <br>  </td>  <tr>  
									 							<?php if( $_SESSION['mno'] != 136 ): ?> 
											 						<td> <a href="#" onclick="fs_popup( 'postarticle' , 'modal-attribute' , 'look-modal-design' ) "  >  <span id='bfp1' > POST A LOOK </span> </a></td><tr>  
											 					<?php else: ?>
											 						<td> <a href="signup"  >  <span id='bfp1' > POST A LOOK </span> </a></td><tr> 
											 					<?php endif; ?> 
											 					<td> <a href="look?category=alllooks">  <span> RATE LOOKS </span> </a></td><tr> 
											 					<td style="display:none" > <a href="#">  <span> POST AN ARTICLE </span> </a></td><tr> 
											 					<td style="display:none" > <a href="#">  <span> POST MEDIA </span></a></td><tr> 
										 					</table>
								 						</div>
									 				</td>
									 				<td> 
									 					<div id='bf_div_2' > 
									 						<table border="0" style='width:200px; border:1px solid none ' cellspacing="0" cellpadding="3" >
										 						<tr>  
											 						<td > <span id='bftitle'> COMMUNITY </span> </a> <br>  </td> <tr>
												 					<td style="display:none"   > <a href="#">  <span id='bfc1' > READ ARTICLES </span></a> <tr>
												 					<td  style="display:none"  > <a href="#">  <span> VIEW MEDIA </span> </a></td> <tr>
												 					<td style="display:none"    > <a href="#">  <span> BROWSE MEMBERS </span> </a></td> <tr>
												 					<td  style="display:none"  > <a href="#">  <span> THE DAILY DRIP (<span id="footer_blue"> OUR BLOG </span>) </span></a></td> <tr>
												 					<td> <a href="#">  <span> INVITE FRIENDS ( <img id="invite_facebook" src="fs_folders/images/footer/footer/community invite_facebook.png"> )  </span> </a> </td> <tr>
												 					<td style="display:none"    > <a href="#">  <span> FASHION INSPIRATION </span></a></td> <tr>
												 				<tr> 
											 				</table>
									 					<div> 
									 				</td>
									 				<td > 
									 					<div id='bf_div_3' > 
									 						<table border="0" > 
									 							<tr>  
										 							<td> <span id='bftitle'> INFO </span> </a> <br>   </td> <tr>
											 						<td> <a href="#">  <span id='bfi1' > ABOUT US </span> </a> <tr>
											 						<td> <a href="#">  <span> OUR STORY </span> </a> </td> <tr>
											 						<td> <a href="#">  <span> FAQ ( <span id="footer_blue"> GET HELP </span> )</span> </a> </td> <tr>
											 						<td style="display:none" > <a href="#">  <span> CAREERS </span> </a> </td> <tr>
											 						<td> <a href="#">  <span> ADVERTISE </span> </a> </td> <tr>
											 						<td> <a href="#">  <span style='visibility:hidden;' > SITE ETIQUETTE</span> </a> </td> <tr>
											 						<td> <a href="#">  <span style='visibility:hidden;' > PRIVACY POLICY</span> </a> </td> <tr>
										 					</table>
									 					<div> 
									 				</td>
									 				<td> 
									 					<div id='bf_div_4' > 
									 						<table border="0" style='width:200px' > 
									 							<tr>  
											 						<td style="height:32px;" >    </td> <tr>
												 					<td  style="display:none"  ><a href="#">  <span id='bfi1' > CONTRIBUTE ( <span id="footer_blue" > WRITE FOR US </span> ) </span> </a> </td> <tr>
												 					<td> <a href="#">  <span> SUBMIT FEEDBACK </span> </a> </td> <tr>
											 						<td> <a href="#">  <span> ETIQUETTE ( <span id="footer_blue" > SITE RULES </span> ) </span> </a> </td> <tr>
												 					<td  style="display:none"  ><a href="#">  <span> CONTEST & RULES </span> </a> <tr>
												 					<td>
												 						<a onmouseover="alert('Your email address will be used solely for sending emails, exclusively from Fashion Sponge. Neither your email address nor your identity will be sold, leased, rented or disclosed to individuals or organizations outside of Fashion Sponge. ') "  >  <span> PRIVACY POLICY </span> </a> <tr>
												 					<td><a href="#">  <span> TERM  OF SERVICE </span> </a> <tr>
										 					</table>
									 					<div> 
									 				</td>
									 				<td  id="td_footer_icons" > 
									 					<table border="0"  id="bf_div_5" > 
										 					<!-- <div id='bf_div_5' >  -->
										 						<td id='follow_us_td'  > 
										 							<span>   FOLLOW US </span>  <br> 
										 						</td>
										 					<tr>  
										 						<td id='fu_white' > 
										 							<a href="#">  <span > YOU KNOW YOU WANT TO </span> </a> <br>   
										 						</td>
										 					<tr>  
										 						<!-- <div id='bf_div_5_div'>  -->
										 						<td style="display:none" > 
										 							<table border="0" cellpadding="0" cellspacing="0" >  
										 								<tr>  
										 									<td> 
												 								<a href="https://facebook.com/FashionSponge/" target="_blank" >       <img src="fs_folders/images/genImg/blue-facebook-icon.png"> </a>
												 							</td>
												 							<td>  
												 								<a href="https://twitter.com/FashionSponge/"      target="_blank" >   <img src="fs_folders/images/genImg/blue-twitter-icon.png"> </a>
												 							</td>
												 							<td> 
												 								<a href="http://fashionsponge.tumblr.com/"   target="_blank" >        <img src="fs_folders/images/genImg/blue-tumblr-icon.png">  </a>
												 							</td>
												 							<td>  
												 								<a href="https://pinterest.com/FashionSponge/"    target="_blank" >   <img src="fs_folders/images/genImg/blue-pinterest-icon.png">  </a>
												 							</td>
												 							<td>  
												 								<a href="http://instagram.com/FashionSponge/"     target="_blank" >   <img src="fs_folders/images/genImg/instagram-blue.png">  </a>
												 							</td>
											 						</table>
											 					</td>
											 						<!-- <a href=""> <img src="fs_folders/images/footer/footer/facebook.png"> </a>
											 						<a href=""> <img src="fs_folders/images/footer/t.gif">  </a>
											 						<a href=""> <img src="fs_folders/images/footer/q.gif">  </a>
											 						<a href=""> <img src="fs_folders/images/footer/i.gif">  </a> -->	

										 						<!-- </div> -->
										 					<!-- <div>  -->
									 					</table>
									 				</td>
								 			</table>
								 		</center>
							 		</div> <!-- end main footer -->
			 <?php endif;  
			# unset the session which is set as to hide the pages
				unset($_SESSION['hide_page']); ?>
