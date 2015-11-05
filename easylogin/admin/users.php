<?php if (!defined('EL_ADMIN')) exit('No direct script access allowed'); ?>
<h2 class="page-header">Users</h2>

<?php
$Admin = new Admin();

if (isset($_POST['action']) && $_POST['action'] == 'delete_user') {
	if (is_numeric($_POST['user_id']) && !empty($_POST['user_id']))
		$Admin->delete_user($_POST['user_id']);
	die();
}

$users = $Admin->get_users();
?>

<script type="text/javascript" src="assets/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="assets/js/DT_bootstrap.js"></script>
<script type="text/javascript">
	$(function() {
    	$('#users').dataTable({
      		"sDom": "<'row-fluid fix-dt'<'span6'l><'span6'f>r>t<'row-fluid'<'span6'i><'span6'p>>",
      		"sPaginationType": "bootstrap",
      		"oLanguage": { "sLengthMenu": "_MENU_ records per page" },
      		"aoColumns": [
        		{ "bSearchable": false, "bSortable": true },
        		null, null, null, null, null,
        		{ "bSearchable": false , "bSortable": false },
        		null, 
        		{ "bSearchable": false , "bSortable": false },
      		],
      		"aaSorting": [[ 7, "desc" ]]
    	});
  	});
</script>

<table class="table table-hover table-striped table-bordered" id="users">
  <thead>
    	<tr>
	    <th></th>
			<th>Username</th>
			<th>Email</th>
      		<th>Last IP</th>
			<th>Role</th>
			<th>Status</th>
			<th>Connected</th>
			<th>Joined</th>
			<th>Actions</th>
    	</tr>
  	</thead>
  	<tbody>
  	<?php
  		if (!empty($users)) {
  			foreach ($users as $key => $user) {
  				  $fb = $EL->get_usermeta($user->id, 'facebook');
				    $go = $EL->get_usermeta($user->id, 'google');
          	$tw = $EL->get_usermeta($user->id, 'twitter');
          	$last_ip = $EL->get_usermeta($user->id, 'last_ip');
  				
  				echo '<tr>
  					<td data-id="'.$user->id.'">'. $user->id .'</td>
  					<td><a href="'.$EL->config_item('home_url').'profile.php?uid='.$user->id.'">'. $user->username .'</a></td>
  					<td><a href="mailto:'. $user->email .'">'. $user->email .'</td>
            		<td>'.$last_ip.'</td>
  					<td>'; 
  					switch ($user->role) {
  						case 'user': echo '<span class="label label-default">user</span>'; break;
  						case 'admin': echo '<span class="label label-info">admin</span>'; break;
  						default: echo '<span class="label label-default">'.$user->role.'</span>'; break;
  					}
  					echo'</td>
  					<td>';
  					switch ($user->status) {
  						case 1: echo '<span class="label label-success">activated</span>'; break;
  						case 2: echo '<span class="label label-important">disabled</span>'; break;
  						default: echo '<span class="label label-warning">unactivated</span>'; break;
  					}
  					echo '</td>
  					<td>';
  					if ($fb)
		    	        echo '<a href="http://www.facebook.com/profile.php?id='.$fb.'" title="Account connected to Facebook"><i class="icon-fb"></i></a>';
  					if ($go)
  						echo '<a href="https://profiles.google.com/'.$go.'"  title="Account connected to Google+"><i class="icon-go"></i></a>';
         		   	if ($tw)
              			echo ' <a href="https://twitter.com/account/redirect_by_id?id='.$tw.'"  title="Account connected to Twitter"><i class="icon-tw"></i></a>';
  					echo'</td>
  					<td>'. date('M j, Y', strtotime($user->registered)) .'</td>
  					<td>
  						<a href="?page=edit_user&id='.$user->id.'" title="Edit user"><i class="glyphicon glyphicon-edit"></i></a>
              			<a href="#" title="Send Email" onclick="composeEmail(\''.$user->email.'\');"><i class="glyphicon glyphicon-envelope"></i></a>
  						<a href="#" onclick="confirmDeleteUser(\''.$user->id.'\', \''.$user->username.'\');" title="Delete user"><i class="glyphicon glyphicon-trash"></i></a>
  					</td>
  				</tr>';
  			}
  		}
  	?>
  	</tbody>
</table>
<br clear="all">

<div class="modal fade" id="deleteUserModal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Confirm action</h4>
			</div>
			<div class="modal-body">
				<input type="hidden" id="delete_user_id" value="">
          		<p>Are you sure you want to delete user <strong id="username"></strong> ?</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">No</button>
         		<button type="button" class="btn btn-danger" onclick="deleteUser( document.getElementById('delete_user_id').value );">Yes</button>
			</div>
		</div>
	</div>
</div>