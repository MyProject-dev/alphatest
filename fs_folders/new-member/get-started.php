<?php
    use App\User;

?>


<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <?php
       // require('fs_folders/php_functions/Class/User.php');
        $user = new User($mc->mno, $db);
        $randomNumbers = rand(0,2);
    ?>
</head>
<body>

<div id="get-started-container" > 
    <div style="height:14px;">
    </div>

    <?php if(!$user->emailConfirmationStatus()):  ?>
        <div class="gs-email-container" >
            <div>
                <p>
                    Please confirm your email by clicking the link we sent to <b> <?php echo $mc->identity_email; ?> </b>
                    <b><a href="account?at=7&open=email"> update your email</a> </b> or <b>  <a href="#" onclick="resend_email()" >resend email.</a></b>
                </p>
            </div>
        </div>
         <div class="gs-s-padding-1"> </div> 
    <?php endif; ?>

   
    <div class="gs-suggestion-container" >
        <div class="gs-s-upper" >
            <div onclick="get_started_close()" ><b>x</b></div>
                <center>
                    <span >
                        Welcome To  
                        <b>Fashion Sponge,</b> <fname><b> <?php echo $mc->firstname; ?></b></fname> 
                    </span>
                </center> 
                <span>
                    Now you can share your latest blog
                    post, ootd, read articles, rate members style and lots more.
                </span> 
            </div>
        <div class="gs-s-center">
            <span>
                Get Started
             </span>
        </div> 
        <div class="gs-s-lower">
            <ul>
                <li>
                    <a href="postarticle">
                        <div class="get-started-image-radiant-text">POST AN ARTICLE</div>
                        <div class="get-started-image-radiant" >
                        </div>
                        <div style="border:2px solid #E2E2DF; width: 165px;background-image: url('fs_folders/images/uploads/posted articles/home/<?php  echo $article->latestShared() ?>.jpg');background-size: 166px auto;height: 165px;border-radius: 10px;background-repeat: no-repeat; background-color:black;"   >
                        </div>
                    </a>
                    <!-- <img src="fs_folders/images/uploads/posted articles/home/--><?php //echo $article->latestShared()  ?><!--.jpg"  >-->
                </li>
                <li>
                    <a href="postalook">
                        <div class="get-started-image-radiant-text">POST A LOOK</div>
                        <div class="get-started-image-radiant" >
                        </div>
                        <div style="border:2px solid #E2E2DF;width: 165px;background-image: url('fs_folders/images/uploads/posted looks/home/<?php echo $look->latestShared() ?>.jpg');background-size: 166px auto;height: 165px;border-radius: 10px;background-repeat: no-repeat; background-color:black;" >
                        </div>
                    </a>
                    <!-- <img src="fs_folders/images/uploads/posted looks/home/--><?php //echo $look->latestShared()  ?><!--.jpg"  >-->
                </li>

                <li>
                    <a href="article">
                        <div class="get-started-image-radiant-text">READ ARTICLES</div>
                        <div class="get-started-image-radiant" >
                        </div>
                        <div style="border:2px solid #E2E2DF;width: 165px;background-image: url('fs_folders/images/uploads/posted articles/home/<?php echo $article->latestRead() ?>.jpg');background-size: 166px auto;height: 165px;border-radius: 10px;background-repeat: no-repeat; background-color:black;"   >
                        </div>
                        <!-- <img src="fs_folders/images/uploads/posted articles/home/--><?php //echo $article->latestRead() ?><!--.jpg"  >-->
                    </a>
                </li>
                <li>
                    <a href="look">
                        <div class="get-started-image-radiant-text">RATE LOOKS</div>
                        <div class="get-started-image-radiant" >
                        </div>

                        <div style="border:2px solid #E2E2DF;width: 165px;background-image: url('fs_folders/images/uploads/posted looks/home/<?php echo  $look->latestRate() ?>.jpg');background-size: 166px auto;height: 165px;border-radius: 10px;background-repeat: no-repeat; background-color:black;"   >
                        </div>


                        <!-- <img src="fs_folders/images/uploads/posted looks/home/--><?php //echo  $look->latestRate() ?><!--.jpg"  >-->
                    </a>
                </li>
                <li>
                    <!-- <a href="--><?php //echo $mc->identity_username ?><!--">-->
                    <a href="account?at=7">
                        <div class="get-started-image-radiant-text">COMPLETE PROFILE</div>
                        <div class="get-started-image-radiant" >
                        </div>
                            <?php
                            if(file_exists("fs_folders/images/uploads/members/mem_profile/".$userProfilePic->profileComplete().".jpg")){   ?>
                                <!-- <img alt="Please upload your profile picture." src="fs_folders/images/uploads/members/mem_profile/--><?php //echo $userProfilePic->profileComplete() ?><!--.jpg"  >-->
                                <?php $getStartedProfileSrc = "fs_folders/images/uploads/members/mem_profile/" . $userProfilePic->profileComplete() . ".jpg" ?>
                            <?php } else { ?>
                                <?php if($mc->gender == 'Male') {  ?>
                                    <?php $getStartedProfileSrc =  "fs_folders/images/uploads/members/mem_profile/male-default-avatar.png";  ?>
                                    <!-- <img alt="Please upload your profile picture." src="fs_folders/images/uploads/members/mem_profile/male-default-avatar.png"  >-->
                                <?php } else {   ?>
                                    <?php $getStartedProfileSrc =  "fs_folders/images/uploads/members/mem_profile/female-default-avatar.png";  ?>
                                    <!-- <img alt="Please upload your profile picture." src="fs_folders/images/uploads/members/mem_profile/female-default-avatar.png"  >-->
                                <?php } ?>
                            <?php } ?>
                        <div style="border:2px solid #E2E2DF;width: 165px;background-image: url('<?php echo $getStartedProfileSrc; ?>');background-size: 166px auto;height: 165px;border-radius: 10px;background-repeat: no-repeat; background-color:black;"   >
                        </div>
                    </a>
                </li>
            </ul>
        </div>
        <div class="clear-both" > </div>
    </div>
</div>

</body>
</html>