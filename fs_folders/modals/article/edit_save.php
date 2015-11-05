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


$db->update('fs_postedarticles',
    array('title'=> $_REQUEST['title'],
        'description'=> $_REQUEST['desc'],
        'tags'=> $_REQUEST['tags'],
        'topic'=> $_REQUEST['topic'],
        'category'=> $_REQUEST['category'],
        'source_url'=>$_REQUEST['url']
    ),
    " artno = " . $_REQUEST['id']
); 







