<?php
    require("fs_folders/php_functions/connect.php");
    require("fs_folders/php_functions/function.php");
    require("fs_folders/php_functions/myclass.php");
    require("fs_folders/php_functions/library.php");
    require("fs_folders/php_functions/source.php");
    require("fs_folders/php_functions/Class/User.php");
    require("fs_folders/php_functions/Class/Brand.php");
    require("fs_folders/php_functions/Class/Article.php");
    require("fs_folders/php_functions/Class/Look.php");
    require("fs_folders/php_functions/Class/UserProfilePic.php");
    require ('fs_folders/php_functions/Database/post.php');

    use App\UserProfilePic;
    use App\Article;
   use App\User;

    $mc             = new myclass();
    $ri             = new resizeImage ();
    $article        = new Article($mc->mno, $db);
    $look           = new Look($mc->mno, $db);
    $userProfilePic = new UserProfilePic($mc->mno, $db);
    $mc->post       = new Post();
    $userObject     = new User($mc->mno, $db);
    $userObject->redirectUserToSignUpCode($mc->mno);




 










//capture the id and to be change to slug
@setcookie( 'plno' , (!empty($_GET['id'])) ? $_GET['id'] : $_SESSION['table_id']  ,  time()+3600*24 );
echo " <div style='display:none' > ";
if($_GET['id'] = helper::get_table_id((!empty($_GET['id'])) ? $_GET['id'] : null   ,$_SESSION['table_id'])){if(!$_GET['id']){$mc->go("/");}unset($_SESSION['table_id']);}
$mc = new myclass();
$ri = new resizeImage ();
$mc->save_current_page_visited();



# initialize 1
$_SESSION['mno'] =  $mc->get_cookie( 'mno' , 136 );
$mno 			 =  $mc->get_cookie( 'mno' , 136 );



// echo " <bR><br><bR><Br>mno ".$_SESSION['mno'];
// echo " $mno ";
/*
if ( empty($_GET['id'])) {
   $mc->go("/");
   $looks        = $mc-> retreive_specific_user_all_looks( $mno  , "order by plno desc " );
   $_GET['id']   = $looks[0]["plno"];
}else{
}
*/
echo " get ".$_GET['id'].'<br>';



$plno             = $_GET['id'];
$plno             = $mc->clean_input( $plno );

//If id is empty redirect to home page 
if($plno == null) {
    $mc->go('home');
}


//Redirect page if not exist
if(!select_v3('postedlooks' , '*' , 'plno = ' . $plno)) { 
    $mc->go('home');
}   








if ( $mc->look_exist( $plno )  ) {
}
else{
    // $mc->go("/");
}
$mc->auto_detect_path();

$_SESSION['plno']    = $plno;
//			$plno                = $plno;
$img                 = "$mc->look_folder_lookdetails/$plno.jpg";
$modal['table_name'] = 'postedlooks';
$modal['table_id']   =  $plno;
$mc->get_visitor_info(
    "" ,
    "lookdetails page lookid = $plno " ,
    "home"
);
$nno   = ( !empty($_GET['nno']) ) ? intval($_GET['nno']) : 0 ;

# UPDATE NOTIFICATION AS VIEWED

if ( $nno  != 0 ) {
    $response =  $mc->posted_modals_notification_Query (
        array(
            'nno'=>$nno,
            'notification_query'=>'set-notification-viewed'
        )
    );
}

# get image src

$modal['src']  = $mc->image(
    array(
        'table_name'=>$modal['table_name'],
        'table_id'=>$modal['table_id'],
        'type'=>'get-default-image-src',
        'size'=>'detail'
    )
);
// echo " this is the src $modal[src] <br> ";

# initialized 2

$_SESSION['plno']    =  $_GET['id'];
$li                  = $mc->posted_look_info($_GET['id']);
$_SESSION['plno']    = $_GET['id'];
$date_               = $li['date_'];
$lookOwnerMno        = intval($li["lookOwnerMno"]);
$mno1                = intval($li["lookOwnerMno"]);
$memFsInfo           = $mc->get_user_full_fs_info( $mno1  );
$opercentage         = $memFsInfo['opercentage'];
$otrating            = $memFsInfo['otrating'];
$user1['username']   = $mc->get_username_by_mno($mno1); // $memFsInfo['username'];
$user1['trating_look'] = $memFsInfo['memInfo'][0]['trating_look'];
$user1['tlooks']       = $memFsInfo['tlooks'];


$occupation          = $memFsInfo['memInfo'][0]['occupation'];

$tlooks              = $memFsInfo['memInfo'][0]['tlooks'];
$tfollower           = $memFsInfo['memInfo'][0]['tfollower'];
$fullName            = $memFsInfo['memInfo'][0]['fullName'];

// echo "<pre>";
// print_r($memFsInfo['memInfo']);
// echo "OCCUPATION  = " .  . '<BR>';

$user1['profile_tab'] = 'looks';
$mno 			     = $_SESSION["mno"];
$lookOwnerName       = $li["lookOwnerName"];
$pltags              = $li['pltags'];
$plstyle             = $li['style'];
$Ttag                = count($li['pltags']);
$lookName            = $li["lookName"];
$lookAbout           = $li["lookAbout"];
$pltvotes            = $li["pltvotes"];
$trating             = $li["trating"];
$pltcomment          = $li["pltcomment"];
$category            = strtoupper($li["style"]);
$pltratings          = number_format( $li["trating"]);
$webDesc             = "Fashion Sponge is the easiest & fastest way to: Show your ootd, see the latest trends, discover fashionable people & blogs, get beauty & style tips & find fashion inspiration.";
$looks               = $mc-> retreive_specific_user_all_looks( $lookOwnerMno , "order by plno desc " );
$next_prev           = $mc->db_result_next_prev( 'postedlooks' , $plno , $looks , 'all' );
$total_looks 	     = $mc->get_res_len( $looks );
$total_show_looks    = $mc->get_total_limit_show( intval( $total_looks ) , 30 );
$mem_info            = $mc->get_user_info_by_id( $mno1  );
$tlooks 		     = number_format($mem_info[0]['tlooks']);
$tratings 		     = number_format($otrating);   /*number_format($mem_info[0]['tratings']); */
$tfollower 		     = number_format($mem_info[0]['tfollower']);
$tfollowing 	     = number_format($mem_info[0]['tfollowing']);
$tpercentage 	     = number_format($mem_info[0]['tpercentage']);
$lookmodalsstyle     = $mc->lookdetails_set_size_of_the_look( $img , $ri );
// $mc->add_look_view( $plno );
$look_countingPos    = $mc->get_modal_position_detail( $plno , $looks , 'plno' );
$article_link        = $li['article_link'];

/**
*This is used for the popup content at lookdetails-popup.php
*/
$_SESSION['posted_link'] =  $article_link;


 
$more                = $mc->look_with_more( $plno , $article_link );
$tlc                 = $mc->get_total('plcno','posted_looks_comments','plno',$_SESSION['plno']);

$_SESSION['table_name']                     = 'postedlooks';
$modal['table_name']				        = 'postedlooks';
$modal['table_id']  				        = $plno;
$modal['mno']                               = $mno1;
$modal['kind'] 								= 'ARTICLE';
$modal['position']                          = $look->position($plno, $plstyle, $modal['mno']);
$modal['total']                             = $look->totalUploaded($plstyle, $modal['mno']);
$modal['view_footer_id']                    = 'lf_div_container';
$modal['thumbsUp']                          = 'look-white-thumb.png';
$modal['thumbsDown']                        = 'look-white-down-thumb.png';
$modal['stat_rated']                        = 'look not rated';
$modal['stat_dripted']                      = 'look not dripted';
$modal['stat_favorited']                    = 'look not favorited';
$modal['headermssg']                        = 'SUCCESSFULLY FAVORITED'; # this is for success message popup
$modal['contentmssg']                       = 'This Look is now on your favorite list.'; # this is for success message popup
$modal['src_img_drip']                      = "look-icon-drip.png";
$modal['src_img_favorite']                  = "look-icon-favorite-detail-yellow.png";
$modal['src_img_share']                     = "look-icon-share.png";
$modal['src_img_flag']         			    = "modal-flag-dot-white.png";//"modal-flag.png";
$modal['tdrip']                             =  $li["tdrip"];
$modal["title"]  							=  $li["lookName"];
$modal['tfavorite']                         =  $li["tfavorite"];


# set view and add

$mc->view(
    array(
        'table_name'=>$modal['table_name'],
        'table_id'=>$modal['table_id'],
        'mno'=> $mno,
        'type'=> 'add-view'
    )
);

# check if already thumbs up or down

$modal['response'] = $mc->posted_modals_rate_Query( array(  'mno'=>$mno,  'table_name'=>$modal['table_name'] , 'table_id'=>$modal['table_id'],  'rate_query'=>'get-user-rated-type'  )  );
if ( $modal['response'] == true ):
    $modal['stat_rated'] =  'look already rated';
    if ( $modal['response'] == 'like') {
        $modal['thumbsUp'] = 'look-red-thumbs.png';
    }
    if ( $modal['response'] == 'dislike') {
        $modal['thumbsDown'] = 'look-red-thumb-down.png';
    }
endif;

# set points color

$modal['response_drip'] =  $mc->fs_drip_modals_Query (
    array(
        'limit_start'=>0,
        'limit_end'=>1,
        'query_where'=>"table_id = $modal[table_id] and mno = $mno",
        'query_order'=>'dmno asc',
        'query_drip'=>'get-all-user-dripped'
    )
);
if (!empty( $modal['response_drip'] ) ) {
    // $modal['src_img_drip'] = "look-icon-drip-selected.png";
    $modal['src_img_drip'] = "look-icon-drip.png";

}
$modal['response_favorite'] =  $mc->fs_favorite_modals_Query (
    array(
        'limit_start'=>0,
        'limit_end'=>1,
        'query_where'=>"table_id = $modal[table_id] and mno = $mno",
        'query_order'=>'fmno asc',
        'query_favorite'=>'get-all-user-favorite'
    )
);
if (!empty( $modal['response_favorite'] ) ) {
    $modal['src_img_favorite'] = "look-icon-favorite-detail-yellow.png";
}
$response = $mc->fs_flag( array(  'type'=> 'select', 'limit_start'=>0, 'limit_end'=>1,  'where'=>"table_id  = $plno and table_name= 'postedlooks' and mno = $mno "  )  );
if ( !empty($response) ) {
    $modal['src_img_flag']        = "large-flag-red.png";
}
# set status of owner or not for the user not allow to rate , drip and favorite the modal
if ( $modal['mno'] == $mno ):
    $modal['stat_rated']	 =  'modal owner';
    $modal['stat_dripted'] 	 =  'modal owner';
    $modal['stat_favorited'] =  'modal owner';
endif;
$keyword = modal::conver_cetegory_to_keyword($pltags);
$title=page::set_url_for_modal_details($modal['table_id'],'look',$style,$date_,$lookName); // set url of the page




//modal like status
$look_attr['response'] = $mc->posted_modals_rate_Query( array(  'mno'=>$mno,  'table_name'=>$modal['table_name'], 'table_id'=>$modal['table_id'], 'rate_query'=>'get-user-rated-type'  )  );
if ( $look_attr['response'] == true ) {
    $look_attr['stat_rated'] =  'look already rated';
    if ( $look_attr['response'] == 'like') {
        $look_attr['thumbsUp'] = 'look-red-thumbs.png';
    }
    if ( $look_attr['response'] == 'dislike') {
        $look_attr['thumbsDown'] = 'look-red-thumb-down.png';
    }
     $look_rated = true;
     $_SESSION['look_rated'] = true;
} else {
    $look_rated = false;
    $_SESSION['look_rated'] = false;
}


$_SESSION['details_user_mno'] = $mno;

echo "</div>";



if ((!empty($_GET['welcome'])) ? $_GET['welcome'] : ''  == 'get-started' || $mc->tlog >= 4) {
    $_SESSION['confirmed'] = FALSE;
}




// echo " $keyword ";
// $lookName = 'Mauricio (member) has 7 people who signed up using the referral link.There are currently1000 people on the waiting list who has no association to any member on the';
// echo " this is the len of the string ".strlen($lookName);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php print(strip_tags($lookName));?></title>
    <link rel="stylesheet" href="fs_folders/js/bootstrap-3.3.1-dist/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fs_folders/index_home/home_css/home.css">
    <script type="text/javascript" src='fs_folders/fs_lookdetails/lookdetails_js/lookdetails_ajax.js'></script>
    <script type="text/javascript" src='fs_folders/fs_lookdetails/lookdetails_js/lookdetails_query.js'></script>
    <link rel="stylesheet" type="text/css" href='fs_folders/fs_lookdetails/lookdetails_style/lookdetails.css'>
    <link rel="stylesheet" type="text/css" href="fs_folders/gen_css/gen_style.css" />
    <script type="text/javascript" src='fs_folders/js/modal.js'></script>




    <script src="http://connect.facebook.net/en_US/all.js"></script>
    <!-- social share -->
    <meta property="og:url"           content="http://dev.fashionsponge.com/lookdetails?id=222546" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="This is the title" />
    <meta property="og:description"   content="This is the description" />
    <meta property="og:image"         content="http://dev.fashionsponge.com/fs_folders/images/uploads/posted looks/lookdetails/222546.jpg" />


 
    <!-- draggable -->  
      <link rel="stylesheet" href="fs_folders/draggable/assets/jquery-ui.css">
      <script src="fs_folders/draggable/assets/jquery-1.10.2.js"></script>
      <script src="fs_folders/draggable/assets/jquery-ui.js"></script>
      <link rel="stylesheet" href="fs_folders/draggable/assets/style.css">
      <script src="fs_folders/draggable/assets/test.js" > </script>

 
    <?php


    $mc->header_attribute(
        "$lookName-$lookOwnerName" ,
        $lookAbout,
        $keyword
    );
    if ( $mno != 136) {
        $mc->login_popup( $mno , ( !empty($_GET['welcome']) ) ? $_GET['welcome'] : null );
    }
    else{
        $mc->login_popup( $mno ,  'login' ) ;
    }
    $mc->fs_popup_container_and_response( );


    // $lookName= 'test'; 
    // $lookAbout = 'about';
    $lookAboutTemp = 'This is the about content';

    ?>
    <div style="display:none" >
        <div id="plno"      ><?php echo $plno; ?></div>
        <div id="lookName"  ><?php echo $lookName; ?></div>
        <div id="webDesc"   ><?php echo $webDesc; ?></div>
        <div id='lookOwnerName'><?php echo $lookOwnerName; ?></div>
    </div>
 
     <script>
          //iniitlaized mouse over for the modal because id will be duplicated if no id added and may cause not functioning correctly.
            //look_show_hide_tags('<?php echo $mno; ?>');
    </script>
</head>

<body  onload="lookdetails_loaded( '<?php echo $lookOwnerMno; ?>', '<?php echo $category ?>', '<?php echo $modal['table_id'] ?>', '<?php echo $modal['table_name'] ?>')" itemscope itemtype="http://schema.org/Product"  >

<!-- This is the details feed basis -->
    <div style="display:none" >
        <div id="modal-style"><?php echo strtolower($plstyle); ?></div>
        <div id="modal-owner"><?php echo $lookOwnerMno; ?></div>
        <div id="modal-tab">looks</div>
    </div>
    <?php

    $mc->share_modal_dropdown(
        array(
            'type'=>'pageinfo-to-retrieved-social-share',
            'table_name'=>$modal['table_name'],
            'table_id'=>$modal['table_id'],
            'title'=> $lookName,
            'description'=> $lookAboutTemp
        )
    );
    if ( $mno == 136 ) {
        // require('fs_folders/fs_popUp/popUp_php_file/popupinvite.php');
    }
    $mc->image_mouseover_view(
        'fs_folders/images/uploads/posted looks/thumbnail',
        'fs_folders/images/uploads/posted looks/home'
    );
    $mc->plugins(
        "google analytic",
        "lookdetails"
    );
    include_once("fs_folders/google_analytics/analyticstracking.php");
    ?>
    <div id='lookdetails-res' style="position:fixed; display:none; margin-left:790px;    font-size:11px;  font-wieght:bold; height:auto; width:200px; background-color:#000; color:white">
        res ult here
    </div>

    <div id='lookdetails_wrapper_header'  class="container bs-docs-container" >
        <?php
            /*
             fs_header(
                    $mno ,
                    $style_bottom='width:1010px;' ,
                    $style_up='width:1009px;' ,
                    $style_main_table='width:100%' ,
                    $header_signout_search_field_style = 'margin-left:73px;margin-top:3px;' ,
                    $header_signout_login_signup_button_style = 'margin-left:52px; width:290px;'
                );
            */
            $mc->fs_header(
                $mno,
                'width:1012px;margin-left:-1px;',
                'width:1009px;',
                // 'width:99.8%;border-left:1px solid #e2e2df;border-right:1px solid #e2e2df;',
                'width:99.8%',
                'margin-left:72px;margin-top:3px;',
                'margin-left:35px;',
                'details'
            );
        ?>

        
    </div>

    <div id='lookdetails_wrapper'  class="container bs-docs-container" >
        <div id='lookdetails_body_container' >
             <?php
                if (!$_SESSION['confirmed']) {
                    require('fs_folders/new-member/get-started.php');
                }
            ?>   

            <!-- container of the response here.. -->
            <div id="details-container-<?php echo $mno; ?>" >
                <div id='main_container' >
                <!--  new header  -->
                </div>
                <div  style="display:block" class="details-page-header" >
                <table class="details-page-header-table-1" border="0" cellpadding="0" cellspacing="0" >
                    <tr>
                        <td class="padding-bottom padding-top border-bottom header-category" id="imgV" >
                            <div class="center">
                                <a href="look?category=<?php   echo strtolower($category);  ?>">
                                   <span class="center bold border active-border radius-5 tags"    >
                                       <?php echo $category; ?>
                                   </span>
                               </a>
                            </div>
                        </td>
                    <tr>
                        <td>
                            <h2 class="left black bold" id="details-title" >
                                <!-- The Soul Of Siberia Hidden Beneath The Water-->
                                <?php echo $lookName; ?>
                            </h2>
                        </td>
                    <tr>
                        <td>
                            <table border="0" cellpadding="0" cellspacing="0" style="margin:0px auto" >
                                <tr>
                                    <td>
                                        <?php if($look_rated == false) { ?>
                                            <img
                                                src="fs_folders/images/details/white-red-heart.png"
                                                id="look-like-<?php  echo  $modal['table_id'];  ?>",
                                                class="details-like-image"
                                                onclick="look_like_click( '<?php echo $mno ?>' , '<?php echo $modal['table_id']; ?>' , '<?php echo $modal['table_name'] ?>' , 'like' , 'liked.png' , '#look-like-<?php  echo $modal['table_id'];  ?>' , '<?php echo $modal['table_id'] ?>' , '#details-status-1')"
                                                onmousemove="mousein_change_button ( '#look-like-<?php  echo $modal['table_id'];  ?>' , 'fs_folders/images/modal/look/liked.png' )"
                                                onmouseout="mouseout_change_button ( '#look-like-<?php  echo $modal['table_id'];  ?>'  , 'fs_folders/images/details/white-red-heart.png' ) "
                                                />
                                            <input onclick=" test_modal () "  type="text" value="not rated comment" id="rate-comment-stat<?php echo  $modal['table_id']; ?>" class='hide'  />
                                        <?php } else { ?>
                                            <img src="fs_folders/images/modal/look/liked.png"   id="look-like-<?php echo $modal['table_id'];  ?>"    />
                                        <?php } ?>
                                    </td>
                                    <td class="padding-left-icons details-rate-attribute" >
                                        <h2 class="green" id="details-status-1" onclick="fs_modal_popup( 'fs-modal-popup' , 'design' , 'ratings' , '<?php echo $modal['table_name']; ?>' , '<?php echo $modal['table_id']; ?>' , 'VIEWS ( 36 ) ' , 'fron-end' ,	'#popup-more-doing-the-action-loader img' )">
                                            <?php echo number_format($pltvotes); ?>
                                        </h2>
                                    </td>
                                    <td class="padding-left-icons-small forward-slash details-rate-attribute" id="details-forward-slash"  >
                                        <h2> / </h2>
                                    </td>
                                    <td class="padding-left-icons" >
                                        <img src="fs_folders/images/details/grey-clock.png">
                                    </td>
                                    <td class="padding-left-icons-small black"  >
                                        <em>
                                            <?php echo ucfirst($mc->dateTime_convert($date_ )); //$mc->date_format( $date_, '/' ); ?>
                                        </em>
                                    </td>
                                    <td class="padding-left-icons"  >
                                        <img src="fs_folders/images/details/grey-comment-icon.png">
                                    </td>
                                    <td class="padding-left-icons-small black"  >
                                        <!-- <span>143</span> -->
                                        <span><?php echo $pltcomment; ?></span>
                                    </td>
                                    <td  class="padding-left-icons" >
                                        <img class="social-rectangle-icon" src="fs_folders/images/details/facebook-button.png"
                                            onclick="share_fb_specifi_page (  '<?php $_SERVER['PHP_SELF'] ?>' )"
                                        >
                                    </td>
                                    <td  class="social-right"  >
                                        <img  class="social-rectangle-icon" src="fs_folders/images/details/pinterest-button.png"
                                            onclick="share_pinterest ( '<?php  echo $modal['table_id']; ?>' ) "
                                        >
                                    </td>
                                <tr>
                            </table>
                        </td>
                </table>
                </div>
                <!-- Content pic -->
                <div style="clear: both"></div>
                <div class="padding-top-comment details-page-content1 margin-auto " >
                    <div class="details-modal-container center" >

                        <table id='lbc_main_table' >
                            <tr>
                                <td id="banner_view_and_look_view"  >
                                    <table id="banner_view_and_look_view_table_container" border="0"  cellpadding="0" cellspacing="0" >
                                        <tr>
                                            <td id='lbc_look_view' >
                                        <?php
                                        $user_total_followers = $tfollower;
                                        $user_total_following = $tfollowing;
                                        $user_total_percentage   = $tpercentage;
                                        $user_total_rating       = $tratings ;
                                        $user_total_lookuploaded = count($mc->retreive_specific_user_all_looks( $lookOwnerMno ));
                                        $user_total_look_percentage  = $li['tpercentage'];
                                        $user_total_look_star  = 0;
                                        $user_total_look_views  = $li['tlview'];
                                        $user_total_look_drip   = 0;
                                        $user_total_look_share  = array(
                                            'overallsharetotal' => rand(100,200) ,
                                            'facebook' => rand(100,200) ,
                                            'twitter' => rand(100,200) ,
                                            'tumblr' => rand(10,200) ,
                                            'pinterest' => rand(100,200) ,
                                            'google+' => rand(100,200) ,
                                            'stumbleupon' => rand(100,200) ,
                                            'email' => rand(100,200)
                                        );
                                        $mc->print_name_looktitle_look_desc_for_share( $lookOwnerMno , $plno , $lookName ,  $lookAboutTemp );
                                        ?>
                                        <table id='lbc_look_view_tc' border="0" cellpadding="0" cellspacing="0" >

                                        <tr>
                                            <td id='look_view_img_td' style=" height: 500px;  padding-bottom: 17px; ">
                                                <center>
                                                    <div id="load_look_picture_and_tags"  >
                                                        <?php
                                                        echo " <div class='pos' style='display:block'> ";
                                                        $c=0;
                                                      
                                                        for ($i=0; $i < count($pltags) ; $i++) {
                                                            $plt_color =  explode(',', $pltags[$i]["plt_color"])[1];
                                                            $plt_brand = $pltags[$i]["plt_brand"];
                                                            $plt_garment = $pltags[$i]["plt_garment"];
                                                            $plt_material = $pltags[$i]["plt_material"];
                                                            $plt_pattern = $pltags[$i]["plt_pattern"];
                                                            $plt_price = $pltags[$i]["plt_price"];
                                                            $plt_purchased_at = $pltags[$i]["plt_purchased_at"];
                                                            // echo " pattern $plt_pattern <br>";
                                                            $plt_color        = ( empty($plt_color)                   ) ? "NONE" :  strtoupper($plt_color);
                                                            $plt_brand        = ( $plt_brand        == "BRAND"        ) ? "NONE" : strtoupper($plt_brand);
                                                            $plt_garment      = ( $plt_garment      == "GARMENT"      ) ? "NONE" : strtoupper($plt_garment);
                                                            $plt_material     = ( $plt_material     == "MATERIAL"     ) ? "NONE" : strtoupper($plt_material);
                                                            $plt_pattern      = ( $plt_pattern      == "PATTERN"      ) ? "NONE" : strtoupper($plt_pattern);
                                                            $plt_price        = ( $plt_price        == "PRICE"        ) ? "NONE" : strtoupper($plt_price);
                                                            $plt_purchased_at = ( $plt_purchased_at == "PURCHASED AT" ) ? "NONE" : strtoupper($plt_purchased_at);
                                                            // echo "
                                                            // $plt_color <br>
                                                            // $plt_brand <br>$next_prev[next]
                                                            // $plt_garment <br>
                                                            // $plt_material <br>
                                                            // $plt_pattern <br>
                                                            // $plt_price <br>
                                                            // $plt_purchased_at <br>
                                                            // ";
                                                            //counter starts from 1
                                                            $c++;
                                                            //retrieve position z and y from database.
                                                            /*
                                                            $left = $pltags[$i]["plt_x"]+175;
                                                             $top = $pltags[$i]["plt_y"]-15;
                                                             */

                                                            $left = $pltags[$i]["plt_x"];
                                                            $top = $pltags[$i]["plt_y"]+70;
                                                            $pltno = $pltags[$i]["pltgno"];

                                                            // echo "pltags  $pltno  <br>";

                                                            // echo " x =  $left and y = $top <br> ";
                                                            // set position for the red circle tag.
                                                            // $db_Ttagged = 4;

                                                            if ( $c < 10)   {
                                                                $number_single  = "  margin-left:9px ";
                                                                $style =  $number_single;
                                                            } else {
                                                                $number_double  = "   margin-left: 9px;  ";
                                                                $style =  $number_double;
                                                            }

                                                            $circle_tag_stye = "margin-top:".$top."px; margin-left:".$left."px; visibility:hidden";

                                                            echo " <div tagnumber='$pltno' number='$c' id='tag-circle' class='tag-circle-$c draggable'   onmouseout='circle_tag_mouseout(\".tag-circle-$c\")' onmouseenter='circle_tag_mouseover(\".tag-circle-$c\")' style='$circle_tag_stye'  >";

                                                            // echo "
                                                            //     <img id='tag-circle-img' src='$mc->genImgs/tag-red-circle.jpg' />
                                                            // ";

                                                            echo "
                                                                <div id='tag-circle-value' style='$style'  > $c </div>
                                                            </div>";
                                                            // $circle_tag_stye = "margin-top:".$top."px; margin-left:".$left."px;";
                                                            // echo " <span id='tag-circle' class='tag-circle-$c'  onmouseout='circle_tag_mouseout(\".tag-circle-$c\")' onmouseenter='circle_tag_mouseover(\".tag-circle-$c\")' style='$circle_tag_stye' >
                                                            // $c
                                                            // </span>";
                                                            //set bubble arrow asd left
                                                            if ( $left < 430 ) {
                                                                // echo "arrow right<br>";
                                                                $tag_arrow = "left";
                                                            }else if ( $left >= 430 ) {
                                                                // echo "arrow left<br>";
                                                                $tag_arrow = "right";
                                                            }
                                                            // add top and left for TAG DIV CONTAINER POSITION
                                                            $top-=50;
                                                            $left+=20;
                                                            $tag_circle_tag_div = "margin-top:".$top."px; margin-left:".$left."px;";
                                                            $tn = array("ZERO","ONE","TWO","THREE","FOUR","FIVE","SIX","SEVEN","EIGHT","NINE","TEN","ELEVEN","TWELVE","THIRTEN","FOURTEN","FIFTHTEN");

                                                            //  set url
                                                            // www.google.com
                                                            // https://www.google.com
                                                            // http://www.google.com
                                                            // google.com
                                                            // $url = "www.google.com";
                                                            // $url = "https://www.google.com";
                                                            // $url = "http://www.facebook.com"; # working link
                                                            $url = str_replace("."," ",$plt_purchased_at);
                                                            // if the bubble tag arrow is left



                                                            if ( $tag_arrow == "left") {
                                                                echo "
                                                                    <div id='tag-circle-tag-div' class='tag-circle-$c-tag-div tag-circle-content-left-$c' onmouseenter='circle_tag_mouseover(\".tag-circle-$c-tag-div\")' style='$tag_circle_tag_div' >
                                                                        <div id='tag-bubble-body' >
                                                                            <img id='tag-bubble-arrow-left-img' src='$mc->genImgs/tag-bubble-arrow-left.png' >
                                                                           <center> <span id='tag-bubble-title' >ABOUT ITEM NUMBER ".$tn[$c]."</span>  </center>
                                                                            <table id='tag-bubble-table' border='0' cellpadding='0' cellspacing='0' >
                                                                                <tr>
                                                                                  <td >  <span  id='tag-name' >  COLOR:    </span> <span  id='tag-desc' > #$plt_color            </span>  </td> <tr>
                                                                                  <td > <span id='tag-name' >  BRAND:    </span> <span  id='tag-desc' >   #$plt_brand            </span>  </td> <tr>
                                                                                  <td > <span id='tag-name' >  GARMENT:  </span> <span  id='tag-desc' >   #$plt_garment          </span>  </td> <tr>
                                                                                  <td > <span id='tag-name' >  MATERIAL: </span> <span  id='tag-desc' >   #$plt_material         </span>  </td> <tr>
                                                                                  <td > <span id='tag-name' >  PATTERN:  </span> <span  id='tag-desc' >   #$plt_pattern          </span>  </td> <tr>
                                                                                  <td > <span id='tag-name' >  PRICE:  </span> <span  id='tag-desc' >   #$plt_price          </span>  </td> <tr>
                                                                                  <td > <span id='tag-name' >  STORE:  <a href='r?loc=$url' target='_blank' >  </span> <span  id='tag-desc' >   #$plt_purchased_at          </span>  </a>  </td> <tr>

                                                                            </table>
                                                                            <hr id='tag-bubble-body-hr' style='display:none'  >
                                                                             <a style='display:none'  href='r?loc=$url' target='_blank' id='visit-store'  > <img src='$mc->button/visit-store.png'>  </a>
                                                                        </div>
                                                                    </div>
                                                                ";
                                                            }
                                                            else if ( $tag_arrow == "right") { // if the bubble tag arrow right
                                                                $left-=410;
                                                                $tag_circle_tag_div = "margin-top:".$top."px; margin-left:".$left."px;";
                                                                echo "
                                                                    <div id='tag-circle-tag-div' class='tag-circle-$c-tag-div tag-circle-content-right-$c' onmouseenter='circle_tag_mouseover(\".tag-circle-$c-tag-div\")' style='$tag_circle_tag_div' >
                                                                        <div id='tag-bubble-body' >
                                                                            <img id='tag-bubble-arrow-right-img' src='$mc->genImgs/tag-bubble-arrow-right.png' >
                                                                           <center> <span id='tag-bubble-title' >ABOUT ITEM NUMBER ".$tn[$c]."</span>  </center>
                                                                            <table id='tag-bubble-table' border='0' cellpadding='0' cellspacing='0' >
                                                                                <tr>
                                                                                  <td >  <span  id='tag-name' >  COLOR:    </span> <span  id='tag-desc' >   #$plt_color            </span>  </td> <tr>
                                                                                    <td > <span id='tag-name' >  BRAND:    </span> <span  id='tag-desc' >   #$plt_brand            </span>  </td> <tr>
                                                                                    <td > <span id='tag-name' >  GARMENT:  </span> <span  id='tag-desc' >   #$plt_garment          </span>  </td> <tr>
                                                                                    <td > <span id='tag-name' >  MATERIAL: </span> <span  id='tag-desc' >   #$plt_material         </span>  </td> <tr>
                                                                                    <td > <span id='tag-name' >  PATTERN:  </span> <span  id='tag-desc' >   #$plt_pattern          </span> </td> <tr>
                                                                                    <td > <span id='tag-name' >  PRICE:  </span> <span  id='tag-desc' >   #$plt_price          </span>  </td> <tr>
                                                                                    <td > <span id='tag-name' >  STORE:  <a href='r?loc=$url' target='_blank' >  </span> <span  id='tag-desc' >   #$plt_purchased_at          </span>  </a>  </td> <tr>

                                                                            </table>
                                                                            <hr id='tag-bubble-body-hr' style='display:none'  >
                                                                             <a style='display:none'   href='r?loc=$url' target='_blank' id='visit-store'  > <img src='$mc->button/visit-store.png'>  </a>
                                                                        </div>
                                                                     </div>
                                                                ";
                                                            }
                                                        }
                                                        echo "
                                                       </div>";
                                                        // if ( empty($con->plook) ) {
                                                        //  	echo "<img id='look_view_img' src='$mc->look_folder_home/3.jpg'  >";
                                                        // } else  {
                                                        // echo " <img id='look_view_img' style='$lookmodalsstyle'  src='$modal[src]'  onclick=\"load_look_picture_and_tags('$next_prev[next]')\" > ";
                                                      


                                                       echo " <img id='look_view_img' style='$lookmodalsstyle'  src='$modal[src]' > ";
                                                        // }
                                                        ?>
                                                    </div>
                                                </center> 

                                            </td>
                                        <tr>
                                            <td id='lf_img_view_td' >
                                                <div id='lf_div_container' style="margin-left:0px;border:1px solid none" >
                                                    <?php
                                                    if ( false ) {
                                                        $mc->print_choose_votes_version2( $mno , $plno , $plstyle );
                                                    }
                                                    ?>
                                                    <center>
                                                        <table id='lfdc_t1' border="0" cellpadding="0" cellspacing="0">
                                                            <tr>
                                                                <td id='percentage'  style="display:none" >
                                                                    <span title='(<?php echo $user_total_look_percentage; ?>%) Looks Rating' id='tpercentage'style='font-size:20px;' ><?php echo $user_total_look_percentage; ?></span><span style='font-size:15px;' > %</span>
                                                                </td>
                                                                <td id="modal-likethis" style="display:none" >
                                                                    <div>LIKES THIS</div>
                                                                </td>
                                                                <td style="padding-right:20px;display:none" >
                                                                    <table style=" width:40px;" border="0"  >
                                                                        <tr>
                                                                            <td>
                                                                                <img src="<?php echo "  $mc->genImgs/$modal[thumbsUp]"; ?>" title='like'          style='height:18px;'      class='postedlooks-like<?php echo $modal['table_id']; ?>'      onclick="posted_modals_rate_Query ( '0' , '<?php echo $mno; ?>' , '<?php echo $modal['table_name']; ?>' , 'like' , '<?php echo $modal['table_id']; ?>' , 'insert' , 'rate'  , '.postedlooks-like<?php echo $modal['table_id']; ?>' , 'look-red-thumbs.png' , '#stat-look-rated<?php echo $modal['table_id']; ?>'  , '<?php echo $plstyle; ?>'   )" >
                                                                            </td>
                                                                            <td>
                                                                                <div style="margin-top:6px;" >
                                                                                    <img src="<?php echo " $mc->genImgs/$modal[thumbsDown]"; ?>" title='dislike'   style='height:18px;'  class='postedlooks-dislike<?php echo $modal['table_id']; ?>'     onclick="posted_modals_rate_Query ( '0' , '<?php echo $mno; ?>' , '<?php echo $modal['table_name']; ?>' , 'dislike' , '<?php echo $modal['table_id']; ?>' , 'insert' , 'rate' , '.postedlooks-dislike<?php echo $modal['table_id']; ?>' , 'look-red-thumb-down.png' , '#stat-look-rated<?php echo $modal['table_id']; ?>' , '<?php echo $plstyle; ?>' )"  >
                                                                                </div>
                                                                            </td>
                                                                    </table>
                                                                </td>
                                                                <td id='ldmtd' title="(<?php echo $trating; ?>) Total Rates" style="display:none" >
                                                                    <?php
                                                                    $mc->print_specific_look_ratings(
                                                                        array(
                                                                            'trating'=>$trating,
                                                                            'table_name'=>'postedlooks',
                                                                            'table_id'=>$plno,
                                                                            'category'=>$plstyle
                                                                        )
                                                                    );
                                                                    ?>
                                                                </td>










                                                                <td id='ld_eyes' >
                                                                    <img src="<?php echo $mc->path_icons;?>/Views-Icon.png" title="views" >
                                                                </td>
                                                                <td>
                                                                    <span id='ttext' onclick="fs_modal_popup( 'fs-modal-popup' , 'design' , 'views' , '<?php echo $modal['table_name']; ?>' , '<?php echo $modal['table_id']; ?>' , 'VIEWS ( <?php echo "$user_total_look_views"; ?> ) ' , 'fron-end' ,	'#popup-more-doing-the-action-loader img' )"  >
                                                                        <?php echo $user_total_look_views; ?>
                                                                    </span>
                                                                </td>
                                                                <td id='total_arrow' >
                                                                    <img src="<?php echo "$mc->genImgs/$modal[src_img_drip]"; ?>"  title="drips"   class="modal-drip-img<?php echo $modal['table_id'] ?>"   onclick="drip_popup_show( '<?php echo $mno; ?>' , '<?php echo $modal['table_name'] ?>' , '<?php echo $modal['table_id']; ?>' , '<?php echo $modal['title']; ?>' , 'Look' , '<?php echo $modal['mno'] ; ?>' , '<?php echo ".modal-drip-img$modal[table_id]"; ?>' , '<?php echo "$mc->genImgs/$modal[src_img_drip]"; ?>' , '<?php echo $modal['table_id']; ?>' , '#stat-look-dripted<?php echo $modal['table_id']; ?>'  )" >
                                                                </td>
                                                                <td >
                                                                    <span id='ttext' class="modal-tdriped<?php echo $modal['table_id']; ?>" onclick="fs_modal_popup( 'fs-modal-popup' , 'design' , 'dripped' , '<?php echo $modal['table_name']; ?>' , '<?php echo $modal['table_id']; ?>' , 'DRIPPED ( <?php echo "$modal[tdrip]"; ?> ) ' , 'fron-end' ,	'#popup-more-doing-the-action-loader img' )" >
                                                                        <?php echo $modal['tdrip'];  ?>
                                                                    </span>
                                                                </td>
                                                                <td id='ld_star_with_cross'  >
                                                                    <!-- <img src="<?php echo $mc->path_icons;?>/favorite-icon.png" title="favorite">  -->
                                                                    <img src="<?php echo "$mc->genImgs/$modal[src_img_favorite]"; ?>" class='modal-favorite-img<?php echo $modal['table_id']; ?>'   title="favorite" onclick="favorite_posting( '<?php echo $mno;  ?>' , '<?php echo "$modal[table_name]" ?>' , '<?php echo $modal['table_id'];  ?>' , '<?php  echo $modal['headermssg' ] ?>' ,'<?php echo $modal['contentmssg'] ?>'  , 'Article' , '<?php echo $modal['mno'];  ?>' , '<?php echo ".modal-favorite-img$modal[table_id]"; ?>' , '<?php echo "$mc->genImgs/look-icon-favorite-detail-yellow.png"; ?>' , '<?php echo $modal['tfavorite']; ?>' ,'#stat-look-favorited<?php echo $modal['table_id']; ?>'   )"  >
                                                                </td>
                                                                <td style="padding-left:10px;" >
                                                                    <span id='ttext' onclick="fs_modal_popup( 'fs-modal-popup' , 'design' , 'favorites' , '<?php echo $modal['table_name']; ?>' , '<?php echo $modal['table_id']; ?>' , 'FAVORITES ( <?php echo "$modal[tfavorite]"; ?> ) ' , 'fron-end' ,	'#popup-more-doing-the-action-loader img' )" >
                                                                        <?php echo  $modal['tfavorite']; ?>
                                                                    </span>
                                                                </td>
                                                                <td id='ld_square_with_arrow'  >
                                                                    <img src="<?php echo $mc->path_icons;?>/share-icon.png" title="share"  onmouseover="share_mouser_over('<?php echo $plno; ?>')" onmouseout="share_mouser_out('<?php echo $plno; ?>')" >
                                                                </td>
                                                                <td>
                                                                    <span id='ttext' > <?php echo $user_total_look_share["overallsharetotal"]; ?> </span>
                                                                </td>

                                                                <?php  $mc->print_look_footer_flag_or_edit( $mno , $mno1 , $modal['table_id']  , $modal['table_name']  , $modal['src_img_flag'] , "post-look-label?kooldi=$modal[table_id]&type=u" ); ?>
                                                                <td id='ld_scope' > 
                                                                    <a href="z?i=<?php echo $plno; ?>"  target="_blank" >
                                                                        <img src="<?php echo $mc->path_icons;?>/zoom-icon.png" title="zoom" >
                                                                    </a> 
                                                                </td>  

                                                                <?php if($lookOwnerMno  == $_SESSION[mno]): ?> 
                                                                    <td id='' >   
                                                                        <img style="margin-left: 15px;"  onclick="delete_lookdetails_modal('<?php echo $modal['table_id']; ?>')" src="<?php echo $mc->path_icons;?>/delete.png" title="delete this modal" >      
                                                                    </td>  
                                                                <?php endif; ?>
                                                                    <!-- <td id='ld_scope'  >
                                                                        <img src="<?php echo $mc->path_icons;?>/flag-icon.png"  title="flag" style='display:none' >
                                                                    </td>   -->
                                                                <td id="ld_padding" >
                                                                </td>

                                                                <td id="ld_hide_show" >
                                                                    <img style="display:none"  id="rectangle-image-footer-hide" title="hide" onclick="hide_look_foooter_rectangle()"   src="<?php  echo  "$mc->path_icons/hide-icon.png"; ?>" />
                                                                </td>
                                                            <tr>
                                                                <td>
                                                                </td><td>
                                                                </td><td>
                                                                </td><td>
                                                                </td><td>
                                                                </td><td>
                                                                </td><td>
                                                                </td><td>
                                                                </td><td>
                                                                </td><td>
                                                                </td><td>
                                                                    <!-- dropdowns share -->
                                                                    <div style="border:1px solid none;positio:absolute" >
                                                                        <?php
                                                                        $mc->share_modal_dropdown(
                                                                            array(
                                                                                'type'=>'details',
                                                                                'table_name'=>$modal['table_name'],
                                                                                'table_id'=>$modal['table_id'],
                                                                                'id'=>$modal['table_id'],
                                                                                'about'=>$lookAbout,
                                                                                'name'=>$lookOwnerName,
                                                                                'title'=>$lookName,
                                                                                'page'=>'lookdetails',
                                                                                'link'=>'',
                                                                                'picture'=>''
                                                                            )
                                                                        );
                                                                        ?>
                                                                    </div>
                                                                </td><td>
                                                                </td><td>
                                                                </td><td>
                                                                </td><td>
                                                                </td><td>
                                                        </table>
                                                    </center>
                                                </div>
                                                <!-- validator -->
                                                <div id="status-container"    >
                                                    <input type="text" value="<?php echo "$modal[stat_rated]"; ?>"       id="stat-look-rated<?php echo $modal['table_id']; ?>"       /> <br>
                                                    <input type="text" value="<?php echo "$modal[stat_dripted]"; ?>"     id="stat-look-dripted<?php echo $modal['table_id']; ?>"         /> <br>
                                                    <input type="text" value="<?php echo "$modal[stat_favorited]"; ?>"   id="stat-look-favorited<?php echo $modal['table_id']; ?>"    /> <br>
                                                </div>
                                                <table id='tag_colors' border="0" cellspacing="0" style="display:block"  >
                                                    <tr>
                                                        <?php
                                                        // $tag_colors = array('#b7253a','#f2822e','#f3c97c','#6d7a4f','#9e9a5a');
                                                        //
                                                        // echo " Ttag $Ttag ";
                                                        if ( !empty($Ttag) ) {




                                                            for ($i=0; $i < $Ttag ; $i++) {
                                                                // $tc = $mc->get_html_colo_code( str_replace(" ","",$pltags[$i]["plt_color"]));
                                                                $tc = $look->getHtmlColor(explode(',', $pltags[$i]["plt_color"])[1]);

                                                              


                                                                if(empty($tc)) $tc = '#000; opacity:0.8'; 

                                                                if ( $i == 0 ) {
                                                                    if (!empty($tc )) { 
                                                                        if($Ttag == 1) {
                                                                            $tagcolors_style = "background-color:$tc; border-radius:0px 0px 5px 5px";    
                                                                        } else {
                                                                            $tagcolors_style = "background-color:$tc; border-radius:0px 0px 0px 5px";    
                                                                        } 
                                                                    }
                                                                    else{
                                                                        if ( $i == $Ttag-1 ) {
                                                                            $tagcolors_style = "background-color:#000;border-radius:0 0 5px 5px;opacity:0.8;";
                                                                        }
                                                                    }
                                                                }
                                                                else if ( $i == $Ttag-1 ) {
                                                                    if (!empty($tc )) {
                                                                        $tagcolors_style = "background-color:$tc;  border-radius:0 0 5px 0;";
                                                                    }
                                                                    else{
                                                                        $tagcolors_style = "background-color:#000;border-radius:0 0 5px 0;opacity:0.8;";
                                                                    }

                                                                }
                                                                else {
                                                                    $tagcolors_style = "background-color:$tc";
                                                                }  ?>

                                                                <td id='tag_colors_td' style='<?php echo $tagcolors_style; ?>' >
                                                                </td>
                                                            <?php
                                                            }
                                                        }else {
                                                            $tagcolors_style = "background-color:#000;border-radius:0 0 5px 5px;opacity:0.8;";
                                                            echo "<td id='tag_colors_td' style='$tagcolors_style'> </td>";
                                                        }
                                                        ?>
                                                </table>
                                            </td>
                                        </table>
                                        </td>
                                    </table>
                                </td>   <!--  end banner_view_and_look_view -->

                            </tr>
                        </table>
                    </div>
                </div>

                <!-- Header Profile -->
                <div style="display:block" class="details-page-header-1 padding-left padding-right "  >
                    <ul class="ul-container-cols-2" >
                        <li class="ul-container-cols-2-li-left  " >
                            <div class="profile-container-left padding-profile-top" >
                                <table border="0" cellpadding="0" cellspacing="0" style="margin: 0px auto; width: 100%" >
                                    <tr>
                                        <td>
                                            <div class="profile-container" >

                                                <!-- <img src="fs_folders/images/details/profile.jpg" class="profile" /> -->

                                                <?php 
                                                    $mc->member_thumbnail_display( $mc->ppic_thumbnail , $lookOwnerMno , $mc->ppic_thumbnail, $lookOwnerName  , '103px', '', '103px', 'border-radius:3px;' );   
                                                 ?>
                                            </div>
                                        </td>
                                    <tr>
                                        <td>
                                            <div class="center padding-profile-top paddin-profile-content " >
                                                <a href="<?php echo $user1['username']; ?>">
                                                    <span class="profile-name blue" >
                                                        <?php echo $lookOwnerName; ?>
                                                    </span>
                                                    </a>
                                            </div>
                                        </td>
                                    <tr>
                                        <td>
                                            <div class="center padding-profile-top paddin-profile-content"  >
                                                <span class="text black" >  <?php echo $occupation;  ?></span>
                                            </div>
                                        </td>
                                    <tr>
                                        <td>
                                            <div class="center padding-profile-top padding-profile-bottom  paddin-profile-content" >
                                                    <span class="black">
                                                        Looks
                                                        <span class="bold"  > <bold> <a href="<?php echo $user1['username'] . '-looks'; ?>" ><?php echo number_format($user1['tlooks']); ?> </a> </bold> </span>
                                                        Likes
                                                        <span class="bold" > <bold>  <a href="#"> <?php echo number_format($user1['trating_look']); ?></a>   </bold> </span>
                                                        Followers
                                                        <span class="bold" > <bold> <a href="<?php echo $user1['username'] . '-followers'; ?>" id="details-follow-counter" >  <?php echo number_format($tfollower); ?> </a> </bold> </span>
                                                    </span>
                                            </div>
                                        </td>
                                    <tr>
                                        <td class="hide" >
                                            <div class="padding-profile-top" >
                                                <table border="0" cellspacing="0" cellpadding="0" class="social-profile-icons-table" >
                                                    <tr>
                                                        <td class="td-left" >
                                                            <img
                                                                id="member-social-facebook"
                                                                class="member-social-icons"
                                                                src="fs_folders/images/details/facebook.png"
                                                                onmousemove=" mousein_change_button ( '#member-social-facebook' , 'fs_folders/images/details/facebook-grey.png' )"
                                                                onmouseout="mouseout_change_button (  '#member-social-facebook'  , 'fs_folders/images/details/facebook.png' )"

                                                                />
                                                        </td>

                                                        <td  class="td-center" >

                                                            <!--<img class="member-social-icons" src="fs_folders/images/details/twitter.png" />-->

                                                            <img
                                                                id="member-social-twitter"
                                                                class="member-social-icons"
                                                                src="fs_folders/images/details/twitter.png"
                                                                onmousemove=" mousein_change_button ( '#member-social-twitter' , 'fs_folders/images/details/twitter-grey.png' )"
                                                                onmouseout="mouseout_change_button (  '#member-social-twitter'  , 'fs_folders/images/details/twitter.png' )"

                                                                />
                                                        </td>

                                                        <td class="td-center" >

                                                            <!--<img class="member-social-icons" src="fs_folders/images/details/instagram.png" />-->

                                                            <img
                                                                id="member-social-instagram"
                                                                class="member-social-icons"
                                                                src="fs_folders/images/details/instagram.png"
                                                                onmousemove=" mousein_change_button ( '#member-social-instagram' , 'fs_folders/images/details/instagram-grey.png' )"
                                                                onmouseout="mouseout_change_button (  '#member-social-instagram'  , 'fs_folders/images/details/instagram.png' )"

                                                                />


                                                        </td>

                                                        <td class="td-center" >
                                                            <!--<img class="member-social-icons" src="fs_folders/images/details/twitter.png" />-->

                                                            <img
                                                                id="member-social-pinterest"
                                                                class="member-social-icons"
                                                                src="fs_folders/images/details/pinterest.png"
                                                                onmousemove=" mousein_change_button ( '#member-social-pinterest' , 'fs_folders/images/details/pinterest-grey.png' )"
                                                                onmouseout="mouseout_change_button (  '#member-social-pinterest'  , 'fs_folders/images/details/pinterest.png' )"

                                                                />



                                                        </td>

                                                        <td  class="td-right">
                                                            <!--<img class="member-social-icons" src="fs_folders/images/details/instagram.png" />-->
                                                            <img
                                                                id="member-social-tumblr"
                                                                class="member-social-icons"
                                                                src="fs_folders/images/details/tumblr.png"
                                                                onmousemove=" mousein_change_button ( '#member-social-tumblr' , 'fs_folders/images/details/tumblr-grey.png' )"
                                                                onmouseout="mouseout_change_button (  '#member-social-tumblr'  , 'fs_folders/images/details/tumblr.png' )"

                                                                />

                                                        </td>

                                                </table>
                                            </div>
                                        </td> 

                                        <?php if($mc->mno != $modal['mno']): ?> 
                                            <tr>
                                                <td> 
                                                    <div class="profile-follow center padding-profile-top blue border-top" >
                                                        <?php
                                                        // echo "mno = $mno1 and mno1 = $mno1 <br>";
                                                             $mc->print_user_modals_follow_or_unfollow_buttons($mno,  $mno1, 'width:103px !important', 'fs_folders/images/profile/follow.png', 'fs_folders/images/profile/following.png', 'details', '#details-follow-counter');
                                                        ?>
                                                       <!--
                                                            <img
                                                                class='details-member-follow'
                                                                style="margin-left:3px;"
                                                                src="fs_folders/images/profile/follow.png"
                                                                onmousemove=" mousein_change_button ( '.details-member-follow' , 'fs_folders/images/profile/following.png' )"
                                                                onmouseout="mouseout_change_button (  '.details-member-follow'  , 'fs_folders/images/profile/follow.png' ) "
                                                            >
                                                        -->
                                                    </div>
                                                </td>

                                        <?php endif; ?>


                                </table>
                            </div>
                        </li>
                        <li class="ul-container-cols-2-li-right" >


                            <?php if(!empty($lookAbout)): ?>
                                <div class="profile-container-right profile-container-padding-left profile-container-padding-right black  padding-profile-top "  >

                                        <!-- <h3>
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                                            industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                                            scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap
                                            into electronic typesetting, remaining essentially unchanged. It was pop
                                        </h3>

                                        <h1>Wildlife</h1>

                                        <p>
                                            classical Latin literature from 45 BC, making it over 2000 years old.
                                            Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia,
                                            looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage,
                                            and going through the cites of the word in classical literature, discovered the undoubtable source.
                                            Lorem Ipsum comes from sections 1.10.32 and
                                            1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is
                                        </p>

                                        <h4> INVERTEBRATES </h4>

                                        <p>
                                            any variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,
                                            or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be
                                            sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat
                                            predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Lati

                                        <a href="#" onclick="fs_popup( 'details-popup-continue-reading')" >
                                            <span class="more green" > continue reading.. </span>
                                        </a>                             -->
 
                                         <?php echo $lookAbout; ?>
                                          <?php if(false) { ?>
                                            <?php if(!empty($article_link)){ ?> 
                                                <a href="#" onclick="fs_popup( 'details-popup-continue-reading', '', '', '',  '<?php echo $modal['table_id']; ?>', '<?php echo $modal['table_name']; ?>' )" > 
                                                    <span class="more green" > continue reading.. </span> 
                                                </a>   
                                            <?php } ?>
                                        <?php } ?>
                                    </p>
                                </div>
                            <?php endif; ?>

                            <div style="display:block; padding-left:42px; padding-top: 24px;padding-bottom: 0px;" class="details-page-content2 bg-white padding-top" >
                                <div>
                                    <table border="0" cellpadding="0" cellspacing="0">
                                        <tbody><tr>
                                            <td class="hide">
                                                <a href="look?category=<?php  echo $category; ?>">
                                                    <span class="center bold border-gey tags radius-5">
                                                        <?php  echo $category;  ?>
                                                    </span>
                                                </a>
                                            </td>
                                            <td class="social-right hide">
                                                <a href="#"><span class="center bold border-gey tags radius-5"> BAIKAL </span> </a>
                                            </td>
                                            <td class="social-right hide">
                                                <a href="#"><span class="center bold border-gey tags radius-5"> LAKE </span> </a>
                                            </td>
                                    </tr></tbody></table>
                                </div>
                                <div class="center padding-top-comment details-rating-stat" style="margin-top: -22px;"  >
                                    <table border="0" cellpadding="0" cellspacing="0" >
                                        <tr>
                                            <td >
                                                <!-- <img class="heart-icon" src="fs_folders/images/details/white-red-heart.png" >-->
                                                <?php if($look_rated == false) { ?>
                                                    <img
                                                        src="fs_folders/images/details/white-red-heart.png"
                                                        id="look-like-1-<?php  echo  $modal['table_id'];  ?>"
                                                        class="details-like-image"
                                                        onclick="look_like_click( '<?php echo $mno ?>' , '<?php echo $modal['table_id']; ?>' , '<?php echo $modal['table_name'] ?>' , 'like' , 'liked.png' , '#look-like-1-<?php  echo $modal['table_id'];  ?>' , '<?php echo $modal['table_id'] ?>' , '#details-status-2')"
                                                        onmousemove="mousein_change_button ( '#look-like-1-<?php  echo $modal['table_id'];  ?>' , 'fs_folders/images/modal/look/liked.png' )"
                                                        onmouseout="mouseout_change_button ( '#look-like-1-<?php  echo $modal['table_id'];  ?>'  , 'fs_folders/images/details/white-red-heart.png' ) "
                                                        />
                                                    <input onclick=" test_modal () "  type="text" value="not rated comment" id="rate-comment-stat<?php echo  $modal['table_id']; ?>" class='hide'  />
                                                <?php } else { ?>
                                                    <img src="fs_folders/images/modal/look/liked.png"   id="look-like-1-<?php  echo $modal['table_id']; ?>"    />
                                                <?php } ?>
                                             </td>
                                            <td class="padding-left-icons details-rate-attribute" style="padding-top: 28px;" >
                                                <h2 class="green" id="details-status-2" onclick="fs_modal_popup( 'fs-modal-popup' , 'design' , 'ratings' , '<?php echo $modal['table_name']; ?>' , '<?php echo $modal['table_id']; ?>' , 'VIEWS ( 36 ) ' , 'fron-end' , '#popup-more-doing-the-action-loader img' )">
                                                    <?php echo number_format($pltvotes); ?>
                                                </h2>
                                            </td>
                                            <!--  <h2 class="bold green" id="details-status" > 3.4K  </h2>-->
                                            <!--   </td>-->
                                            <!-- <td>
                                                <h2 class="bold forward-slash" id="details-forward-slash" > / </h2>
                                            </td> -->
                                            <td class="padding-left-icons-small forward-slash details-rate-attribute" id="details-forward-slash" style="padding-top: 28px;" >
                                                <h2> / </h2>
                                            </td>


                                            <td  class="padding-left-icons" >
                                                <!-- <img class="social-rectangle-icon" src="fs_folders/images/details/facebook-button.png" > -->
                                                <img class="social-rectangle-icon" src="fs_folders/images/details/facebook-button.png"
                                                    onclick="share_fb_specifi_page (  '<?php $_SERVER['PHP_SELF'] ?>' )"
                                                >

                                            </td>
                                            <td  class="social-right"  >
                                                <!-- <img  class="social-rectangle-icon" src="fs_folders/images/details/pinterest-button.png" > -->
                                                <img  class="social-rectangle-icon" src="fs_folders/images/details/pinterest-button.png"
                                                    onclick="share_pinterest ( '<?php  echo $modal['table_id']; ?>' ) "
                                                >
                                            </td>
                                    </table>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                <!-- Content Comments -->
                <div style="clear: both"></div>

                <div class="comment-container">
                    <div class="auto padding-top-comment" id="details-comment-view"  >
                        <table border="0" class="margin-auto" style="width:33%;">
                            <tbody><tr>
                                <td style="width:45%">
                                    <div class="float-right center bold pointer" style="border-bottom: 3px solid  rgb(221, 24, 41); ">
                                        <table border="0" cellpadding="0" cellspacing="0">
                                            <tbody>
                                                <tr>
                                                    <td style="padding-left: 2;">
                                                        <span>Comments</span>
                                                    </td>
                                                    <td style="padding-left: 10px;" id="details-total-comment">
                                                      <?php echo $mc->total_modal_comment($plno, 'postedlooks');  ?>
                                                    </td>

                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </td>
                                <td style="width: 27%">
                                    <select class="sorting border-grey" onchange="sort_look_comment('<?php echo $plno; ?>')" id="sort_look_comment" >
                                        <option value="order by plcno desc"> NEWEST COMMENT </option>
                                        <option value="order by plcno asc"> OLDEST COMMENT </option>
                                        <option value="order by plctlikes desc"> MOST HELPFUL COMMENT</option>
                                        <option value="order by plctdislike desc"> MOST NOT HELPFUL COMMENT</option>
                                    </select>
                                </td>
                                <td class="hide">
                                    <div class="details-edit "><img id="comment-message" src="fs_folders/images/details/comment-icon.png" onmousemove=" mousein_change_button ( '#comment-message' , 'fs_folders/images/details/comment-icon-mouse.png' )" onmouseout="mouseout_change_button (  '#comment-message'  , 'fs_folders/images/details/comment-icon.png' ) "> </div>
                                </td>
                        </tr></tbody></table>
                    </div>
                    <div class="bs-example " data-example-id="media-list" style="padding:0px; margin:0px; width: 740px; border:1px solid none; margin: 0 auto; padding-bottom: 40px;padding-top: 20px;margin-left: 97px;">


                        <?php  $np = $mc->generate_next_prev_numbers( $tlc , 10 ); ?>
                        <ul id="look-comment-cotainer-ul" >
                            <li id="comment-top-next-prev" >
                                <div style="margin-left: -39px;" >
                                    <?php $mc->print_next_prev_numbers(  $np , $plno , null , 'loader-down' ); ?>
                                </div>
                            </li>

                        </ul>

                        <div style="clear:both"> </div>

                        <ul class="media-list" id="comments_result" >

                            <li class="media border-top padding-top-comment " style="display:none" >
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" data-src="holder.js/64x64" alt="64x64" src="http://dev.fashionsponge.com/fs_folders/images/uploads/members/mem_thumnails/927.jpg" data-holder-rendered="true" style="width: 64px; height: 64px;">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading" id="media-heading">
                                        <span class="profile-name black"><a href="#"> ANNA OSTYANKO </a> </span>&nbsp;
                                        <a class="anchorjs-link" href="#media-heading">
                                            <img src="fs_folders/images/details/grey-clock.png">&nbsp;
                                            <span class="anchorjs-icon">
                                                <em class="grey">june 11,2014 9:26pm</em>
                                            </span>
                                        </a>
                                    </h4>

                                    <p class="black">
                                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                                    </p>

                                    <!--Reply Text-->
                                    <div>
                                        <img src="fs_folders/images/details/grey-comment-icon.png"> <a href="#"><span class="red font-arial comment-reply">REPLY</span> </a>
                                        <img class="like" src="http://localhost/fs/new_fs/alphatest/fs_folders/images/genImg/commen-like-unlike.png"> <span class="like-dislike-rating">2</span>
                                        <img class="dislike" src="http://localhost/fs/new_fs/alphatest/fs_folders/images/genImg/comment-dislike-un-disliked.png"> <span class="like-dislike-rating">32</span>
                                    </div>
                                </div>
                            </li>

                            <li class="media border-top padding-top-comment" style="display:none">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" data-src="holder.js/64x64" alt="64x64" src="http://dev.fashionsponge.com/fs_folders/images/uploads/members/mem_thumnails/927.jpg" data-holder-rendered="true" style="width: 64px; height: 64px;">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading" id="media-heading">
                                        <span class="profile-name black"> <a href="#"> ANNA OSTYANKO</a> </span>&nbsp;
                                        <a class="anchorjs-link" href="#media-heading">
                                            <img src="fs_folders/images/details/grey-clock.png">&nbsp;
                                            <span class="anchorjs-icon">
                                                <em class="grey">june 11,2014 9:26pm</em>
                                            </span>
                                        </a>
                                    </h4>

                                    <p class="black">
                                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                                    </p>

                                    <!--Reply Text-->
                                    <div>
                                        <img src="fs_folders/images/details/grey-comment-icon.png"><a href="#"> <span class="red font-arial comment-reply">REPLY</span> </a>
                                        <img class="like" src="http://localhost/fs/new_fs/alphatest/fs_folders/images/genImg/commen-like-unlike.png"> <span class="like-dislike-rating">32</span>
                                        <img class="dislike" src="http://localhost/fs/new_fs/alphatest/fs_folders/images/genImg/comment-dislike-un-disliked.png"> <span class="like-dislike-rating">100</span>
                                    </div>
                                </div>
                            </li>
                            <?php
                                // $plno = 10;
                                $st = null;
                                $dtime  = null;
                                $comment1  = null;
                                $profilepath = null;
                                $mc->print_look_comment_v1( $mno , $plno , $comment1 , 'init' , $dtime , $st , $nexprev=null , $sort='order by plcno desc' , $profilepath=null )
                            ?>
                        </ul>


                        <div style="clear:both"> </div>

                        <ul id="look-comment-cotainer-ul"  style="width: 893px;margin-left: -41px;margin-top: 18px;" >
                            <li class="media border-top "  >
                                   <?php $mc->print_next_prev_numbers( $np , $plno , null , 'loader-up' ); ?>
                            </li>
                        </ul>

                        <div style="clear:both"> </div>

                        <ul class="media-list" id="comments_result" style="margin-left: -38px;width: 781px;" >
                            <li class="media  padding-top-comment " style="margin-left: 37px;" > 
                                <!--Comment Area -->
                                <div class="comment-textarea">
                                    <div class="center border-bottom margin-bottom text" id="details-comment-text"> <span> Comment </span> </div>
                                    <table border="0">
                                        <tbody><tr>
                                            <td style="width:100px; text-align:center">
                                                <a href="#">

                                                
 
                                                  <?php  
                                                        $mc->member_thumbnail_display( $mc->ppic_thumbnail , $mc->mno , $mc->ppic_thumbnail,  $lookOwnerName , '60px', '', '60px', 'border:1px solid  #e2e2df; margin-top: 21px;border-radius: 4px;; margin-left: 14px;' );    
                                                  ?> 
    
                                                    <!-- <img class="media-object margin-auto" id="details-comment-avatar" data-src="holder.js/64x64" alt="64x64" src="http://dev.fashionsponge.com/fs_folders/images/uploads/members/mem_thumnails/927.jpg" data-holder-rendered="true" style="width: 64px; height: 64px;"> -->
                                                


                                                </a>
                                            </td>
                                            <td style="padding-right: 20px;">
                                                <textarea onkeyup="comment_box_hit_enter_js('<?php echo $plno; ?>' , event , 'post-enter' )" id="comment_box" ></textarea>
                                            </td>
                                        </tr><tr>
                                            <td style="width:100px">
                                            </td>
                                            <td style="padding-top:10px;padding-bottom:10px; padding-right: 20px; padding-bottom: 15px; ">
                                                <table border="0" style="width:200px; float:right;">
                                                    <tbody><tr>
                                                        <td style="display:none" >
                                                            <img id="comment-button-cancel" class="comment-button-cancel" src="fs_folders/images/details/comment-cancel.png" onmousemove=" mousein_change_button ( '#comment-button-cancel' , 'fs_folders/images/details/cancel-mouse-over.png' )" onmouseout="mouseout_change_button (  '#comment-button-cancel'  , 'fs_folders/images/details/comment-cancel.png' )" onclick="clear_input('#comment_box')" >
                                                        </td>
                                                        <td class="social-right">
                                                            <img id="comment-button-add" class="comment-button-add" src="fs_folders/images/details/add-comment.png" onmousemove=" mousein_change_button ( '#comment-button-add' , 'fs_folders/images/details/add-comment-mouse.png' )" onmouseout="mouseout_change_button (  '#comment-button-add'  , 'fs_folders/images/details/add-comment.png' )"  onclick="comment_box_hit_enter_js('<?php echo $plno; ?>', event , 'post-botton')" >
                                                        </td>
                                                </tr></tbody></table>
                                            </td>
                                    </tr></tbody></table>
                                </div>
                            </li>
                        </ul>

                        <div style="clear:both"> </div>

                    </div>
                </div>
            </div>


            <!-- Next Message -->
            <div class="center black bg-public width-auto padding hide ">
                <h3>Next in Travel </h3>
            </div>

            <!-- More by -->
            <div class="bg-white width-auto" >
                <table class="center" >
                    <tr>
                        <td id='lbc_small_ads' >
                            <table id='ads_main_table' border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td id='ld_small_ads'>
                                        <table  id="ld_ads_table1" class="ld_ads_table1"  border="0"   cellpadding="0" cellspacing="0"  >
                                            <tr>
                                                <td id="about_and_more_by" >
                                                    <!-- <span  id='recomended_more_by_t' style='font-size:12px;' > <b> ABOUT THIS "--><?php //echo strtoupper($plstyle); ?><!--" LOOK  </b> </span>-->
                                                    <table  border="0" cellspacing="0" cellpadding="0" class='margin-auto' >
                                                        <!-- <tr>-->
                                                        <!-- <td id="details-about" >-->
                                                        <!-- <div> --><?php //echo  ucfirst($lookAbout)."$more" ;  ?><!--</div>-->
                                                        <!-- </td>-->
                                                        <tr>
                                                            <td id ="more-by-link-header" >
                                                                <span  style='font-family:arial ' >More by</span>
                                                                <span id='recomended_name_t' > <a href="<?php echo $user1['username']; ?>" target='_parent' class="blue" > <?php echo $lookOwnerName; ?> </a>   </span> <span id='recomended_bar_t' >|</span>
                                                                <span> <?php echo "$modal[position] of $modal[total]"; ?>  </span>
                                                                <span id='recomended_all_t' style='padding-left:5px;' title='all looks' > <a href="<?php echo "$user1[username]-$user1[profile_tab]"; ?>"  class="blue" target='_parent' > All Looks >> </a>  </span></span>
                                                            </td>
                                                    </table>
                                                </td>
                                            <tr>
                                                <td>
                                                    <!-- thumbnail cotainer  -->
                                                    <table id="res_container_t" border="0" cellspacing="0" cellpadding="0" >
                                                        <tr>
                                                            <td>
                                                                <div id='body_content-details'>
                                                                    <div id='res_container-details'>
                                                                        <?php
                                                                        $c=0;
                                                                        for ($i=0; $i < 15 ; $i++) { // if you change limit here change also the lookdetails_thumbnail in function_js
                                                                            $c++;
                                                                            echo "
                                                                                <li id='li_res_thumbnails$c'>
                                                                                    <div id='home_res_thumbnails$c' >
                                                                                    </div>
                                                                                </li>
                                                                            ";
                                                                         }
                                                                        ?>
                                                                    </div>
                                                                </div>
                                                                <!-- <div id="thumbnail_res" style="position:absolute" > -->
                                                                <!-- thumbnail res  -->
                                                                <!-- </div> -->
                                                                 <center> <div id='loading'  > <img id="details-thumbnails-loader" src="fs_folders/images/attr/loading 2.gif" style="visibility:hidden;height:10px;" > </div></center>
                                                            </td>
                                                    </table>
                                                </td>
                                        </table>
                                    </td>
                                <tr>
                                    <td id='lookdetails-ads-by-250' style="display:none" >
                                        <!-- advertisement is temporary -->
                                       <a href="#"><div>
                                            FOLLOW US
                                        </div> </a>
                                        <?php
                                        $advertise = array("Instagram","Facebook","Twitter");
                                        $loc_ads  = array( "" ,"http://instagram.com/FashionSponge/","https://facebook.com/FashionSponge/","https://twitter.com/FashionSponge/");
                                        ?>
                                        <table border="0"  cellpadding="5" cellspacing="0"  >
                                            <tr>
                                                <td>
                                                    <a href="r?loc=<?php echo  str_replace('.',' ', $loc_ads[1]); ?>" target="_blank" >
                                                        <img src="fs_folders/images/ads/1.jpg" title="<?php echo $advertise[0]; ?>" >
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="r?loc=<?php echo  str_replace('.',' ', $loc_ads[1]); ?>" target="_blank" >
                                                        <img src="fs_folders/images/ads/2.jpg" title="<?php echo $advertise[1]; ?>" >
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="r?loc=<?php echo  str_replace('.',' ', $loc_ads[1]); ?>" target="_blank" >
                                                        <img src="fs_folders/images/ads/3.jpg" title="<?php echo $advertise[2]; ?>" >
                                                    </a>
                                                </td>
                                                <!-- <tr>
                                                    <td>
                                                        <img src="fs_folders/images/ads/2.jpg">
                                                    </td>
                                                    <td>
                                                        <img src="fs_folders/images/ads/3.jpg">
                                                    </td> -->
                                        </table>
                                    </td>
                            </table>
                        </td>
                </table>
                <div class="black bold  padding-bottom-comment center" id="more-category">
                    <span> More <?php echo $plstyle; ?> Looks </span>
                </div>

                <div>
                    <img id="details-modal-feed-loader" src="fs_folders/images/attr/loading 2.gif" style="visibility:hidden;height:10px;" >
                </div>
            </div>
            <!--Modals-->
            <!-- <div class="bg-public width-100 padding-top-comment "   >
                <table>
                    <td id="profile-body-content-activities-table-modals" >
                        <div id="modal-container" class="center modal-container">
                            <div id="res_container">
                                <li id="li_res1" style=" width: 300px; height: 290px; border:1px solid red; background-color: gainsboro;">
                                    <div id="home_res1">
                                    </div>
                                </li>
                                <li id="li_res2" style=" width: 293px; height: 290px; border:1px solid green ">
                                    <div id="home_res2">
                                    </div>
                                </li>
                                <li id="li_res3" style=" width: 293px; height: 290px; border:1px solid yellow">
                                    <div id="home_res3">
                                    </div>
                                </li>
                            </div>
                        </div>
                        <div id="thumbnail_res" style="position:absolute" >
                        </div>
                        <br>
                    </td>
                </table>
            </div>  -->


            <div id='body_content' style="margin-left:57px">
                <div id='body_content'>
                    <div id='res_container'>
                        <li id='li_res1'>
                            <div id='home_res1' >
                            </div>
                        </li>
                        <li id='li_res2'>
                            <div id='home_res2' >
                            </div>
                        </li>
                        <li id='li_res3'>
                            <div id='home_res3' >
                            </div>
                        </li>
                    </div>
                </div>
            </div>  <!-- end body content -->
            <div style='clear:both'>
            </div>
            <div style="height:46px;" > </div> 
            <div id="footer">  
                <div class="footer-sub-wrapper" style="border-right: 1px solid rgb(34, 91, 153);width: 938px" >
                    <?php   
                         $mc->new_footer(); 
                     ?> 
                 </div>
            </div>
        </div>
    </div>

    <link rel="stylesheet" type="text/css" href="fs_folders/fs_lookdetails/style1.css">
    <link rel="stylesheet" type="text/css" href="fs_folders/fs_lookdetails/look_comment_items/style.css">



</body>
</html>
