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
require("../../fs_folders/php_functions/Class/Topic.php");
require("../../fs_folders/php_functions/Class/Category.php");

use App\Topic;
use App\Category;
$db = new Database();
$db->connect();
$mno = 1021;
$topic = new Topic( $db, $mno);
$category = new Category($db, $mno);


//$category_id = $category->getIdByName('fashion');
//if($topic->add('Test5', $category_id))  {
//    echo "inserted <br>";
//} else {
//    echo "not inserted <br>";
//}



//$response = $topic->getByNameSearchWithInCategory('test', 3);
 //$response = $topic->isExist('tes123t',1);
//print_r($response);


$topic->addIfNotExist('test','fashion');





