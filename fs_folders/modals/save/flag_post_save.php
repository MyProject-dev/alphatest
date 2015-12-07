 <?php
 session_start();
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
 $option     = $_GET['option'];
*/


$comment                  = ( !empty($_GET['comment']) ) ? intval($_GET['comment']) : "" ;  
$comment                  = ( empty($comment) )               ? $_REQUEST['comment']   : $comment;


$table_id                 = ( !empty($_GET['table_id']) ) ? intval($_GET['table_id']) : "" ;  
$table_id                 = ( empty($table_id) )               ? $_REQUEST['table_id']   : $table_id;


$table_name               = ( !empty($_GET['table_name']) ) ? intval($_GET['table_name']) : "" ;  
$table_name               = ( empty($table_name) )               ? $_REQUEST['table_name']   : $table_name;


$action                   = ( !empty($_GET['action']) ) ? intval($_GET['action']) : "" ;  
$action                   = ( empty($action) )               ? $_REQUEST['action']   : $action;


$option                   = ( !empty($_GET['option']) ) ? intval($_GET['option']) : "" ;  
$option                   = ( empty($option) )               ? $_REQUEST['option']   : $option;
 
/*
echo "
 comment = $comment <br>
 table_id = $table_id <br>
 table_name = $table_name <br>
 action = $action <br>
 option = $option <br>
";
*/ 

/** Insert flag */
 if($db->insert(
     'fs_flag',
     array(
         'mno'=> $mno,
         'table_id'=>$table_id,
         'table_name'=>$table_name,
         'comment'=>$comment,
         'action'=>$action,
         'option'=>$option
     )
 )) {

     echo "<message><div style='color:green' >You successfully flagged this post.</div><message>";


     /** setup message here */
     $message = 'Your post is being flagged please visit our posting rules to delete <a hre="http://google.com" >google.com </a>';




     /** send notification with the owner of this modal */
     $mc->set_session_notification($mno, $table_name, $table_id, 'flagged', '', '',  'flagged');
     //     $_SESSION['noti_action'] = 'flagged your post, please visit posting rule';
     //     $_SESSION['noti_type']  = 'flagged';
     //     $_SESSION['noti_link']  = 'google.com';
     $mc->send_notification_to_follower($_SESSION['mno']);


     /** To add flag message */
     //get owner of the modal
     $mno1     = $mc->get_modal_owner( $table_name , $table_id);
     // this is to be change to no more insert only the returned msgno from the chat.php need to be session here to save time loading
    // $msgno    =  $mc->fs_message(    array( 'type'=>'get-or-add-message-id',  'mno' => $mno,  'mno1' => $mno1  ) );
     // insert message
     $response =  $mc->posted_modals_comment_Query (   array( 'comment_query'=>'comment-insert'  ,   'mno'=>$mno, 'comment'=>$message, 'table_name'=>'fs_message', 'table_id'=>$msgno)  );
     // update time and current user sent a message
     $response = $mc->update_fs_table_auto( null ,  array( 'mno2'=> $mno1 , 'date'=>$mc->date_time , 'status' => 1 , 'idname'=>'msgno' , 'idval'=>$msgno ) , 'fs_message' );
    // require('http://localhost/fs/new_fs/alphatest/fs_folders/modals/general_modals/gen.modals.func.php?action=messaging&type=insert-message&mno1=133&message=flagged message');

 } else {
     echo "<message><div style='color:red' >Ohps, Something wrong. Failed to flag.</div><message>";
 }
