<?php    
require("../../../fs_folders/php_functions/connect.php"); 
require("../../../fs_folders/php_functions/function.php"); 
require("../../../fs_folders/php_functions/Class/Look.php");
require("../../../fs_folders/php_functions/Class/Reset.php");
require("../../../fs_folders/php_functions/myclass.php");
require("../../../fs_folders/php_functions/Class/User.php"); 
$mc   = new myclass();
$db   = new Database(); 
$look = new Look($mc->mno, $db);
$db->connect();     
$pltgno = $_REQUEST['pltgno'];  
if($look->delete_tag($pltgno)) { 
} else {  
} 
$mc->go($_REQUEST['editLook']);