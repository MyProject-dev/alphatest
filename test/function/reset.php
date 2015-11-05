<?php
/**
 * Created by PhpStorm.
 * User: Jesus
 * Date: 10/9/2015
 * Time: 6:48 PM
 */

echo "<pre>";
require("../../fs_folders/php_functions/function.php");
require("../../fs_folders/php_functions/Database/Database.php");
require("../../fs_folders/php_functions/Class/Article.php");
require("../../fs_folders/php_functions/Class/Reset.php");

use App\Reset;
$db = new Database();
$db->connect();
$reset = new Reset();
// replace time() with the time stamp you want to add one day to
//echo $reset->getResetDate('look');
//echo "next reset " . $reset->nextResetDate();

//echo $reset->resetDateNow('look', ' +1 day');

print_r($reset->getRemainingTimeToResetAgain());


