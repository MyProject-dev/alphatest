<?php
/**
 * Created by PhpStorm.
 * User: Jesus
 * Date: 9/16/2015
 * Time: 11:00 AM
 */
require("../../fs_folders/php_functions/function.php");
require("../../fs_folders/php_functions/Database/Database.php");
require("../../fs_folders/php_functions/Class/User.php");
require("../../fs_folders/php_functions/Class/Brand.php");


use App\User;

$db = new Database();
$db->connect();
$mno         = 1022;
$bno         = 23;
$table       = 'fs_members';
$gender      = 'male2';
$plusBlogger = 'yes2';
$userName    = 'rico2';
$firstName   = 'Jesus Erwin2';
$lastName    = 'Suarez2';
$blogName    = 'jesus blog name2';
$blogUrl     = 'google.com2';
$user = new User($mno, $db);


//print_r($user->brand());
/*
if($db->update('fs_members', array('plus_blogger'=>''), 'mno > 0 ')){
    echo "successfully updated<br>";
} else {
    echo "not successfully updated<br>";
}

*/



/*
 $user->updateInfo(
     array(
         'fullname'=>$firstName . ' ' . $lastName,
         'firstname'=>$firstName,
         'lastname'=>$lastName,
         'identity_username'=>$userName,
         'blogdom'=>$blogName,
         'blogurl'=>$blogUrl,
         'gender'=>$gender,
         'plus_blogger'=>$plusBlogger
    ),
     "mno = $mno"
 );
*/
/*
$db->update(
    $table,
    array(
        'fullname'=>$firstName . ' ' . $lastName,
        'firstname'=>$firstName,
        'lastname'=>$lastName,
        'identity_username'=>$userName,
        'blogdom'=>$blogName,
        'blogurl'=>$blogUrl,
        'gender'=>$gender,
        'plus_blogger'=>$plusBlogger
    ),
    "mno = $mno"
);
*/
//$user->resetInformation($mno); 

echo "my over all total looks like " . $user->getOverAllUploadedLookModalLike() . "\n<br";

echo "my over all total article like " . $user->getOverAllUploadedArticleModalLike() . "\n<br>"; 

echo "my total look  uploaded " . $user->getTotalUploadedLookModal() . "\n<br>"; 

echo "my total article uploaded " . $user->getTotalUploadedArticleModal() . "\n<br>";

echo "my total follower " . $user->getTotalFollower() . "\n<br>";

echo "my total following " . $user->getTotalFollowing() . "\n<br>"; 

echo "my total favorited " . $user->getTotalFavorited() . "\n<br>";









/*
 *
 * Delete data from fs
 */

$tableNameArray = array(
    'activity'=>'_table_id',
    'fs_brands'=>'bno',
    'fs_cflag'=>'flagno',
    'fs_comment'=>'cno',
    'fs_drip_modals'=>'dmno',
    'fs_favorite_modals'=>'fmno',
    'fs_flag'=>'flno',
    'fs_follow'=>'flno',
    'fs_info_advertise'=> 'advertise_id',
    'fs_keyword'=>'kno',
    'fs_look_flag'=>'flr_no', 
    'postedlooks'=>'plno',
    'posted_looks_comments'=>'plcno',
    'posted_looks_comments_like_dislike'=>'plcldno',
    'fs_postedarticles'=>'artno',
    'fs_post_attribute'=>'id',
    'fs_pltag'=>'pltgno',
    'fs_notification'=>'nno',
    'fs_member_accounts'=>'mano',
    'fs_members'=>'mno',
    'fs_member_timeline'=>'mptno',
    'fs_message'=>'msgno',
    'fs_search'=>'sno'
);



foreach($tableNameArray as $key=>$value) {

    if(mysql_query("delete from $key where $value > 0")){
        echo "$key deleted where $key > 0 \n <br>";
    } else {
        echo "failed to delete table $key where $value > 0 \n <br>";
    }
}
 




