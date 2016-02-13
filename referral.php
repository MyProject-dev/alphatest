<?php
// require_once __DIR__ . '/fs_folders/API/facebook-php-sdk-v4-5.0-dev/src/Facebook/autoload.php';
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
require("fs_folders/php_functions/Class/Invited.php");
require ('fs_folders/php_functions/Database/post.php');
$_SESSION['post_a_look_is_look_upload_once_in_db'] = false ;



use App\UserProfilePic;
use App\Article;
use App\User;
use App\Invited;
$mc             = new myclass();
$article        = new  Article($mc->mno, $db);
$look           = new Look($mc->mno, $db);
$userProfilePic = new UserProfilePic($mc->mno, $db);
$mc->post = new Post();
$user           = new User($mc->mno, $db);
$invited        = new Invited($db);

//	echo " mno = " . $mc->mno . '<br>';

//	exit;
/**
 * Detect if user has a code or don't
 */
$user->redirectUserToSignUpCode($mc->mno);

$mc->auto_detect_path();
$mc->save_current_page_visited( );
//	echo "Sub domain " . subDomain;
// asdas
//redirect
/*
    $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    if ($actual_link == 'http://fashionsponge.com/' || $actual_link == 'http://www.fashionsponge.com/' || $actual_link == 'http://fashionsponge.com/?login=1' || $actual_link == 'http://www.fashionsponge.com/?login=1') {
        echo "redirecting to.... $actual_link <br>";
        $mc->go('http://fashionsponge.com/signup');
    }
*/
# initlaized mno
// $is_cookie_set   =  $mc->set_cookie( 'mno' , 130 , time()+3600*24 );
$_SESSION['mno'] =  $mc->get_cookie( 'mno' , 136 );
$mno 			 =  $mc->get_cookie( 'mno' , 136 );
$mc->mno         =  $mc->get_cookie( 'mno' , 136 );
$fulleName        = $mc->get_full_name_by_id   ( $mc->mno );
# initialized the next viewed more modals
// $_SESSION['counter'] = 3;
// echo " <bR><br><bR><Br>mno ".$_SESSION['mno'];
// $mc->automatic_insert(5);
// echo " id = ".$_GET["id"];
// popularlatest
// popularlooks
// popularmembers
// populararticles
// popularmedia
// $_SESSION["mno"] = 134;
// echo " full url =  ".basename($_SERVER["PHP_SELF"]);
$fs_home_tab = basename($_SERVER["PHP_SELF"]);
$fs_home_tab = str_replace(".php","",$fs_home_tab);
if ($fs_home_tab == "index") { $fs_home_tab = "latest"; }
// echo " fs tab = $fs_home_tab <br>";
$mc->get_visitor_info( "" , "home tab: $fs_home_tab " , "home" );
if ( $fs_home_tab == "index" )   { $clock_style = "display:none" ;   } else  { $clock_style = "display:none" ;  }
// Init welcome
$welcome = (!empty($_GET['welcome']))? $_GET['welcome']: false;
// $mc->go('signup'); ]

/**
 * If code is empty
 *
 */


if ( !empty($_GET['gcode']) )
{
    // to logout the user
    $mno             = 136;
    $_SESSION['mno'] = 136;
    // to pass the code in the get url
    $_SESSION['gcode'] = $_GET['gcode'];
}
else if ( !empty($_GET['login']) )
{
    // to logout the user
    $mno             = 136;
    $_SESSION['mno'] = 136;
    // to pass the code in the get url
    $_SESSION['login'] = $_GET['login'];
}
else
{
    // unset gcode after used
    unset($_SESSION['gcode']);
    unset($_SESSION['login']);
}

$_SESSION['confirmed'] = TRUE;

//  echo "<h2>
// 	mno = $mc->mno <br>
// 	fullname = $mc->fullname <br>
// 	gender = $mc->gender   <br>
// 	plus_blogger = $mc->plus_blogger <br>
// 	lastname = $mc->lastname <br>
// 	firstname = $mc->firstname <br>
// 	identity_username = $mc->identity_username <br>
// 	blog_name = $mc->blog_name <br>
// 	$mc->blogdom <br>
//  </h2>";
//  echo "$mc->mno <br>";
//  echo "this a test <br> ";
//  print_r($fulleName);
//  echo " mno = " . $mc->mno . '<br>';
//  echo " tlog = " . $mc->tlog . '<br>';
//  echo "mppno  = $mc->mppno <br>";
//  echo "full name =  dsds " . $fulleName . '<br>';
//  echo "sa imong pag ka laagan, na saag ka sa akong dughan you and i will never be! <br>";
//  echo "the man! ";
//  echo "this is  a test";
//  echo "asdasdasda";
?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <!-- inner script -->
    <script type="text/javascript"> //document.location ='signup'; </script>
    <?php
    /**
     * header print title, description and keyword
     */

    $mc->header_attribute(
        "The Best Fashion Inspiration By The Best Bloggers",
        "Fashion Sponge is where fashion and lifestyle bloggers can grow their audience and readers can discover the latest in                      Fashion, Beauty, Technology and Entertainment. Sign up now."
    );

    /**
     * is to show the login area or the welcome popup
     */

    if ( $welcome == 1)
    {

        require("$mc->login_path_page/welcome/welcome-about-user.php");
        exit;
    }
    else if ($welcome == 2 || $mc->tlog < 3 and $mc->mno != 136)
    {
        // require("http://localhost/fs/new_fs/alphatest/fs_folders/login/pages/welcome-v1/slider/examples-bootstrap/welcome-popup.php");
        // echo "This is the welcome == 2";

        echo " <div id='login-wrapper' > ";
        echo "<div id='login-container' >   ";
        echo "</div>";
        echo "<div id= 'login-container1' >";
        //$this->login_page1( $page );
        require('welcome.php');
        echo "</div>";
        echo "</div>";

        exit;

        // fs_folders\login\pages\welcome-v1\slider\examples-bootstrap
    }
    else if($welcome == 'tour' || $mc->tlog == 3) {

        /**
         * Display the tour design
         */
        echo " <div id='login-wrapper' > ";
        echo "<div id='login-container' >   ";
        echo "</div>";
        echo "<div id= 'login-container1' >";
        require('fs_folders/login/pages/tour1/tour.php');
        echo "</div>";
        echo "</div>";

        /**
         * when logged in is less than four status should not be approved because
         * no way to approved if the total logged in is less than 4
         */
        update_v1(
            array(
                'table_name' => 'fs_members',
                'status'     =>  '0'
            ) ,
            array(
                'mno'=>$mno
            )
        );

    }
    else if ($mc->status == 2)
    {
        $_SESSION['confirmed'] = TRUE;
    }
    else if ($welcome == 'get-started' || $mc->tlog >= 4 ) {

        /**
         * Set confirmation status to
         * FALSE
         */
        $_SESSION['confirmed'] = FALSE;

    }
    else if ( $mno != 136)
    {
        $mc->login_popup( $mno , ( !empty($_GET['welcome']) ) ? $_GET['welcome'] : null );
    }
    else
    {
        $mc->login_popup( $mno ,  'login' ) ;
    }
    //echo "id = $mc->mno <br>";
    ?>

    <!-- new home -->
    <link rel="stylesheet" type="text/css" href="fs_folders/index_home/home_css/home.css">
    <link rel="stylesheet" type="text/css" href="fs_folders/modals/latest_modals/modal.css" >
    <script type="text/javascript" src='fs_folders/index_home/home_js/home_ajax.js'> </script>
    <script type="text/javascript" src='fs_folders/index_home/home_js/home_query.js'> </script>
    <!-- end home -->

    <!-- new look -->
    <script type="text/javascript" src='fs_folders/look/look_js/lookajax.js' ></script>
    <script type="text/javascript" src='fs_folders/look/look_js/lookjquery.js' ></script>
    <!-- end look  -->


    <!-- Social -->
    <script type="text/javascript" src="fs_folders/js/social.js" ></script>

    <?php


    // echo "total char " . strlen("jacket c/o without walls we could poke around outside forever. we're both big fans of exploring and never seem to get enough. soak, soak, soak. vasquez rocks");
    ?>



    <link rel="stylesheet" type="text/css" href="http://getbootstrap.com/dist/css/bootstrap.min.css" >
</head>
<body onload="init('<?php echo $fs_home_tab; ?>')" >
<?php
/**
 * to display the popup container
 */
$mc->fs_popup_container_and_response( 'display:none' );

/**
 * add the plugin for google analytic
 */
$mc->plugins( "google analytic" , " home " );

?>

<div id='main_wrapper' >
    <div id='wrapper_head'>
    </div>
    <div id='main_container' >
        <!--  new header  -->
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
            'home'
        );
        ?>
        <!-- end header -->
        <?php
        //This is get started design so enable this when the member is new to the site.
        if (!$_SESSION['confirmed']) {
            require('fs_folders/new-member/get-started.php');
        }

        ?>
        <div id='body_wrapper'>

            <div id='body_container' style="padding-left: 55px; padding-top:20px; padding-bottom:20px">

                <?php
                $invitedData = $invited->getAllInvited();

                $c=1;
                for($i=0; $i<count($invitedData); $i++)
                {
                    $invitedEmail = $invitedData[$i]['invited_wob'];
                    ?>
                    <div class="media">
                        <div class="media-left">
                            <a href="#">
                                <img class="media-object" data-src="holder.js/64x64" alt="64x64" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIHZpZXdCb3g9IjAgMCA2NCA2NCIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+PCEtLQpTb3VyY2UgVVJMOiBob2xkZXIuanMvNjR4NjQKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjYuMC4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+PCFbQ0RBVEFbI2hvbGRlcl8xNTJkYTQ3MWE3NyB0ZXh0IHsgZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQgfSBdXT48L3N0eWxlPjwvZGVmcz48ZyBpZD0iaG9sZGVyXzE1MmRhNDcxYTc3Ij48cmVjdCB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSIxNC41IiB5PSIzNi41Ij42NHg2NDwvdGV4dD48L2c+PC9nPjwvc3ZnPg==" data-holder-rendered="true" style="width: 64px; height: 64px;">
                            </a>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">
                                <?php echo $invitedEmail; ?>
                            </h4>
                            <?php $allReferred = $invited->getInvitedReferred($invitedData[$i]['invited_id']); ?>



                            <span style="font-size:8px;color:<?php echo $invited->totalReferralColor; ?>" >Total referred <?php echo $invited->totalReferral; ?></span>
                            <span>http://www.fashionsponge.com/signup?referral=<?php echo $invited->getReferralId($invitedData[$i]['invited_id']); ?></span>
                            <br> <br>
                            <?php

                            $c1=1;
                            foreach($allReferred as $key => $value)
                            {
                                $referralInvitedEmail =  $value['invited_wob'];
                                                         $invited->getInvitedReferred($value['invited_id']);
                                ?>
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <img class="media-object" data-src="holder.js/64x64" alt="64x64" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIHZpZXdCb3g9IjAgMCA2NCA2NCIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+PCEtLQpTb3VyY2UgVVJMOiBob2xkZXIuanMvNjR4NjQKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjYuMC4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+PCFbQ0RBVEFbI2hvbGRlcl8xNTJkYTQ3Njg3YiB0ZXh0IHsgZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQgfSBdXT48L3N0eWxlPjwvZGVmcz48ZyBpZD0iaG9sZGVyXzE1MmRhNDc2ODdiIj48cmVjdCB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSIxNC41IiB5PSIzNi41Ij42NHg2NDwvdGV4dD48L2c+PC9nPjwvc3ZnPg==" data-holder-rendered="true" style="width: 64px; height: 64px;">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">
                                            <?php echo $referralInvitedEmail; ?>
                                        </h4>
                                        <span style="   font-size:10px;color:<?php echo $invited->totalReferralColor; ?>" >Total referred <?php echo $invited->totalReferral; ?></span>
                                        <span>http://www.fashionsponge.com/signup?referral=<?php echo $invited->getReferralId($value['invited_id']); ?></span>
                                    </div>
                                </div>
                                <?php
                                $c1++;
                            }
                            echo "<br>";
                         $c++;
                        ?>
                        </div>
                    </div><?php
                }?> <!-- End for loop -->



                <?php
                //echo "referred = " . $invited->getInvitedReferred(1)  . '<br>';
                //echo "invited = " . $invited->getAllInvited()  . '<br>';
                ?>

            </div>
        </div> <!-- end body wrapper -->
        <div id="footer">
            <div id="footer_res" style="display:none" > footer res  </div>
            <!-- <link rel="stylesheet" type="text/css" href="fs_folders/page_footer/css/footer1.css" >  -->
            <?php
            // $mc->fs_footer(  'width:1010px !important;' , 'margin-left:-13px;' );
            $mc->new_footer();
            ?>
        </div>
    </div> <!-- end main container -->
</div>  <!-- end main wrapper -->
<?php
//$mc->invite_hellobar( $mno );
?>
</body>
</html>
