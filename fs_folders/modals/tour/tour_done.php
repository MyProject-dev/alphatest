<?php
require ("../../../fs_folders/php_functions/connect.php");
include ("../../../fs_folders/php_functions/Time/Time.php");
require ("../../../fs_folders/php_functions/function.php");
require ("../../../fs_folders/php_functions/library.php");
require ("../../../fs_folders/php_functions/source.php");
require ("../../../fs_folders/php_functions/myclass.php");
require ("../../../fs_folders/php_functions/Database/LookbookDatabase.php");
require ("../../../fs_folders/php_functions/Extends/LookbookExtends.php");
require ("../../../fs_folders/php_functions/Class/Lookbook.php");
require_once ("../../../fs_folders/php_functions/Database/Invited.php");
require('../../../fs_folders/php_functions/Class/Article.php');
require('../../../fs_folders/php_functions/Class/Look.php');

require("../../../fs_folders/php_functions/Class/Topic.php");
require("../../../fs_folders/php_functions/Class/Category.php");
require("../../../fs_folders/php_functions/Class/User.php");


use App\User;

$database = new Database();
$mc       =  new myclass();
$database->connect();
$user = new User($mc->mno, $database);

//update tlog to 4
if($user->update($mc->mno, array('tlog'=>4))){
    echo "tlog updated to 4 <br>";
} else {
    echo "tlog not updated <br>";
}







