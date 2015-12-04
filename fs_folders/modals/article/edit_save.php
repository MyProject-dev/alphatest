<?php
/**
 * Created by PhpStorm.
 * User: Jesus
 * Date: 9/24/2015
 * Time: 3:11 PM
 */
echo "<pre>";
require("../../../fs_folders/php_functions/function.php");
require("../../../fs_folders/php_functions/Database/Database.php");
require("../../../fs_folders/php_functions/Class/Article.php");
require("../../../fs_folders/php_functions/Class/Reset.php");

use App\Article;
$db = new Database();
$db->connect();
$mno = 1021;
$article = new Article( $db, $mno);
$category = 'beauty';


print_r($_REQUEST); 


$response = $db->update('fs_postedarticles',
    array(
        'tags'=> $_REQUEST['tags'],
        'topic'=> $_REQUEST['topic'],
        'category'=> $_REQUEST['category']
    ),
    " artno = " . intval($_REQUEST['id'])
);

$response1 = mysql_query("UPDATE fs_postedarticles SET title = '". $_REQUEST['title'] ."', source_url = '" . $_REQUEST['url'] . "', description = '" . $_REQUEST['desc'] ."' WHERE artno = " . intval($_REQUEST['id']));


if($response) {
    echo "Successfully updated <br>";
} else {
    echo "Failed to updated <br>";
}

if($response1) {
    echo "description updated <br>";
} else {
    echo "description not updated <br>";
}