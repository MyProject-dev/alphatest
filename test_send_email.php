<?php 
error_reporting(0); 
require ('fs_folders/php_functions/function.php');
require ('fs_folders/php_functions/myclass.php');
require ('fs_folders/modals/Server/class/Email.php');

$db->connect();
 $mc = new myclass();
$email = new Email($mc->mno, $db);


//if($email->sendInviteEmail1('brainOfFashion@gmail.com', 'mrjesuserwinsuarez@gmail.com', 'Invitation', 1, 'Jesus')){
//    echo "Email successfully sent <br>";
//} else {
//    echo "Email failed to sent <br>";
//}
//
//
//if($email->sendInviteEmail2('brainOfFashion@gmail.com', 'mrjesuserwinsuarez@gmail.com', 'Invitation', 1, 'Jesus')){
//    echo "Email successfully sent <br>";
//} else {
//    echo "Email failed to sent <br>";
//}



if($email->sendInviteEmail3('brainOfFashion@gmail.com', 'mrjesuserwinsuarez@gmail.com', 'Invitation', 1, 0, 'Jesus')){
    echo "Email successfully sent <br>";
} else {
    echo "Email failed to sent <br>";
}

if($email->sendInviteEmail3('brainOfFashion@gmail.com', 'mrjesuserwinsuarez@gmail.com', 'Invitation', 1, 1, 'Jesus')){
    echo "Email successfully sent <br>";
} else {
    echo "Email failed to sent <br>";
}

if($email->sendInviteEmail3('brainOfFashion@gmail.com', 'mrjesuserwinsuarez@gmail.com', 'Invitation', 1, 2, 'Jesus')){
    echo "Email successfully sent <br>";
} else {
    echo "Email failed to sent <br>";
}

