<?php 
require ("../../../fs_folders/php_functions/connect.php");
require ("../../../fs_folders/php_functions/function.php");
require ("../../../fs_folders/php_functions/library.php");
require ("../../../fs_folders/php_functions/source.php");
require ("../../../fs_folders/php_functions/myclass.php");
require ("../../../fs_folders/php_functions/Class/Brand.php");
require ("../../../fs_folders/php_functions/Class/User.php");


use App\User;

$mc = new myclass();
$db = new Database();
$db->connect();

$userObject  = new User($mc->mno, $db);

echo "</div>";
?>

<?php


echo "This good ";
/**
 * Update the user information
 */
if($userObject->updateInfo(
    array(
        'tlog'=>5,
        'status'=>2
    ),
    "mno = $mc->mno"
)){
    print('about updated  <br>');
} else {
    print('about not added <br>');
}
?>