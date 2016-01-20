<?php

$uainfo  			   = $mc->get_user_account_by_id ( $mno  );
$email 			       = $uainfo[0]['email'];
$uinfo 				   = $mc->get_user_info_by_id($mno );
$lastname 		       = $uinfo[0]['lastname'];
$password 		       = $uinfo[0]['identity_login'];
$gender                = $uinfo[0]['gender'];
$status                = $uinfo[0]['status'];
$plus_blogger          = (!empty($uinfo[0]['plus_blogger'])) ? $uinfo[0]['plus_blogger'] : NULL ;
$type                  =  ( !empty($_GET['type'])) ? $_GET['type'] : '';
$open                  =  ( !empty($_GET['open'])) ? $_GET['open'] : '';
echo "<pre>";
//print_r($uinfo );
echo "</pre>";

/**
 * Auto open tab when specifically visited a users ex: change email. Email tab will auto collapse after page is visited and loaded
 */
if($open == 'email') { ?>
    <script>
        $(document).ready(function(){
            collapse('.profile-gen-email');
            $("#nemail").focus();
        });
    </script>
    <?php
}
?>

<!-- Start design here -->
<div  class="profile-general-right-container" >
    <table>
        <tr>
            <td class="profile-gen-email" onmouseover="show_hide_profile_options ( '.profile-name-edit'     , 'show' )"        onmouseout="show_hide_profile_options ( '.profile-name-edit' , 'hide' )"  >
                <div id='settings' class="profile-name-edit profile-general-edit" style='text-decoration:underline; visibility:hidden' onclick="account_profile_edit('.profile-gen-email' , 'slideDown' )" >
                    edit <img src='<?php echo "$mc->genImgs/edit.png"; ?>'  />
                </div id='settings'>


                <ul>
                    <li class="p-gen-left" ><span>Email Address</span></li>
                    <li class="p-gen-center" >
                        <span onclick="collapse('.profile-gen-email')" >
                            <?php echo (!empty($email)) ? $email: 'Set your email'; ?>
                        </span>
                        <div class="error-container-div" > <?php echo ($type == 'email') ? $_SESSION['error'] : ''; ?> </div>
                    </li>
                    <li class="p-gen-right" ><span>Edit</span></li>
                </ul>

                <div class="profile-gen-email p-g-hide"  >
                    <form method="POST" action="fs_folders/php_functions/Controller/Account.php?type=email" >
                        <table border="0" cellspacing="0" cellpadding="0" >
                            <tr>
                                <td>
                                    <input  name='cemail' type="hidden" placeholder="Current Email" value="<?php echo $email; ?>">
                                </td>
                            <tr>
                                <td>
                                    <label><span>New Email</span></label>
                                    <input  name='nemail' id='nemail' type="email" placeholder="New Email" >
                                </td>
                            <tr>
                                <td>
                                    <label><span>Re Type New Email</span></span></label> <br>
                                    <input  name='rnemail' type="email" placeholder="Re Type New Email" >
                                </td>
                            <tr>
                                <td>
                                    <label><span>Enter Your Password</span></span></label> <br>
                                    <input  name='password' type="password" placeholder="Enter Your Password" >
                                </td>
                            <tr>
                                <td>
                                    <input  name='esave' type="submit" value="Save" >
                                </td>
                        </table>
                    </form>
                </div>
            </td>
        <tr>
            <td  class="profile-gen-password"  onmouseover="show_hide_profile_options ( '.profile-password-edit'     , 'show' )"        onmouseout="show_hide_profile_options ( '.profile-password-edit' , 'hide' )"  >
                <div id='settings' class="profile-password-edit profile-general-edit" style='text-decoration:underline; visibility:hidden' onclick="account_profile_edit('.profile-gen-password' , 'slideDown' )" >
                    edit <img src='<?php echo "$mc->genImgs/edit.png"; ?>'  />
                </div id='settings'>




                <ul>
                    <li class="p-gen-left" ><span>Password</span></li>
                    <li class="p-gen-center" >
                        <span onclick="collapse('.profile-gen-password')" >
                            <?php echo (!empty($password)) ? $password: 'Set Password'; ?>
                        </span>

                        <div class="error-container-div" > <?php echo ($type == 'password') ? $_SESSION['error'] : ''; ?> </div>
                    </li>
                    <li class="p-gen-right" ><span>Edit</span></li>
                </ul>

                <div class="profile-gen-password p-g-hide"  >
                    <form method="POST" action="fs_folders/php_functions/Controller/Account.php?type=password"  >
                        <table border="0" cellspacing="0" cellpadding="0" >
                            <tr>
                                <td>
                                    <input  name='cemail' type="hidden" placeholder="Current Password" value="<?php echo $email; ?>" >
                                </td>
                            <tr>
                                <td>
                                    <label><span>Current Password</span></label> <br>
                                    <input  name='cpass' type="password" placeholder="Current Password" value="">
                                </td>
                            <tr>
                                <td>
                                    <label><span>New Password</span></label>
                                    <input name="npass" type="text" placeholder="New Password" >
                                </td>
                            <tr>
                                <td>
                                    <label><span>Re Type New Password</span></span></label> <br>
                                    <input name="rtnpass" type="text" placeholder="Re Type New Password" >
                                </td>
                            <tr>
                                <td>
                                    <input name="spass" type="submit" value="Save" >
                                </td>
                        </table>
                    </form>
                </div>
            </td>
        <tr>
            <td  class="profile-gen-gender" onmouseover="show_hide_profile_options ( '.profile-gender-edit'     , 'show' )"        onmouseout="show_hide_profile_options ( '.profile-gender-edit' , 'hide' )"  >
                <div id='settings' class="profile-gender-edit profile-general-edit" style='text-decoration:underline; visibility:hidden' onclick="account_profile_edit('.profile-gen-gender' , 'slideDown' )" >
                    edit <img src='<?php echo "$mc->genImgs/edit.png"; ?>'  />
                </div id='settings'>



                <form method="POST" action="fs_folders/php_functions/Controller/Account.php?type=gender" >
                    <ul>
                        <li class="p-gen-left" ><span>Gender</span></li>
                        <li class="p-gen-center" >
                            <span onclick="collapse('.profile-gen-gender')" >
                                <?php echo (!empty($gender)) ? $gender : 'Whats Your Gender'; ?>
                            </span>

                            <div class="error-container-div" > <?php echo ($type == 'gender') ? $_SESSION['error'] : ''; ?> </div>

                        </li>
                        <li class="p-gen-right" ><span>Edit</span></li>
                    </ul>

                    <div class="profile-gen-gender p-g-hide"  >
                        <table border="0" cellspacing="0" cellpadding="0" >
                            <tr>
                                <td>
                                    <select name="gender" >
                                        <option>Select Your Gender</option>
                                        <option  <?php echo ($gender == 'Male') ? 'selected': '';?> >Male</option>
                                        <option  <?php echo ($gender == 'Female') ? 'selected': '';?>  >Female</option>
                                    </select>
                                </td>
                            <tr>
                                <td>
                                    <input name="sgender" type="submit" value="Save" >
                                </td>
                        </table>
                    </div>
                </form>
            </td>
        <tr>
            <td class="profile-gen-blogger-type"  onmouseover="show_hide_profile_options ( '.profile-blogger-type-edit'     , 'show' )"        onmouseout="show_hide_profile_options ( '.profile-blogger-type-edit' , 'hide' )"  >
                <div id='settings' class="profile-blogger-type-edit profile-general-edit" style='text-decoration:underline; visibility:hidden' onclick="account_profile_edit('.profile-gen-blogger-type' , 'slideDown' )" >
                    edit <img src='<?php echo "$mc->genImgs/edit.png"; ?>'  />
                </div id='settings'>


                <form method="POST" action="fs_folders/php_functions/Controller/Account.php?type=bloggerType"  >
                    <ul>
                        <li class="p-gen-left" ><span>Blogger Type</span></li>

                        <li class="p-gen-center" >
                            <span  onclick="collapse('.profile-gen-blogger-type')" >
                                <?php echo (!empty($plus_blogger)) ? $plus_blogger: 'Select what type of blogger you are'; ?>
                            </span>
                            <div class="error-container-div" > <?php echo ($type == 'bloggerType') ? $_SESSION['error'] : ''; ?> </div>
                        </li>

                        <li class="p-gen-right" ><span> Edit</span></li>
                    </ul>

                    <div class="profile-gen-blogger-type p-g-hide"  >
                        <table border="0" cellspacing="0" cellpadding="0" >
                            <tr>
                                <td>
                                    <select name="blogger_type" >
                                        <option>Are you a plus size blogger?</option>
                                        <option <?php echo ($plus_blogger == 'Yes') ? 'selected': '';?>>Yes</option>
                                        <option <?php echo ($plus_blogger == 'No') ? 'selected': '';?>>No</option>
                                    </select>
                                </td>
                            <tr>
                                <td>
                                    <input name="bloggerType" type="submit" value="Save" >
                                </td>
                        </table>
                    </div>
                </form>
            </td>
        <tr>
            <td class="profile-gen-preferred-style hide"  onmouseover="show_hide_profile_options ( '.profile-preferred-style-edit'     , 'show' )"        onmouseout="show_hide_profile_options ( '.profile-preferred-style-edit' , 'hide' )"  >
                <div id='settings' class="profile-preferred-style-edit profile-general-edit" style='text-decoration:underline; visibility:hidden' onclick="account_profile_edit('.profile-gen-preferred-style' , 'slideDown' )" >
                    edit <img src='<?php echo "$mc->genImgs/edit.png"; ?>'  />
                </div id='settings'>
                <!-- <form method="POST" action="account?at=7&preffered_styles=update" >-->
                <form method="POST" action="account?at=7&change=style" >
                    <ul>
                        <li class="p-gen-left" ><span>Preferred Styles</span></li>
                        <li class="p-gen-center" >
                            <span  onclick="collapse('.profile-gen-preferred-style')" >
                                Select The Brand You Wear and Like
                            </span>
                        </li>
                        <li class="p-gen-right" ><span> Edit</span></li>
                    </ul>

                    <div class="profile-gen-preferred-style p-g-hide"  >
                        <table border="0" cellspacing="0" cellpadding="0" >
                            <tr>
                                <td>
                                    <select name="preferred_style" >
                                        <option>Select The Brand You Wear and Like</option>
                                        <option>Bohemian</option>
                                        <option>Casual</option>
                                        <option>Chic</option>
                                        <option>Menswear</option>
                                        <option>Preppy</option>
                                        <option>Streetwear</option>
                                    </select>
                                </td>
                            <tr>
                                <td>
                                    <input name="spstyle" type="submit" value="Update" >
                                </td>
                        </table>
                    </div>
                </form>
            </td>
        <tr>
            <td  class="profile-gen-preferred-topic hide" onmouseover="show_hide_profile_options ( '.profile-preferred-topic-edit'     , 'show' )"        onmouseout="show_hide_profile_options ( '.profile-preferred-topic-edit' , 'hide' )"  >
                <div id='settings' class="profile-preferred-topic-edit profile-general-edit" style='text-decoration:underline; visibility:hidden' onclick="account_profile_edit('.profile-gen-preferred-topic' , 'slideDown' )" >
                    edit <img src='<?php echo "$mc->genImgs/edit.png"; ?>'  />
                </div id='settings'>
                <!-- <form method="POST" action="account?at=7&preferred_topic=update" >-->
                <form method="POST" action="account?at=7&change=topic" >
                    <ul>
                        <li class="p-gen-left" ><span>Preferred Topic</span></li>
                        <li class="p-gen-center" >
                            <span onclick="collapse('.profile-gen-preferred-topic')" >
                                Select The topics You Enjoy Reading
                            </span>
                        </li>
                        <li class="p-gen-right" ><span>Edit</span></li>
                    </ul>

                    <div class="profile-gen-preferred-topic p-g-hide"  >
                        <table border="0" cellspacing="0" cellpadding="0" >
                            <tr>
                                <td>
                                    <select name="preferred_topic">
                                        <option> Select The topics You Enjoy Reading</option>
                                        <option>Fashion</option>
                                        <option>Beauty</option>
                                        <option>Lifestyle</option>
                                        <option>Entertainment</option>
                                    </select>
                                </td>
                            <tr>
                                <td>
                                    <input name="sptopic" type="submit" value="Update" >
                                </td>
                        </table>
                    </div>
                </form>
            </td>
        <tr>
            <td class="profile-gen-account" style="border-bottom:none;"   onmouseover="show_hide_profile_options ( '.profile-account-edit'     , 'show' )"        onmouseout="show_hide_profile_options ( '.profile-account-edit' , 'hide' )"  >
                <div id='settings' class="profile-account-edit profile-general-edit" style='text-decoration:underline; visibility:hidden' onclick="account_profile_edit('.profile-gen-account' , 'slideDown' )" >
                    edit <img src='<?php echo "$mc->genImgs/edit.png"; ?>'  />
                </div id='settings'>
                <form method="POST" action="fs_folders/php_functions/Controller/Account.php?type=deactivate"  >
                    <ul>
                        <li class="p-gen-left" ><span>Account</span></li>
                        <li class="p-gen-center" >
                            <span onclick="collapse('.profile-gen-account')" >

                                <?php echo ($status==10) ? 'Account deactivated'  : 'Activated'; ?>
                            </span>

                            <div class="error-container-div" > <?php echo ($type == 'deactivate') ? $_SESSION['error'] : ''; ?> </div>

                        </li>
                        <li class="p-gen-right" ><span>Edit</span></li>
                    </ul>

                    <div class="profile-gen-account p-g-hide"  >
                        <table border="0" cellspacing="0" cellpadding="0" >
                            <tr>
                                <td>
                                    <h3>
                                        <?php echo ($status==10) ? 'Activate now?'  : 'Deactivate you account?'; ?>
                                    </h3>
                                </td>
                            <tr>
                                <td>
                                    <?php
                                        if($status == 10) {
                                            echo '<input name="deactivate" type="submit" value="Activate Now"  >';
                                        } else {
                                            echo '<input name="deactivate" type="submit" value="Deactivate Now"  >';
                                        }
                                    ?>

                                </td>
                        </table>
                    </div>
                </form>
            </td>
        <tr>
    </table>
</div>