<?php
	require("fs_folders/php_functions/connect.php");
	require("fs_folders/php_functions/function.php");
	require("fs_folders/php_functions/myclass.php");
	require("fs_folders/php_functions/library.php");
	require("fs_folders/php_functions/source.php");
    require ('fs_folders/php_functions/Class/User.php');
    require('fs_folders/php_functions/Helper/helper.php');
    require("fs_folders/php_functions/Class/Look.php");
    require("fs_folders/php_functions/Class/Reset.php");
    require("fs_folders/php_functions/Color/Color.php");

     use App\php_function;
	 use App\Reset;
	 use App\User;
	 $mc    = new myclass();
	 $reset = new  Reset();
	 $db    = new Database();
	 $db->connect(); 
     $color = new php_function\Color(); 
     // $base_url = 'http://localhost/fs/new_fs/alphatest/';
     $base_url = 'http://' . subDomain . 'fashionsponge.com/';
 	// $db	= new Database();
    $ri = new resizeImage ( );
	$mc = new myclass();
	$mc->auto_detect_path();
	$_SESSION['mno'] =  $mc->get_cookie( 'mno' , 136 );
 	$mno 			 =  $mc->get_cookie( 'mno' , 136 );
    is_allow_redirect('home', $mc->mno);


    //Redirect home if not log in.
    if($mno == 136) {
    	$mc->go('home');
    } 
    $look = new Look($mc->mno,  $db);


echo "<div style='display:block' >";


	/**
	* Delete Tag
	*/
	if(isset($_POST['deleteTag'])) {
		$pltgno = $_POST['pltgno'];  
		if($look->delete_tag($pltgno)) { 
		} else {  
		}
	}   
	
//echo "<pre>";
    $user              = new User($mno, $db);
  //print_r( $user->getMyInfo() );
    $user->getMyInfo();

//  echo "</pre>";
//echo  " post agree " . $user->post_look_agree;

if (!empty($_SESSION['adm_no'])) {
		#can edit
	}
	else if ($mno == 136 ) {
		$mc->save_current_page_visited( 'post-look-upload' );
		//$mc->go('login');
	}
	$_SESSION['post_a_look_is_look_upload_once_in_db'] = false;

//	  echo " this is is to be edited look = ".tobe_edite_look_id().'<br>';

	if( is_edit_look( tobe_edite_look_id() ) ) {

		// echo "edite look";

		$plno=tobe_edite_look_id();
//        print($plno);
		$pl_info=$mc->posted_look_info($plno);

		// print_r($pl_info);
		// echo 'lnmae '.$pl_info['lookName'].' ldesc'.$pl_info['lookAbout'];
		// echo " total tags = ".count($pl_info['pltags']);
		// for ($i=0; $i < count($pl_info['pltags']) ; $i++) {
		// 	$pl_info[$i][]
		// 	 echo " pltags = ";
		// }

		$lookAbout                      = $pl_info['lookAbout'];
		$pltags                         = $pl_info['pltags'];
		$lookName                       = $pl_info['lookName'];
		$occasion                       = $pl_info['occasion'];
		$season                         = $pl_info['season'];
		$styleFashion                          = $pl_info['style'];
		$article_link                   = $pl_info['article_link'];
		$Ttag                           = count($pl_info['pltags']);
		$_SESSION['last_look_uploaded'] = $plno;
		$_SESSION['look_edit']          = true;

        foreach($pltags as $tag) {
            $colorArray[] = explode(',', $tag['plt_color'])[1];
        }

		// echo "plno = $plno";
		echo"<span id='type' style='display:none'>".$_GET['type']."</span>";
		echo"<span id='plno' style='display:none'>".$_GET['kooldi']."</span>";
		// echo "edit";

//                echo "<pre>";

        //        print_r($pl_info);
//        print_r($pltags);


//        print_r($colorArray);
//               exit;


        echo "<div id='content' style='display:none'>$lookAbout</div>";
	}
	else {
		// echo " new uploaded look ";

		$lookAbout =  "";
		$pltags =  "";
		$lookName =  "";
		$occasion =  "";
		$season = "";
		$style =  "";
		$article_link = "";
		// echo "from posted look";
		$plno = user_last_look_uploaded();
		$_SESSION['last_look_uploaded'] = $plno;
		$_SESSION['look_edit'] = false;
		// set notification
			// $_SESSION['modal_posted'] = 1;
			// $mc->set_notification_info( 'postedlooks' , $plno , ' posted a new look' , 0 ,  0 );
		$type = ( !empty( $_GET['type']) ) ? $_GET['type'] : null ;
 		switch ( $type ) {
 			case 'cropped':
 				break;
 			default:
 				#this is not being cropped
 					$mc->resize_posted_look( $plno , $mc->look_folder );
 				break;
 		}
	}
	// echo'LOOK ID '.$plno.'<BR>';
	 // print_r($pl_info['pltags']);
 	$h1 = 600;  # height of the look container
	$w1 = 889;  # width of the look container
	//$plno = '396';
	$img              = "$mc->look_folder_lookdetails/$plno.jpg";
	$lookmodalssize = $mc->lookdetails_set_size_of_the_look( $img , $ri  );
	// $li               = $mc->posted_look_info($_GET['id']);
	$mc->header_attribute(
		"OOTD | Trends | Fashion Blogs | Beauty Tips | Fashion Inspiration | Fashion Sponge " ,
		"Fashion Sponge is the easiest & fastest way to: Show your ootd, see the latest trends, discover fashionable people & blogs, get beauty & style tips & find fashion inspiration.",
		"OOTD | Trends | Fashion Blogs | Beauty Tips | Fashion Inspiration "
	);
    echo " </div>";
	$method  =  $_GET['method'];
//    echo  date("Y-m-d h:i:s a");

 
 
?>

<html>
	<head>

        <title> Label a Look </title>
		<link rel="stylesheet" type="text/css" href="fs_folders/labellok_items/css/style.css">
		<script src="fs_folders/labellok_items/js/plugin.js"></script>
        <script type="text/javascript" src="fs_folders/js/postalook.js" ></script>


        <?php
 		include('fs_folders/labellok_items/js/js_function.php');
 		include('fs_folders/labellok_items/js/init.php');
 		include('fs_folders/labellok_items/js/ajax.php');
 		include('fs_folders/labellok_items/js/image_click.php');
 		// require("fb-sdk.php");
 		?>

 
		<script type="text/javascript">
			var lName;
			var tAbt;
			function share_fb(){
				if(getID("fb_").checked){
					lName = $('.look_name').val();
					tAbt = $('.textarea').val();
					PopupCenter("http://www.facebook.com/sharer.php?s=100&p[title]="+lName+"&p[summary]="+tAbt+"&p[url]=http://fashionsponge.com/fs/lookdetails.php?id=<?php echo $r[0]; ?>&p[images][0]=http://fashionsponge.com/fs/images/members/posted looks/<?php echo $r[0]; ?>.jpg&p[via]=FashionSponge",tAbt,660,330);
				}
			}
			function share_tw(){
				if(getID("tw_").checked){
					lName = $('.look_name').val();
					PopupCenter("http://twitter.com/share?url=http://fashionsponge.com/fs/lookdetails.php?id=<?php echo $rs[0]; ?>&text="+lName+"\n","",660,330);
				}
			}
		</script>

		<?php if(isLocal()) { ?> 
			<div id="postalook-tag-preivew-path" style="display:none" >http://<?php echo subDomain; ?>fashionsponge.com/fs_folders/images/uploads</div>
            <?php $_SESSION['tagPath'] = 'http://' . subDomain . 'fashionsponge.com/fs_folders/images/uploads' ?>
		<?php } else { ?>
			<div id="postalook-tag-preivew-path" style="display:none" >http://localhost/fs/new_fs/alphatest/fs_folders/images/uploads</div> 
		    <?php $_SESSION['tagPath'] = 'http://localhost/fs/new_fs/alphatest/fs_folders/images/uploads' ?>
        <?php } ?>

	</head>




	<?php
	# initialized
	 			 					$modal['src']  		= '';
	 			 					$modal['title']  	= '';
	 			 					$modal['desc']  	= '';
	 			 					$modal['url']  		= '';
	 			 					$modal['style']  	= '';
	 			 					$modal['season']    = '';
	 			 					$modal['occasion']  = '';
	 			 					$modal['keyword']  	= '';
	 			 					$modal['selected0'] = '';
	 			 					$modal['selected1'] = '';
	 			 					$modal['selected2'] = '';
	 			 					$modal['selected3'] = '';
	 			 					$modal['selected4'] = '';
									$modal['selected5'] = '';
									$modal['selected6'] = '';
									$modal['selected7'] = '';

	 			 					switch ( $method ) {
	 			 						case 'edit':

//		 			 							$ri = new resizeImage ();
//			 									// echo "edite look";
//												$pl_info=$mc->posted_look_info($table_id);
//												// print_r($pl_info);
//												// echo 'lnmae '.$pl_info['lookName'].' ldesc'.$pl_info['lookAbout'];
//												// echo " total tags = ".count($pl_info['pltags']);
//												// for ($i=0; $i < count($pl_info['pltags']) ; $i++) {
//												// 	$pl_info[$i][]
//												// 	 echo " pltags = ";
//												// }
//
//												$modal['desc']                  = $pl_info['lookAbout'];
//												$modal['title']                 = $pl_info['lookName'];
//												$modal['occasion']              = $pl_info['occasion'];
//												$modal['season']                = $pl_info['season'];
//												$modal['style']                 = $pl_info['style'];
//												$modal['url']                   = $pl_info['article_link'];
//												$modal['keyword']               = $pl_info['keyword'];
//
//
//												$pltags                         = $pl_info['pltags'];
//												$pltags                         = $pl_info['pltags'];
//												$Ttag                           = count($pl_info['pltags']);
//												$_SESSION['last_look_uploaded'] = $table_id;
//												$_SESSION['look_edit']          = true;
//												// echo "plno = $plno";
//												echo"<span id='type' style='display:none'>".$method."</span>";
//												echo"<span id='plno' style='display:none'>".$table_id."</span>";
//												// echo "edit";
												$modal['src']  = "$mc->look_folder_lookdetails/$plno.jpg";
												$lookmodalsstyle     = $mc->lookdetails_set_size_of_the_look( "../../../".$modal['src'] , $ri );
//
//												// selected
//												    $modal['select']     = ( $modal['style'] == ''           ) ? 'selected' : null ;
//													$modal['selected0']  = ( $modal['style'] == 'Chic'       ) ? 'selected' : null ;
//													$modal['selected1']  = ( $modal['style'] == 'Menswear'   ) ? 'selected' : null ;
//													$modal['selected2']  = ( $modal['style'] == 'Preppy'     ) ? 'selected' : null ;
//													$modal['selected3']  = ( $modal['style'] == 'Streetwear' ) ? 'selected' : null ;
//													$modal['selected4']  = ( $modal['style'] == 'bohemian'   ) ? 'selected' : null ;
//													$modal['selected5']  = ( $modal['style'] == 'casual'     ) ? 'selected' : null ;
//													$modal['selected6']  = ( $modal['style'] == 'Formal'     ) ? 'selected' : null ;
//													$modal['selected7']  = ( $modal['style'] == 'Grunge'     ) ? 'selected' : null ;

	 			 							break;
	 			 						default:
	 			 							break;
	 			 					}
                                        ?>

									<html>
										<head>
											<link rel="stylesheet" type="text/css" href="fs_folders/labellok_items/css/style.css">
											<script src="fs_folders/labellok_items/js/plugin.js"></script>
									 		<?php

									 		// include('fs_folders/labellok_items/js/js_function.php');
									 		// include('fs_folders/labellok_items/js/init.php');
									 		// include('fs_folders/labellok_items/js/ajax.php');
									 		// include('fs_folders/labellok_items/js/image_click.php');
									 		// require("fb-sdk.php");

									 		?>
										</head>
										<body style="padding-bottom:0px; margin-bottom:0px;padding-top:0px; margin-top:0px;" id='label-look-body' onload="postalook()" >
										
					<!-- 					<div id="left_side"  style="border:1px solid red; height:200px;" > 
											
										</div> -->

												<!-- <div id="new-postalook-label-container" >  -->
													<div id='' class='pl_tags_edit' style='display:none' >
													 	<?php
													 		// $pltags = $pl_info;


													 		if (!empty($pltags)) {
													 			# code...
													 			// echo "not empty";
														 		for ($i=0; $i < count($pltags) ; $i++) {
														 			for ($j=2; $j < 11; $j++) {
														 				if ($i==0 and $j==2) {
														 					// first color
														 					$firstcolor = $pltags[$i][$j];
														 					echo "<div id='fcolor' id='fcolor' >$firstcolor</div>";
														 				}
																		echo  $pltags[$i][$j].',';
														 			}
														 			echo "-,";
														 		}
													 		}else {
													 			// echo "empty";
													 		}
													 	?>
													</div>

													<div id='Ttag_edit' class='Ttag_edit' style='display:none' >
													  	<?php
													  		if (!empty($pltags)) {
													  			echo count($pltags);
													  		}else {
													  			echo 0;
													  		}
														?>
													</div>

											 		<div id='divCoord' style='position:fixed;display:none; z-index:500 background-color :#000'>
											 				this is the position
											 			<!-- coordinate -->
											 		</div>

													<div id='block_barrer' style=" visibility:hidden " >
														<span id='ins_label' style='display:none;' >
															<b>LABEL YOUR ITEMS</b>
															</br>
															<span>click this photo to label what you're wearing</span>
														</span> 
														<span id='ins_del' >
															<b> DOUBLE CLICK </b>
															<br>
															<span> to remove </span>
															this is the best !
														</span>
													</div>

													<div id='del_tag_option'>
													</div>
													<div style="margin: 0px auto;   background-color:white;width:910px;  border-radius:5px;" id="post-look-container" >
															<!-- <div id="divCoord"> coordinates </div>   -->
															<div id="new-postalook-label-wrapper"  >

																<div id="new-postalook-header-div" style="display:none" >
																	<table border="0" cellpadding="0" cellspacing="0" >
																		<tr>
																			<td style="width:280px;" > <div style="color:#b32727;font-size:60px;font-family:misoLight " > LABEL LOOK </div> </td>
																			<td> <div> mao ni ang look nga imong gi submit dap l sa look daun img label sa look daun look  a look daun look daun img label sa look daun i e   check if sakto ba or dili g label sa look daun imni sya sakto. daghang salamat sa inyong  pag supporta sa amoang cog label sa look daun img label sa look daun immpany. </div> </td>
																	</table>
																</div>

																<div id='body' style="padding:0px; border: 1px solid #f6f7f8; " >
																	<center>
																		<table border="0" cellpadding="0" cellspacing="0" >
																			<tr>
																				<td style="position:absolute;" >
																					<?php if ( $method != 'edit' ): ?>
																						<!-- <div style="position:absolute; border:1px solid none;" id="modal-upload-div" onmouseover ="$('#modal-upload-div').css('display','block')" >
																							<form  action="photo.resize.php?type=upload-look-and-resize" method="POST" enctype="multipart/form-data" id="upload-modal" >
																							 	<input type='file' id="modal-image-file" name="file" runat="server" style="display:none;"  />
																							 	<input type="button" value="upload" onclick="$('#modal-image-file').click( );" />
																					 		</form>
																					 	</div> -->
																					<?php endif; ?>
																				</td>
																			<tr>
																				<td id="circle-tag">
																					<div id='block_circle_tags'  style="border:1px solid none; display:block;  "  >    	
																				  	</div>
																				</td>
																			<tr>
																				<td id="dropdown-tags" >
																					<div id='tag1'>
																						 	<?php 
                                                                                            $look->print_tags_includes();
																							 $c=0;
																							 $totalTagEdit =  count($pl_info['pltags']); 
																							 for ($i=1; $i <16 ; $i++):
																							 	 $c++;
																							 	 $background  = '';
                                                                                                 $look->print_tags($i, $c, $pl_info['pltags'], $totalTagEdit);
                                                                                             endfor;
                                                                                            ?>
																		 				</div>
																				</td>
																			<tr>
																				<td>
																					<div id="modal-posting-status" style="display:none;border:1px solid black; background-color:rgb(248, 248, 248); padding:20px; text-align:center " >Next Reset <?php echo  date("D, d M Y h:i A", strtotime($reset->nextResetDate()));  ?> Total post for today <?php echo $look->totalPostInADay($mc->mno) + 1; ?> of <?php echo $look->totalAllowPostADay ?></div>
																				</td> <tr>
																				<td id='left_side' onmouseover="$('#modal-upload-div').css('display','block')" onmouseout ="$('#modal-upload-div').css('display','none')" >

																					<!-- upload image -->

																				 	<!--  images -->


																					<?php if ( $method != 'edit' ) {  ?>

																						<div style="position:absolute; border:1px solid none;" id="modal-upload-div" onmouseover ="$('#modal-upload-div').css('display','block')" >
																							<form  action="photo.resize.php?type=upload-look-and-resize" method="POST" enctype="multipart/form-data" id="upload-modal" >
																							 	<input type='file' id="modal-image-file" name="file" runat="server" style="display:none;"  />
																							 	<!-- <input type="button" value="upload" onclick="$('#modal-image-file').click( );" />    -->
																					 		</form>
																					 	</div>
																						<div id="upload-image">
																						  	<!-- <img src="fs_folders/images/post/upload.png"  onclick="$('#modal-image-file').click( );"  >   -->
																						  	<img
																								id="postarticle-upload-image"
																								src="fs_folders/images/post/upload-article.png"
																								onclick="$('#modal-image-file').click( );"
																								onmousemove=" mousein_change_button ( '#postarticle-upload-image' , 'fs_folders/images/post/upload-article-mouse-over.png' )"
																								onmouseout="mouseout_change_button (  '#postarticle-upload-image' , 'fs_folders/images/post/upload-article.png' ) "
																							/>
																						</div>

																 						<center>
																	 						<!-- <img src="<?php echo "$mc->look_folder_home/6.jpg";  ?>"  style='<?php echo $lookmodalssize; ?>' id="modal-image"   />   	  -->
																	 						<img src="<?php echo $modal['src']; ?>"  style='<?php echo $lookmodalsstyle; ?>' id="modal-image"   />
																	 						<div id="postalook-agreement-and-rotate" >
																		 						<div id="upload-image1">
																		 							<img
																										id="postarticle-browse"
																										src="fs_folders/images/post/browse.png"
																										onclick="$('#modal-image-file').click( );"
																										onmousemove=" mousein_change_button ( '#postarticle-browse' , 'fs_folders/images/post/browse-mouse-over.png' )"
																										onmouseout="mouseout_change_button (  '#postarticle-browse' , 'fs_folders/images/post/browse.png' ) "
																									/>
																								</div>
																							    <table>
																							      	<tbody><tr>
																							          <td class="postarticle-want-crop-agreement" >
																							          		<input type="checkbox" disabled><span onclick="alert('Comming soon..')" >I want to crop or rotate my image</span>
																							          </td>
																							        </tr><tr>
																							          <td style="padding-top: 7px"; >
                                                                                                          <?php if( $user->post_look_agree == 0) { ?>
																							          		<input type="checkbox" id="post-look-agreement" ><span>I agree to the posting a look rules</span>
                                                                                                          <?php } else { ?>
                                                                                                              <input type="checkbox" id="post-look-agreement"  checked><span>I agree to the posting a look rules</span>
                                                                                                          <?php } ?>
																							          </td>
																							  		</tr></tbody>
																							  	</table>
																							  	<!-- <div style="position: absolute;float: left;margin: 20px 0px 0px 0px; ">    -->
                               																	<!-- <input type="checkbox" name="post-look-agreement" id="post-look-agreement" checked=""> Agree Term <a href="agreement" target="_blank"> read </a> </div> -->
																							</div>
																						</center>


                                                                                    <?php } else { ?>


                                                                                        <center>
                                                                                            <img src="<?php echo $modal['src']; ?>"  style='<?php echo $lookmodalsstyle; ?>' id="modal-image"   /> 
                                                                                        </center>

                                                                                     	<center>  
																	 						<div id="postalook-agreement-and-rotate" > 
																							    <table>
																							      	<tbody><tr>
																							          <td class="postarticle-want-crop-agreement" >
																							          		<input type="checkbox"><span>I want to crop or rotate my image</span>
																							          </td>
																							        </tr><tr>
																							          <td>
                                                                                                          <?php if( $user->post_look_agree == 0) { ?>
																							          		<input type="checkbox" id="post-look-agreement" ><span>I agree to the posting a look rules</span>
                                                                                                          <?php } else { ?>
                                                                                                              <input type="checkbox" id="post-look-agreement"  checked><span>I agree to the posting a look rules</span>
                                                                                                          <?php } ?>
																							          </td>
																							  		</tr></tbody>
																							  	</table>
																							  	<!-- <div style="position: absolute;float: left;margin: 20px 0px 0px 0px; ">    -->
                               																	<!-- <input type="checkbox" name="post-look-agreement" id="post-look-agreement" checked=""> Agree Term <a href="agreement" target="_blank"> read </a> </div> -->
																							</div>
																						</center>
                                                                                    <?php } ?>


																					</td>
																			<tr>
																				<td>

																					<!-- bottom colors -->

																						<div style="border-top:1px solid grey" >
																							<?php
																								if ( !empty($pltags) ) {

																									$c=0;
																									echo "
																										<div id='new-postalook-color-underimage-div' >
																											<table border='0' cellpadding='0' cellspacing='0' >  
																												<tr>";
																													for ($i=0; $i < 15 ; $i++) {
																														$c++;
                                                                                                                        $colorPrint = (!empty($colorArray[$i])) ? $colorArray[$i] : null ;
                                                                                                                        $tc =  $color->getHtmlCode($colorPrint);
																														if ($c <= count($pltags)) {
																															#  sa mga tag nga naay color
																															if ( $i==0 ) {
																																#sugod td sa color pallete
																																$style = "display:block; background-color:$tc; border-radius:0 0 0 5px;";
																															}
																															else if ( $i== count($pltags)-1 ) {

																																#last print td sa color pallete
																																$style = "display:block; background-color:$tc; border-radius:0 0 5px 0;";
																															}
																															else{
																																$style = "display:block; background-color:$tc";
																															}
																														}
																														else{
																															# kong ang td is walay sulod nga color
																															$style = 'display:none';
																														}

																														echo "
																															<td id='new-postalook-tagcolor-td$c'  class='new-postalook-tagcolor-td$c' style='$style'   > <div> </div></td> 
																														";
																													}
																													echo "
																											</table>	
																										</div> 
																									";
																								}
																								else {
																									echo "
																										<div id='new-postalook-color-underimage-div' >
																											<table border='0' cellpadding='0' cellspacing='0' >  
																												<tr>  
																													<td id='new-postalook-tagcolor-td1'  class='new-postalook-tagcolor-td1'   > <div></div></td> 
																													<td id='new-postalook-tagcolor-td2'  class='new-postalook-tagcolor-td2'   > <div></div></td> 
																													<td id='new-postalook-tagcolor-td3'  class='new-postalook-tagcolor-td3'   > <div></div></td> 
																													<td id='new-postalook-tagcolor-td4'  class='new-postalook-tagcolor-td4'   > <div></div></td> 
																													<td id='new-postalook-tagcolor-td5'  class='new-postalook-tagcolor-td5'   > <div></div></td> 
																													<td id='new-postalook-tagcolor-td6'  class='new-postalook-tagcolor-td6'   > <div></div></td> 
																													<td id='new-postalook-tagcolor-td7'  class='new-postalook-tagcolor-td7'   > <div></div></td> 
																													<td id='new-postalook-tagcolor-td8'  class='new-postalook-tagcolor-td8'   > <div></div></td> 
																													<td id='new-postalook-tagcolor-td9'  class='new-postalook-tagcolor-td9'   > <div></div></td> 
																													<td id='new-postalook-tagcolor-td10' class='new-postalook-tagcolor-td10'   > <div></div></td> 
																													<td id='new-postalook-tagcolor-td11' class='new-postalook-tagcolor-td11'   > <div></div></td> 
																													<td id='new-postalook-tagcolor-td12' class='new-postalook-tagcolor-td12'   > <div></div></td> 
																													<td id='new-postalook-tagcolor-td13' class='new-postalook-tagcolor-td13'   > <div></div></td> 
																													<td id='new-postalook-tagcolor-td14' class='new-postalook-tagcolor-td14'   > <div></div></td> 
																													<td id='new-postalook-tagcolor-td15' class='new-postalook-tagcolor-td15'   > <div></div></td>   
																											</table>	
																										</div> 
																									";
																								}
																							?>
																						</div>
																				</td>
																		</table>
																	</center>
																</div>
																<table border="0" cellpadding="0" cellspacing="0" style="width:100%;" >
																	<tr>
																		<td>
																			<div id='right_side' style="display:block; z-index:100;height:250px" >
																				<table border="0" cellpadding="0" cellspacing="0" style="width:100%; " >
																					<tr>
																						<td>
																						 	<div style="color:#b32727;font-size:30px;font-family:'misoRegular';display:none" >
																						 		DETAILS
																						 	</div>
																						</td>
																					<tr class="modal-click-hide-dropdown" >
																						<td style="padding-top:6px; " >
																							<table id="post-title-url" >
																							  	<tbody>
																								    <tr>
																								      <td><div>Title</div></td><td style="padding-left: 7px;" ><div>Article Url</div></td> </tr><tr>

																								     <td>
																								          <input placeholder="160 characters max" type="text" id="onetwo" class="look_name"   title="Name your look (160) character." style="width:100%;" value="<?php echo $lookName; ?>" >
																								    </td>

																								    <td style="padding-left: 5px;">
																								      <input title="Add source url of the article (optional)." type="text" class="look-article-field" value="<?php echo $article_link; ?>" placeholder="paste look url" style="width:100%; border:1px solid none; ">
																								    </td>
																									</tr>
																									</tbody>
																								</table>
																						</td>
																				    <tr>
																					 	<td style="padding-top:6px;" >
																					 		<table border="0" cellpadding="0" cellspacing="0" style="width: 890px;margin-left: 4px;">
																					 			<tr class="modal-click-hide-dropdown" >
																					 				<td> <div style="padding-bottom:10px;" >Style</div> </td>
																					 				<td> <div style="padding-bottom:10px;margin-left:0px;" > Occasion </div> </td>
																					 				<td> <div style="padding-bottom:10px;margin-left:1px;" > Season </div> </td>
																					 				<td> <div style="padding-bottom:10px;margin-left:4px; display:none" > Tags </div> </td>
																						 		<tr>
																						 			<td style="background:white; border:1px solid white" >
																						 				 <?php $look->designPostAlookStyle($styleFashion); ?>
																						 			</td>
 

																						 			<td style="background:white; border:1px solid white" > 
																						 			<?php $look->designPostAlookOccasion($occasion); ?>

																						 			 		
  																										    <input style="display:none; width:100%;display:none; visibility:hidden; border:1px solid none; "  type='text' value='<?php  echo $occasion; ?>' id='input345' class='occasion hide'    placeholder='Where can you wear this?'  onclick="hide_all_open_dropdown('none','res_occasion','none')"; >


 
 












																						 			</td>
																						 			<td style="background:white; border:1px solid white" >

																						 					<?php $look->designPostAlookSeason($season); ?> 


																										
																										<input  style="display:none;width:100%;display:none"  type='text' value='<?php  echo $season; ?>' id='input345' class='season'      placeholder='During what seasons can you wear this?'   style="width:248px; border:1px solid none;float:right"  onclick="hide_all_open_dropdown('none','res_season','none')";  >
																										   
																						 			</td>
																						 			<td style="background:white; border:1px solid white; display:none" >
																						 				<!--  new version -->
														<!-- 									 				<input type="texRt" placeholder='keyword' style="width:100%;display:none"   />
																							 				<input 
																								 				value="<?php echo $modal['keyword']; ?>" 
																								 				style="width:100%; padding:5px;border:none"   
																								 				id="keyword"   
																								 				placeholder='Tags'  
																								 				title="put a comma after word to add tag." 
																								 				type='text' 
																								 				onkeyup="modal( 'modal-attribute' , 'search' , 'keyword' , 'autocomplete-dropdown-loader-keyword' , 'autocomplete-dropdown-container-keyword' , 'keyword' , '' , true )" 
																								 				onClick="show('#autocomplete-dropdown-container-keyword-1')"
																							 				/>
																						 					


																						 					<div id="label-look-dropdown-container" style="margin-top:33px;width:243px;" >  
																											    <div class="autocomplete-dropdown-container" id="autocomplete-dropdown-container-keyword" >  
																											    	<center><div id="autocomplete-dropdown-loader-cotainer"  class="autocomplete-dropdown-loader-cotainer-keyword"   >  <?php $mc->image( array( 'type'=>'loader' , 'id'=>"autocomplete-dropdown-loader-keyword" ,'style'=>'visibility:visible;height:10px;'  ) ); ?></div></center>
																											    </div> 
																											</div>  -->


																										<!-- 	<div id="label-look-dropdown-container" style="margin-top:33px;width:243px;" >
																											    <div class="autocomplete-dropdown-container" id="autocomplete-dropdown-container-keyword-1" style="display:block" >
																											    	<center>
																												    	<div id="autocomplete-dropdown-loader-cotainer"  class="autocomplete-dropdown-loader-cotainer-keyword"   >
																												    		Results
																												    	</div>
																											    	</center>
																											    </div>
																											</div>   -->

																						 			</td>
																						 			<td style='display:none' >
																										<input  style="width:100%"   type='text' value='<?php  echo $style; ?>' id='input345' class='style'       onclick='retrieve_style_list()'  >
																										<div style='' class='res_style' id='res_style'>
																										</div>
																						 			</td>
																					 		</table>
																					 	</td>
																					<tr>
																						<td style="padding-top:10px;  " class="modal-click-hide-dropdown" >
																							<div style="padding-bottom:10px;" class="moda-description-text" >
																								Description  
																							</div>
																							<?php   require("$base_url/fs_folders/ckeditor/samples/replacebyclass.html");  ?>








																							<!-- <textarea placeholder='320 characters  max' rows='10' cols='30' maxlength='320' id='onetwo' class='textarea' title="What’s the story behind your look?" style="height:50px;" ><?php echo $modal['desc']; ?></textarea> -->
																						</td>
																					<!--
																					<tr> 
																				 		<td> 
																							<div style="position: absolute;float: left;margin: 20px 0px 0px 0px; ">  
																								 
                               																	<input type="checkbox" name="post-look-agreement" id="post-look-agreement" <?php echo (!empty($_COOKIE['isAgreed']))? 'checked' : ''; ?> > Agree Term <a href="agreement" target="_blank"> read </a>
																						 </div> 
																						</td> 
																					-->
																				</table>
																			</div>
																		</td>
											 						<tr>
											 							<td style="border:1px solid none; " >
											 								<!-- this is the reason of the free space of the bottom area -->
											 								<div id='footer' >
																				<div id='tag_list' style='display:none; border:1px solid none; width:100%; '   >
																					<ul style="display:block" >
																						<li><div style="color:#b32727;font-size:30px;font-family:'misoRegular';" > TAGS </div> </li>
																						<li><div style='margin-left:20px;padding-top:4px;' >
																							When labeling all items in this photo only fill in the fields that relate to the item.
																						</div></li>
																					</ul>
																 				</div>
																 				<br>
																 				<style type="text/css">
																 					.tagged_occasion {
																 						color: #fff;
																 					}
																 				</style>
																 				<!-- the block box -->
																 					<div style="display:none" >
																		 				<div id='hastag_box_list' style='display:none; border: 1px solid none'>
																		 					<table border=0>
																			 					<?php
																			 					$c=0;
																			 					echo "
																			 					<table>
																			 						<td>Accasion:</td> <td><a href='#'><span class='hashtag_occasion'></span></a></td><tr>
																			 						<td>Season:</td> <td><a href='#'><span class='hashtag_season'></span></a></td><tr>
																			 						<td>Style :</td> <td><a href='#'><span class='hashtag_style'></span></a></td><tr>
																			 					</table> ";
																			 					for ($i=0; $i <15 ; $i++) {
																			 						$c++;
																			 						?>
																			 						<style type="text/css">
																			 							#tagged_list_<?php echo $c ?>{
																											 display: none;
																										}
																			 						</style>
																			 						<?php
																			 						echo " <table border=1 id='tagged_list_$c' class='tagged_list_'  > ";
																				 						echo "<td id='tagged_num_$c' style='cursor:pointer;width:61px'> Item# $c </td> ";
																				 						for ($j=0; $j <6 ; $j++) {
																				 						echo "<td>";
																				 							 echo "<a href='#'><span style='display:block;color:white !important' id=hashtag_".$c."_".$j." ></span><span> hashtag_".$c."_".$j." </span></a>";
																				 						echo "</td>";
																				 						}
																				 					echo "<table>";
																			 					}
																			 					 ?>
																		 					</table>
																		 				</div>

																	 				<!-- save buttons and shares -->

																		 				<!-- <br><br><br><br><br> -->
																		 				<div id='into_ready_to_be_saved_in_db' style='display:none' ></div>
																		 				<div id='db_res'  style='display:none' > result here</div>
																		 				<!-- <br><br>   -->
																						<div id='post_on' style="display:none" >
																							<table border="0" cellpadding="0" cellspacing="0" >
																								<tr>
																								 	<td  style="width:300px;"  >
																								 		<span  style="color:#b32727;font-size:30px;font-family:'misoRegular';" >POST THIS LOOK ON:</span><br>
																										<table border="0" cellpadding="0" cellspacing="0" style="width:220px;" >
																											<tr>
																												<td style="width:20px;" >
																													<img src="fs_folders/images/genImg/postalook-grey-check.png" id="new-postalook-label-share-to-fb-check" onclick='new_postalook_label_share(  "#new-postalook-label-share-to-fb" )'   />   <br>
																													<input type="text" value="not share fb" id="new-postalook-label-share-to-fb"    />
																												</td>
																												<td>
																													<span onclick='new_postalook_label_share(  "#new-postalook-label-share-to-fb" )' style='cursor:pointer' >Facebook</span>
																												</td>
																											<tr>
																												<td style="width:20px;" >
																													<img src="fs_folders/images/genImg/postalook-grey-check.png" id="new-postalook-label-share-to-tw-check"  onclick='new_postalook_label_share(  "#new-postalook-label-share-to-tw" )'  >
																													<input type="text" value="not share tw" id="new-postalook-label-share-to-tw"    />
																												</td>
																												<td>
																													<span onclick='new_postalook_label_share(  "#new-postalook-label-share-to-tw" )' style='cursor:pointer' > Twitter</span>
																												</td>
																										</table>
																								 	</td>
																								 	<td>
																								 		<span style="color:#b32727;font-size:30px;font-family:'misoRegular';" > WANT FEEDBACK? </span><br>
																										<table border="0" cellpadding="0" cellspacing="0" >
																											<tr>
																												<td style="width:20px;" >
																													<img src="fs_folders/images/genImg/postalook-grey-check.png"  id="new-postalook-label-constructive-feedback-check"  onclick='new_postalook_label_share(  "#new-postalook-label-constructive-feedback" )'  >
																													<input type="text" value="no feedback" id="new-postalook-label-constructive-feedback" />
																												</td>
																												<td>
																													<span style='cursor:pointer' onclick='new_postalook_label_share(  "#new-postalook-label-constructive-feedback" )' >
																														Receive constructive feedback to help improve your styling ability.
																													</span>
																												</td>
																											<tr>
																												<td style="visibility:hidden" > v </td><td style="visibility:hidden" > <span>hidden </span>  </td>
																										</table>
																									</td>
																							</table>
																							<!-- <span id='fbtw' > <input type='checkbox' onclick="share_fb()" id='fb_' />Facebook <input type='checkbox' onclick='share_tw()' id='tw_' /> Twitter</span> -->
																						</div>
																						<div id='save' style="border:1px solid none;width:142px; margin-top:-100px;display:none" >
																							<div id="new-postalook-post-cancel-submit" >
																								<!-- <div>  -->
																								<!-- 	<table border="0" cellpadding="0" cellspacing="0" style="display:none"  >
																										<tr>
																											<td>
																												<div style="margin-top:5px;" >
																													<a href="\" onmousemove=" mousein_change_button ( '#new-postalook-upload-button-cancel' , 'fs_folders/images/genImg/new-postalook-post-cancel-hover.png' )" onmouseout=" mousein_change_button ( '#new-postalook-upload-button-cancel' , 'fs_folders/images/genImg/new-postalook-post-cancel.png' )"  >
																														<img src="fs_folders/images/genImg/new-postalook-post-cancel.png" id="new-postalook-upload-button-cancel" />
																													</a>
																												</div>
																											<td>
																											<td>
																												<div >
																													<input type="submit" name="uploadNow" value="" onclick='save_all_data_to_db()'  id ='submt' onmousemove="mousein_change_background_image (  '#submt' , 'url(fs_folders/images/genImg/postalook-upload-look-mouse-over.png)'   )"  onmouseout="mouseout_change_background_image (  '#submt' , 'url(fs_folders/images/genImg/postalook-upload-look.png)'   )"   />
																												</div>
																											</td>
																									</table>  -->
																								<!-- </div>   -->
																							</div>
																							<!-- <img src="fs_folders/images/genImg/postalook-submit-look.png" style="cursor:pointer" id ='submt' onclick='save_all_data_to_db()'/>   -->
																							<!-- <input type='submit' value = 'SAVE' onclick='save_all_data_to_db()'  id ='submt' />  -->
																						</div>
																					</div>
																					<div style="border:1px solid none;width:200px; margin-left: 0px; margin-top: 216px;" >
																						<table>
																							<tr>
																								<td>
																									<a href="\" >
																										<!-- <input type="button" value="cancel" onclick=" fs_popup( 'close' ) " />    -->
																										<img
																											id="postarticle-cencel"
																											src="<?php echo "$mc->genImgs/cancel.png"; ?>"
																											onclick=" fs_popup( 'close' ) "
																											onmousemove=" mousein_change_button ( '#postarticle-cencel' , '<?php echo "$mc->genImgs/cancel-mouse-over.png"; ?>' )"
																											onmouseout="mouseout_change_button (  '#postarticle-cencel'  , '<?php echo "$mc->genImgs/cancel.png"; ?>' ) "
																										/>
																									</a>
																								</td>
																								<?php if ( $method == 'edit' ): ?>
																									<td>
																										<img
																											id="postarticle-submit"
																											src="<?php echo "$mc->genImgs/post.png"; ?>"
																											onclick="modal ( 'modal-attribute' ,  'insert' , 'post-modal' , '.look_name' , 'Title Required' , '' , '' , '' , '<?php echo $method; ?>' , '<?php echo $plno; ?>', '', '#post-look-agreement') "
																											onmousemove=" mousein_change_button ( '#postarticle-submit' , '<?php echo "$mc->genImgs/post.png"; ?>' )"
																											onmouseout="mouseout_change_button (  '#postarticle-submit'  , '<?php echo "$mc->genImgs/post.png"; ?>' ) "
																										/>
																										<!-- <input type="button" value="post modal" onclick="modal ( 'modal-attribute' ,  'insert' , 'post-modal' , '.look_name' , 'Title Required' , '' , '' , '' , '<?php echo $method; ?>' , '<?php echo $table_id; ?>' ) " /> -->
																									</td>
																								<?php else: ?>
																									<td>

                                                                                                        <?php if($look->isAllowPost($mc->mno) == true) {  ?>

																										<img
																											id="postarticle-submit"
																											src="<?php echo "$mc->genImgs/post.png"; ?>"
																											onclick="modal ( 'modal-attribute' ,  'insert' , 'post-modal' , '.look_name' , 'Title Required', '', '', '', '', '', '', '#post-look-agreement') "
																											onmousemove=" mousein_change_button ( '#postarticle-submit' , '<?php echo "$mc->genImgs/post-mouse-over.png"; ?>' )"
																											onmouseout="mouseout_change_button (  '#postarticle-submit'  , '<?php echo "$mc->genImgs/post.png"; ?>' ) "  />
																										<!-- <input type="button" value="post modal" onclick="modal ( 'modal-attribute' ,  'insert' , 'post-modal' , '.look_name' , 'Title Required' ) " /> -->
                                                                                                        <img id="postarticle-submit-1-fake"  style="display:none"   src="<?php echo "$mc->genImgs/post-mouse-over.png"; ?>"  />

                                                                                                        <?php } else {  ?>



                                                                                                        <?php } ?>

																									</td>
																								<?php endif;?>
																								<td>
																									<?php $mc->image( array( 'type'=>'loader' , 'id'=>"post-modal" ,'style'=>'visibility:hidden;height:10px;width:10px;'  ) ); ?>
																								</td>
																						</table>
																					</div>
																			</div>
																		</td>
																	<tr>
																</table>
															</div>
														</div>
											</center>
										</body>
									<html>
<html> 


 


