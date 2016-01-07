<?php
/**
 * Created by PhpStorm.
 * User: Jesus
 * Date: 9/23/2015
 * Time: 5:07 PM
 */
 
echo "<div style='display:block' >";
require ("fs_folders/php_functions/connect.php");
require ("fs_folders/php_functions/connect1.php");
require ("fs_folders/php_functions/function.php");
require ("fs_folders/php_functions/library.php");
require ("fs_folders/php_functions/source.php");
require ("fs_folders/php_functions/myclass.php");
require ("fs_folders/php_functions/Class/User.php");


error_reporting(1);

use App\User;

$mc = new myclass();
$db = new Database();
$db->connect();
$userObject  = new User($mc->mno, $db);

$cid       = $_GET['cid'];

$cid1 = explode('a',$cid);
$mno = $cid1[0];
echo "</div>";
?>
<?php
    if($mc->mno != $mno) {
        echo "<script>alert('User not being confirmed because the confirmation code is not owned by the current user logged in.')</script>";
        echo "<script>document.location = 'home';</script>";
    }
?>
<?php
/**
 * Update the user information
 */
if($userObject->updateInfo(
    array(
        'status'=>1
    ),
    "mno = $mno"
)){ 
    echo "<script>alert('You successfully confirmed your email.')</script>";
} else {

    echo "<script>alert('Ohpss! something wrong.')</script>";
}
?>
 
 Redirecting home page.
 
<script>
    document.location = 'home';
</script>