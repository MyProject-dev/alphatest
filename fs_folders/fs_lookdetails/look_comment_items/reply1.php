<?php  session_start(); ?>	
	<link rel="stylesheet" type="text/css" href="style.css">
<?php
	require ("../connect.php");
	require ("../function.php");
	require ("../library.php");
	require ("../source.php");
	require ("../myclass.php");
	require ("data/sortingTest.php");
	require ("data/comSortFunc.php");

	$mc = new myclass( );
	$st = new Sorting( );

	// echo " <li> ";


	$plcno = $_GET['plcno']; 
 	$sort = $_GET['sort'];
	$view = $_GET['view'];
	$start = 0;
	// $limit = 2;

	// echo " 
	// sort = $sort <br>
	// view = $view  <br>
	// plcno = $plcno <br> 
	//   ";

 	if ( $view == 'start') {
 		#view reply clicked
 
 		$_SESSION['replies'] = comments_reply_sorted( $st , $sort , $plcno );
 		$limit =  $st->reply_limit( $_SESSION['replies'] );


 		 
 		

 		$view_start = $start ; 
 		$view_stop = $limit ;
 		$_SESSION['counter'] = 0 ;

 		// echo " counter is ".$_SESSION['counter'].'<br>';

 	}
 	else if( $view == 'viewMore') {
 		 $limit =  $st->reply_limit( $_SESSION['replies'] );
 		$view_start = $_SESSION['counter'];
 		$view_stop = $_SESSION['counter']+$limit;

 	}
	
			 
	$repliesLen = reply_print( $mc , $_SESSION['replies'] , $view_start , $view_stop , $plcno );
 
	$rlen = count($_SESSION['replies']);
	// echo " bellow is the result";
	// print_r( $res );



	// echo "total result = $rlen <br> ";
	

	


 
	function reply_print( $mc , $replies , $view_start , $view_stop , $plcno ) {  

		$repliesLen=count($replies);	 

		// echo " total len $repliesLen <br>";

	    for ($j=$view_start; $j <$view_stop; $j++) { 
	    	if ( $j < $repliesLen ) {


			  // echo " </li>";
		    	$_SESSION['counter']++;	
	 			// echo "c = ".$_SESSION['counter'].'<br>';
				$rplcr_no = $replies[$j]['plcr_no'];
				$plcrno = $rplcr_no;
				$rplcno = $replies[$j]['plcno'];
				$replied_no = $replies[$j]['replied_no'];
				 

				$rmno = $replies[$j]['mno'];
				$rplcr_message = $replies[$j]['plcr_message'];
				$rclen = strlen( $rplcr_message );
				$rplcr_date  = $replies[$j]['plcr_date'];
				$rmem_info=$mc->user($rmno);
				$rdformat=$mc->split_date('','','',$rplcr_date);	
				$rmy_rate_look=my_trate_for_look($rmno,$_SESSION['plno']);

				$ryou_liked = check_if_user_liked (  $plcrno , $_SESSION['mno']);
				$ryou_disliked = check_if_user_disliked (  $plcrno , $_SESSION['mno'] );
				$likeDislike_style = 'height:13px;cursor: pointer;';

				if ( $rclen< 224) { 
					// echo "if comment len lessthan $rclen ";
					$style = 'height: 30px; border: 1px solid none; width:500px';
				} 
				else { 
					// echo "else comment len greater than $rclen ";
					$style = 'height: auto; border: 1px solid  none; width:500px';
				}
											
				// echo " i like =  $ryou_liked  | i disliked  $ryou_disliked <br>";

				// $you_liked =replyYouLikeThis($rplcno,$rmno);
				// echo "rno = $rplcr_no ";
				$ovarating = $mc->user_profile_percentage($rmno);
				?>


				<li>
					<table border=0   id='replied_comment_table_<?php echo $plcrno; ?>' class='rcomment_container' style='display:block'> 
						<td  > 
							<table border=0   id='img' class='img' > 
								<td>	
									<img id='rprofile_pic_<?php echo $cno; ?>'  src="images/members/<?php echo $rmno; ?>.jpg" title="<?php echo strtoupper($rmem_info['firstname'].' '.$rmem_info['lastname']); ?>"  onclick='look_comment_attr_clicked("<?php echo "profile_".$comment[$i][2]; ?>")' > 
								</td><tr>
								<td><span class='red_bold' id='percentage' title='<?php echo $get_def_user_profile_percentage ?>' ><?php echo "$ovarating% " ?></span></td>
							</table>
							<div id='rcomment_body_container' class='rcomment_body_container'> 
								<div id='comment_header_container' > 
									<table  border=0   > 
										<td><span id='rfull_name_<?php echo $rplcr_no; ?>' class='blue_bold' title="<?php echo strtoupper($rmem_info['firstname'].' '.$rmem_info['lastname']); ?>"  ><?php echo strtoupper($rmem_info['firstname'].' '.$rmem_info['lastname']); ?>  </span> </td> <td></td><td></td>

										<td><span class='blue_bold' > ( </span> <span  id='gender' class='blue'  > <?php echo strtoupper($rmem_info['sub_gen']); ?>  RATED </span> 
											<span class='rating_view' >

												<?php 
													echo "<img src='images/look_comment/rate_$rmy_rate_look.jpg'  title='$get_def_mem_rating_look' class='rating' />"; 
												?>
											</span>  <span class='blue_bold'>)</span></span> 
											<!--new user name replied -->

												<span class='blue_bold'> ( </span>  
							 					<span class='blue_bold' id='replied_name' onmouseover="replied_name_hover(<?php echo "$replied_no"; ?> )" onmouseout="replied_name_leaved(<?php echo "$replied_no"; ?> )"  > replied to  <?php echo comment_repplied_name( $replied_no , $rplcno  ); ?>  </span> 
							 				 	<span class='blue_bold'> ) </span>

						 				 	<!-- end user name replied -->
										</td>
									</table> 
								</div>
											 
								<div class='rcomment' id='rcomment_<?php echo $rplcr_no; ?>' style="<?php echo $style; ?>"  >
									<span id='rcomment_span_<?php echo $rplcr_no; ?>'><?php echo"$rplcr_message";?></span>
								</div>
								<div id='comment_footer_Container' > 
								 	 <table border=0 > 
								 	 	<td>  
								 	 		<span id='comment_time'>  POSTED ON  <?php  echo $rdformat['month'].' , '.$rdformat['day'].' , '.$rdformat['year'].' | '.$rdformat['hour'].':'.$rdformat['min'].' '.$rdformat['stat'];   ?> </span> 
								 	 	</td>
								 	 	<td></td> <td></td>
									 	 <td>
								 		 	 		<?php 

								 		 	 		// $you_liked = false;
								 		 	 		// $ryou_disliked = false;
									 		 	 		// new can only like once --> remove this to relike redislike manny times
											 		  	if ( $ryou_disliked == true || $ryou_liked == true) {
											 		 	 	$cno_for_like_dislike = 0;

											 		 	}else { 

											 		 		$cno_for_like_dislike = $rplcr_no;
											 		 	}
									 		 			//end can only like once


								 		 	 			if ($ryou_liked) {
								 		 	 			 ?>
										 		 		<img src="images/look_comment/like_green.jpg"  class='img_like'  id="<?php echo "rimg_like_".$rplcr_no; ?>" title='helpful comment'  />
									 		 	 	<?php  
									 		 	 		} else {  
									 		 	 			if( !$ryou_disliked ) { ?>
									 		 	 				<img src="images/look_comment/like.jpg"  class='img_like'  id="<?php echo "rimg_like_".$rplcr_no; ?>" title='helpful comment'  onclick='comment_Reply_Attr_Clicked("<?php echo "replyLike_$rplcr_no"; ?>")'  style='<?php echo  $likeDislike_style ; ?>'   /> <?php 
									 		 	 			}
									 		 	 			else { ?>
																<img src="images/look_comment/like.jpg"  class='img_like'  id="<?php echo "rimg_like_".$rplcr_no; ?>" title='helpful comment' /> <?php 
									 		 	 			}
									 		 	 		}
									 		 	 		 ?>

									 		 	  
								 		 	 	</td>
								 		 	    
								 		 	 	<td> 
									 		 	 	<span class='red_bold' id="<?php echo "like_".$comment[$i][0]; ?>" >  
									 		 	 		 <?php  
									 		 	 		 // if ($ryou_liked) {
									 		 	 		 // 	echo  0 ; 
									 		 	 		 // }else { 
									 		 	 		 // 	echo   0 ;
									 		 	 		 // }

									 		 	 		 echo countReplyLike ( $plcrno );
									 		 	 		 // echo " 99999 ";
									 		 	 		 ?> 
									 		 	 	</span>
									 		 	</td>

								 		 	 	<td></td> 
								 		 	 	<td> 
									 		 	 	<td>
										 		 	 		<?php

								 		 	 				if ($ryou_disliked) { ?>
										 		 				<img src="images/look_comment/unlike_green.jpg"  class='img_like'   id="<?php echo "rimg_dislike_".$rplcr_no; ?>" title='not helpful comment'   /> <?php
									 		 	 			} else {   
									 		 	 			 	if (!$ryou_liked) { ?>
									 		 	 			 		<img src="images/look_comment/unlike.jpg"  class='img_like'   id="<?php echo "rimg_dislike_".$rplcr_no; ?>" title='not helpful comment'  onclick='comment_Reply_Attr_Clicked("<?php echo "replyDisLike_$rplcr_no"; ?>")' style='<?php echo $likeDislike_style ; ?>' />
									 		 	 	  <?php 	} 
									 		 	 	  			else {  ?>
										 		 	 	  			<img src="images/look_comment/unlike.jpg"  class='img_like'   id="<?php echo "rimg_dislike_".$rplcr_no; ?>" title='not helpful comment' />
									 		 	 	  			<?php 
									 		 	 	  			}
									 		 	 			}  


									 		 	 	  ?>
									 		 	 	</td>
									 		 	 	 
									 		 	 	<td> 
										 		 	 	<span class='red_bold' id="<?php echo "dislike_".$comment[$i][0]; ?>" >  
				 										<?php  
										 		 	 		 // if ($you_liked) {
										 		 	 		 // 	echo  count_rdislike($rplcr_no); 
										 		 	 		 // }else { 
										 		 	 		 // 	echo  count_rdislike($rplcr_no);
										 		 	 		 // }
										 		 	 		 echo countReplyDislike ( $plcrno );
				 										 // echo " 99999 ";
									 		 	 		 ?> 
										 		 	 	</span>
										 		 	</td>
								 		 	 	</td>
								 		 	 	<?php if ($_SESSION['mno'] ==   $rmno ) { ?>
								 		 	 	<td></td>
								 		 	 	<td> 
								 		 	 		<td> 
								 		 	 			<img src="images/look_comment/reply.jpg"  class='img_like'  title='reply comment' onclick='comment_Reply_Attr_Clicked("<?php echo "replyEdit_".$rplcr_no; ?>")' />
								 		 	 		</td>
								 		 	 		<td>  
									 		 	 		<span class='red_bold' > 
									 		 	 			EDIT
									 		 	 		</span>
								 		 	 		</td>
								 		 	 	</td>	
								 		   
								 		 	 	<?php  } else { ?>
								 		 	 	<td></td>
								 		 	 	<td> 
								 		 	 		<td> 
								 		 	 			<img src="images/look_comment/reply.jpg"  class='img_like'  title='reply comment' onclick='look_comment_attr_clicked("<?php echo "reply_".$plcno."-".$rplcr_no; ?>")'/>
								 		 	 		</td>
								 		 	 		<td>  
									 		 	 		<span class='red_bold' > 
									 		 	 			REPLY
									 		 	 		</span>
								 		 	 		</td>
								 		 	 	</td>
								 		 	 	<td></td>
								 		 	 	<td> 
								 		 	 		<td>
								 		 	 			<img src="images/look_comment/flag.jpg"  class='img_like'  title='flag comment'  onclick='comment_Reply_Attr_Clicked("<?php echo "replyFlag_$rplcr_no"; ?>")'/>
								 		 	 			<div id='<?php echo "flag_$rplcr_no"; ?>'>  
								 		 	 			</div>
								 		 	 		</td>
								 		 	 		<td>
									 		 	 		<span class='red_bold' > 
									 		 	 			FLAG
									 		 	 		</span>
								 		 	 		</td>
								 		 	 	</td>
								 		 	 	<?php  } ?>


								 		 	 	<?php if ($_SESSION['mno'] ==  $rmno or $_SESSION['mno'] == get_look_owner($_SESSION['plno']) ) { ?>
								 		 	 	
								 		 	 	<td></td> 
								 		 	 	<td> 
								 		 	 		<td>
								 		 	 			<img src="images/look_comment/delete.jpg"  class='img_like' title='delete comment'  onclick='comment_Reply_Attr_Clicked("<?php echo "replyDelete_".$rplcr_no; ?>")'   />
								 		 	 			<div id='<?php echo "flag_$rplcr_no"; ?>'>  
								 		 	 			</div>
								 		 	 		</td>
								 		 	 		<td>
									 		 	 		<span class='red_bold' > 
									 		 	 			 DEL
									 		 	 		</span>
								 		 	 		</td>
								 		 	 	</td>
								 		 	 	<?php } ?>
								 		 	 </table>
								 		</div>
								 	</div>
								</td>
							</table>
							<hr class='rline_<?php echo $rplcr_no; ?>' id='rhr'  >
				  		</li>
<?php 		
			
			} //end if counter 
		} #end loop
		return $repliesLen;
	} #end func. 
?>
				  	<!-- <div id='reply_loader_<?php echo $plcno; ?>' id='replyLoader' class='replyLoader' >  reply loader</div>  -->
	

	<?php if ( $_SESSION['counter'] < $repliesLen ) { ?>
		<div  id='replyViewMoreContainer' class='replyViewMoreContainer_<?php echo $view_stop; ?>'  > 
			<input type='button' value='view more' onclick='replyCommentShoreMore("<?php echo $plcno; ?>","<?php echo $view_stop; ?>"  )'  class='replyCommentShoreMore_<?php echo $view_stop; ?>' > 
		</div>
	<?php } ?>

