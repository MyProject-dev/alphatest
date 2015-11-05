<?php

require("../../fs_folders/php_functions/function.php");
require("../../fs_folders/php_functions/Database/Database.php");
require("../../fs_folders/php_functions/Class/Invited.php");

use App\Invited;
$db = new Database();
$db->connect();
$mno = 133;
$bno = 23;


$invited = new Invited($db);



$invited->resetData();
$invited->removeInvalidEmail();





