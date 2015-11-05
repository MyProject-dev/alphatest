<?php    
require("../../../fs_folders/php_functions/function.php"); 
require("../../../fs_folders/php_functions/Class/Article.php");
require("../../../fs_folders/php_functions/Class/Reset.php");
require("../../../fs_folders/php_functions/myclass.php");
require("../../../fs_folders/php_functions/Class/User.php");

use App\Article;

$mc   = new myclass();
$db   = new Database(); 
$article = new Article($db, $mc->mno);
$db->connect();   
$article->destroy($_REQUEST['id']);