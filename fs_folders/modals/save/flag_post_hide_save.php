 <?php
 /**
  * This is to save the flagged of the users.
  * for look modal, look modal, media modal and member modal.
  */

 /**
  * Issue of selecting the current info in the database where mno and table_name and table_id
  * So while i got that issue i will let user only insert no validation for now
  */


 require ("../../../fs_folders/php_functions/connect.php");
 require ("../../../fs_folders/php_functions/function.php");
 require ("../../../fs_folders/php_functions/library.php");
 require ("../../../fs_folders/php_functions/source.php");
 require ("../../../fs_folders/php_functions/myclass.php");


 /** Initialize flag */
 $mc = new myclass();
 $mc = new myclass();
 $db->connect();
 $_SESSION['mno'] = $mc->get_cookie( 'mno' , 136 );
 $mno = $mc->get_cookie( 'mno' , 136 );

/*
 $comment    = $_GET['comment'];
 $table_id   = $_GET['table_id'];
 $table_name = $_GET['table_name'];
 $action     = $_GET['action'];

 */


$comment                  = ( !empty($_GET['comment']) ) ? intval($_GET['comment']) : "" ;  
$comment                  = ( empty($comment) )               ? $_REQUEST['comment']   : $comment;

$table_id                 = ( !empty($_GET['table_id']) ) ? intval($_GET['table_id']) : "" ;  
$table_id                 = ( empty($table_id) )               ? $_REQUEST['table_id']   : $table_id;

$table_name               = ( !empty($_GET['table_name']) ) ? intval($_GET['table_name']) : "" ;  
$table_name               = ( empty($table_name) )               ? $_REQUEST['table_name']   : $table_name;

$action                   = ( !empty($_GET['action']) ) ? intval($_GET['action']) : "" ;  
$action                   = ( empty($action) )               ? $_REQUEST['action']   : $action;



/** Insert flag */
 if($db->insert(
     'fs_flag',
     array(
         'mno'=> $mno,
         'table_id'=>$table_id,
         'table_name'=>$table_name,
         'comment'=>$comment,
         'action'=>$action
     )
 )) {
     echo "<message><div style='color:green' >This post is now hidden from all of your feeds.</div><message>";
 } else {
     echo "<message><div style='color:red' >Ohps, Something wrong. Failed to hide.</div><message>";
 }
