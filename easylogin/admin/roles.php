<?php if (!defined('EL_ADMIN')) exit('No direct script access allowed'); ?>
<h2 class="page-header">Roles</h2>

<?php
require_once('includes/Options.class.php');
$Options = new Options();
$roles = $Options->get('roles');
if ($roles) {
	$roles = json_decode($roles, true);
}

if (isset($_POST['action']) && $_POST['action'] == 'delete_role') {
	if ($roles) {
		$key = array_search($_POST['role'], $roles);
		print_r($key);
		unset($roles[$key]);
		$Options->update('roles', json_encode( array_values($roles) ));
	}
	die();
}

if (isset($_POST['add'])) {
	$role = $EL->escape($_POST['role']);
	if (!empty($role) && !preg_match('/[^a-z_\-0-9]/i', $role)) {
		if (!isset($roles[$role])) {
			$roles[] = $role;
			$Options->update('roles', json_encode($roles));
			header('Location: index.php?page=roles');
		} else 
			$error = '<p class="alert alert-danger">This role already exists.</a>';
	} else
		$error = '<p class="alert alert-danger">Enter a valid role name: letters numbers and underscores.</a>';
}

?>

<form action="" method="POST" class="pull-left">
	<div class="form-group">
		<label for="role">Role</label>
		<input type="text" name="role" id="role" class="form-control" size="30">
	</div>
	<input type="submit" name="add" class="btn btn-primary btn-small" value="Add Role">
</form>

<?php if ($roles) { ?>
<table class="table pull-left" id="roles">
  	<thead>
    	<tr>
			<th>Roles</th>
			<th width="16%"></th>
    	</tr>
  	</thead>
  	<tbody>
	<?php 
		foreach ($roles as $role) {
			echo '<tr>
				<td>'.$role.'</td>
				<td><a href="#'.$role.'" class="delete-role" title="Delete role"><i class="glyphicon glyphicon-trash"></i></a></td>
			</tr>';
		}
	?>	
  	</tbody>
</table>
<?php } ?>
<br clear="all">
<br>
<p><b>Note:</b><em> Use current_user('role') to get the role of the logged user.</em></p>

<style>
	table.table {
		max-width: 300px!important;
		margin-left: 70px;
	}
</style>