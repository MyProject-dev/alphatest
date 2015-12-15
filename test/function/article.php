<?php
/**
 * Created by PhpStorm.
 * User: Jesus
 * Date: 9/24/2015
 * Time: 3:11 PM
 */
echo "<pre>";
require("../../fs_folders/php_functions/function.php");
require("../../fs_folders/php_functions/Database/Database.php");
require("../../fs_folders/php_functions/Class/Article.php");
require("../../fs_folders/php_functions/Class/Reset.php");

use App\Article;
$db = new Database();
$db->connect();
$mno = 1021;
$article = new Article( $db, $mno);
$category = 'beauty';
$artno = 68;




//echo "artno = "  . $article->latestSharedArticle() . '<br>';
//echo $article->overAllRating($mno);
//$r = $article->recentUploaded('Fashion');  print_r($r);  foreach($r as $art) {  echo $art['artno'] . ' = ' . $article->sourceCategoryDropDown($art['artno']) .  "\n"; }
//echo "position = " . $article->position(216, 'Fashion', $mno) . "\n";
//echo "total uploaded " . $article->totalUploaded('Fashion', $mno) . "\n";


/*
 *
 * Delete data from fs
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
*/
//echo " Most like = " . $article->mostLike();
//echo "Total likes in category with specific user " . $article->totalLikeByCategory($mno, $category);
//if($article->isAllowPost($mno)){ echo "allow post \n"; } else { echo "dont allow post \n"; }

//echo "Total post = " . $article->totalPostInADay($mno);
//$article->destroy(48);
$db->insert('fs_postedarticles', array('mno'=> 1021, 'title'=>'title', 'description'=>'hello', 'date'=>'2015-10-29 00:00:00'));

echo "total like = " . $article->totalLike($artno) . "\n<br>";
echo "total dripped = " . $article->totalDripped($artno) . "\n<br>";
echo "Total favorite = " . $article->totalFavorite($artno) . "\n<br>";
