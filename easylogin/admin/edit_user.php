<?php if (!defined('EL_ADMIN')) exit('No direct script access allowed'); ?>
<h1 class="title">Edit User</h1>
<?php
require_once('includes/Options.class.php');
$Options = new Options();
$roles = $Options->get('roles');
if ($roles) {
	$roles = json_decode($roles, true);
}

$custom_fields = $EL->config_item('custom_fields');

if (!empty($_GET['id']) && is_numeric($_GET['id'])) {
	if (isset($_POST['save'])) {
		$user_id = $_GET['id'];
		$data = array(
			'username'     => $_POST['username'],
			'name'         => $_POST['name'],
			'email'        => $_POST['email'],
			'url'          => $_POST['url'],
			'role'         => $_POST['role'],
			'status'       => $_POST['status']
		);

		if ($_POST['password'] == $_POST['confirm_password']) {
			$data['password'] = $_POST['password'];
		}

		if ($custom_fields) {
			foreach ($custom_fields as $field) {
				$data['usermeta'][$field['name']] = isset($_POST[$field['name']]) ? $_POST[$field['name']] : 0;
			}
		}

		$EL->update_userdata($user_id, $data);
	}

	$user = $EL->get_userdata( $_GET['id'] );

	if ($user) {
		extract($user['data']);
		?>
		<form action="" method="post">
			<div class="form-group">
				<label for="username">Username</label>
				<input type="text" name="username" id="username" class="form-control" value="<?php echo $username; ?>">
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input type="text" name="email" id="email" class="form-control" value="<?php echo $email; ?>">
			</div>
			<div class="form-group">
				<label for="status">Account Status</label>
				<select name="status" id="status" class="form-control">
					<option value="1" <?php echo ($status == 1) ? 'selected' : '' ?>>Activated</option>
					<option value="0" <?php echo ($status != 1 && $status != 2) ? 'selected' : '' ?>>Unactivated</option>
					<option value="2" <?php echo ($status == 2) ? 'selected' : '' ?>>Disabled</option>
				</select>
			</div>
			<div class="form-group">
				<label for="role">User Role</label>
				<select name="role" id="role" class="form-control">
					<?php
					if ($roles) {
						foreach ($roles as $r) {
							echo '<option value="'.$r.'" '.($r == $role ? 'selected' : '' ).'>'.$r.'</option>';
						}
					}
					?>
				</select>
			</div>
			<div class="form-group">
				<label for="name">Full Name</label>
				<input type="text" name="name" id="name" class="form-control" value="<?php echo $name; ?>">
			</div>
			<div class="form-group">
				<label for="url">Website</label>
				<input type="text" name="url" id="url" class="form-control" value="<?php echo $url; ?>">
			</div>
			<p> <em>If you want to change the password complete the following two fields otherwhise leave them blank. </em> </p>
			<div class="form-group">
				<label for="password">New password</label>
				<input type="password" name="password" id="password" class="form-control" value="">
			</div>
			<div class="form-group">
				<label for="confirm_password">Repeat new password</label>
				<input type="password" name="confirm_password" id="confirm_password" class="form-control">
			</div>
			<?php
            if ($custom_fields) {
            	echo '<h3>Custom Fields</h3>';
                foreach ($custom_fields as $field) {
                	$meta  = $EL->get_usermeta( $_GET['id'], $field['name'] );
                	echo '<div class="'.($field['type']=='checkbox'?'checkbox':'form-group').'">';
            		switch ( $field['type'] ) {
            			case 'text':
            				echo '<label for="'. $field['name'] .'">'. $field['label'] .'</label>
                    			<input type="text" id="'. $field['name'] .'" name="'. $field['name'] .'" class="form-control" value="'.$meta.'">';
            			break;
            			case 'textarea':
            				echo '<label for="'. $field['name'] .'">'. $field['label'] .'</label>
                    			<textarea id="'. $field['name'] .'" name="'. $field['name'] .'" class="form-control" style="width: 300px;">'.$meta.'</textarea><br>';
            			break;
            			case 'select':
            				echo '<label for="'. $field['name'] .'">'. $field['label'] .'</label>
                    			<select id="'. $field['name'] .'" name="'. $field['name'] .'" class="form-control">';
                    		foreach ($field['options'] as $key => $value) {
                    			echo '<option value="'.$key.'" '.( $meta == $key ? 'selected' : '' ).'>'.$value.'</option>';
                    		}
                    		echo'</select>';
            			break;
            			case 'checkbox':
            				echo '<label for="'. $field['name'] .'">
                    			<input type="checkbox" id="'. $field['name'] .'" name="'. $field['name'] .'" value="1" '.($meta == '1' ? 'checked' : '').'> '. $field['label'] .'
                    		</label>';
            			break;
            		}
                	echo '</div>';
                }
            }
			?>
			<input type="submit" name="save" class="btn btn-primary" value="Save Changes">
		</form>
	<?php
	}
	else echo '<div class="alert alert-error">User not found.</div> <a href="?page=users" class="btn btn-small">&larr; Go Back</a>';
}
else echo '<div class="alert alert-error">User not found.</div> <a href="?page=users" class="btn btn-small">&larr; Go Back</a>';
?>

<style>
	.form-control {
		max-width: 350px;
	}
</style>