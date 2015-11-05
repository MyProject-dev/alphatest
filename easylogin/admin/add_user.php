<?php if (!defined('EL_ADMIN')) exit('No direct script access allowed'); ?>
<h2 class="page-header">Add User</h2>
<?php
require_once('includes/Options.class.php');
$Options = new Options();
$roles = $Options->get('roles');
if ($roles) {
	$roles = json_decode($roles, true);
}

$Admin = new Admin();

if (isset($_POST['add'])) {
	$data = array(
		'username'     => $_POST['username'],
		'email'        => $_POST['email'],
		'role'         => $_POST['role'],
		'name'         => $_POST['name'],
		'url'          => $_POST['url'],
		'password'     => $_POST['password']
	);

	if (!empty($_POST['send_email'])) {
		$data['send_email'] = true;
	}

	if (!$Admin->add_user($data)) {
		echo '<div class="alert alert-danger">There are some errors: <br><ul class="form-errors">';
		foreach ($Admin->errors as $key => $error) {
			echo "<li>$error</li>";
		}
		echo '</ul></div>';
	} else {
		header('Location: index.php?page=add_user&m=1');
	}
}
if (isset($_GET['m'])) {
	echo '<div class="alert alert-success"><a href="?page=add_user" class="close" data-dismiss="alert">×</a> The new user was added.</div>';
}
?>
<form action="index.php?page=add_user" method="post" id="settings">
	<div class="form-group">
		<label for="username">Username</label>
		<input type="text" name="username" id="username" class="form-control" value="<?php echo $Admin->set_value('username'); ?>">
	</div>
	<div class="form-group">
		<label for="email">Email</label>
		<input type="text" name="email" id="email" class="form-control" value="<?php echo $Admin->set_value('email'); ?>">
	</div>
	<div class="form-group">
		<label for="role">User Role</label>
		<select name="role" id="role" class="form-control">
			<?php
			if ($roles) {
				foreach ($roles as $role) {
					echo '<option value="'.$role.'" '.($role==$Admin->set_value('role') ? 'selected' : '' ).'>'.$role.'</option>';
				}
			}
			?>
		</select>
	</div>
	<div class="form-group">
		<label for="name">Name</label>
		<input type="text" name="name" id="name" class="form-control" value="<?php echo $Admin->set_value('name'); ?>">
	</div>
	<div class="form-group">
		<label for="url">Website</label>
		<input type="text" name="url" id="url" class="form-control" value="<?php echo $Admin->set_value('url'); ?>">
	</div>
	<div class="form-group">
		<label for="password">Password</label>
		<input type="password" name="password" id="password" class="form-control" value="<?php echo $Admin->set_value('password'); ?>">
	</div>
	<div class="checkbox">
		<label> <input type="checkbox" name="send_email" id="send_email"> Send this password to the new user by email.</label>
	</div>
	<br>
	<input type="submit" name="add" class="btn btn-primary" value="Add User">
</form>

<style>
	.form-control {
		max-width: 350px;
	}
</style>