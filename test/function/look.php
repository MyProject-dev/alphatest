<?php
/**
 * Created by PhpStorm.
 * User: Jesus
 * Date: 9/29/2015
 * Time: 12:03 PM
 */
require("../../fs_folders/php_functions/function.php");
require("../../fs_folders/php_functions/Database/Database.php");
require("../../fs_folders/php_functions/Class/Look.php");
require("../../fs_folders/php_functions/Class/Reset.php");

$db = new Database();
$db->connect();
$mno = 1021;
$look = new Look($mno, $db);
$plno = 222537;
$style = 'chic';

//echo "artno = "  . $article->latestSharedArticle() . '<br>';
//echo $look->overAllRating($mno);
// echo "position = " . $look->position($plno, 'Bohemian', $mno) . "\n";
// echo "total uploaded " . $look->totalUploaded('Bohemian', $mno) . "\n";
//echo "Most like = " . $look->mostLike();
//echo "Total likes in category with specific user " . $look->totalLikeByCategory($mno, $style);
/*
if($look->isAllowPost($mno)) {
    echo "allow post \n";
} else {
    echo "don't allow post \n";
}
*/
//echo "Total post in a day = " . $look->totalPostInADay($mno);
//$comments = select_v3('posted_looks_comments', '*', ' plno = ' . $plno);
//foreach($comments as $comment) {
//    echo $comment['plcno'] . "\n";
//}
 // $look->destroy(222392);

//$db->insert('postedlooks', array('mno'=> 1021, 'lookName'=>'title', 'lookAbout'=>'hello', 'pludate'=>'2015-10-29 00:00:00', 'active'=>1));

echo "total like = " . $look->totalLike($plno) . "\n<br>";
echo "total dripped = " . $look->totalDripped($plno) . "\n<br>";
echo "Total favorite = " . $look->totalFavorite($plno) . "\n<br>";
