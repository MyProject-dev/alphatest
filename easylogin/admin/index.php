<?php
define('EL_ADMIN', true);

require_once('../includes/load.php');
$EL = EasyLogin::getInstance();

if (isset($_GET['logout'])) {
	$EL->signout();
	header('Location: login.php');
}

// Check if is logged
if (!$EL->is_logged()) {
	header('Location: login.php');
}

// Check if is admin
if ( $EL->get_current_user('role') != 'admin' ) {
	die('<h2>You do not have sufficient permissions to access this page</h2>');
}

if (!isset($_GET['page'])) {
	$_GET['page'] = 'dashboard';
}

require_once('includes/Admin.class.php');

function active_menu($page) {
	return ($_GET['page'] == $page) ? ' class="active"' : '';
}

?>
<!DOCTYPE html>
<html lang="en">
	<head>
    	<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<title>EasyLogin Admin</title>
    	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
    	<link rel="stylesheet" href="assets/css/style.css">
    	<script src="assets/js/jquery-1.11.0.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/admin.js"></script>
  	</head>
  	<body>
 	<div class="navbar navbar-inverse navbar-fixed-top">
    	<div class="container">
        	<div class="navbar-header">
         		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            		<span class="sr-only">Toggle navigation</span>
            		<span class="icon-bar"></span>
            		<span class="icon-bar"></span>
            		<span class="icon-bar"></span>
          		</button>
          	<a href="<?php echo $EL->config_item('home_url'); ?>" class="navbar-brand" title="Back Home">&larr;</a>
        	</div>
        	<div class="navbar-collapse collapse">
	          	<ul class="nav navbar-nav">
	            	<li<?php echo active_menu('dashboard'); ?>><a href="?page=dashboard">Dashboard</a></li>
	            	<li<?php echo active_menu('users'); ?>><a href="?page=users">Users</a></li>
	            	<li<?php echo active_menu('add_user'); ?>><a href="?page=add_user">Add User</a></li>
	            	<li<?php echo active_menu('roles'); ?>><a href="?page=roles">Roles</a></li>
	            	<li><a href="#" data-toggle="modal" data-target="#composeModal">Compose Email</a></li>
	          	</ul>
	          	<ul class="nav navbar-nav pull-right">
	          		<li><a href="?logout">Logout</a></li>
	          	</ul>
        	</div>
      	</div>
    </div>
    <div class="container">
	<?php
	switch ($_GET['page']) {
		case 'dashboard':
			require_once('dashboard.php');
		break;
		
		case 'users':
			require_once('users.php');
		break;

		case 'add_user':
			require_once('add_user.php');
		break;

		case 'edit_user':
			require_once('edit_user.php');
		break;

		case 'roles':
			require_once('roles.php');
		break;

		case 'send_email':
			require_once('send_email.php');
		break;

		default:
			echo 'Page not found.';
		break;
	}
	?>
	</div>

	<!-- Compose email modal -->
	<div class="modal fade" id="composeModal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Compose Email</h4>
				</div>
				<div class="modal-body">
					<style type="text/css"> #subject, #to, #message {width: 515px;} </style>
		      		<input type="text" id="to" class="form-control" placeholder="To"><br>
				    <input type="text" name="subject" id="subject" class="form-control" placeholder="Subject"><br>
				    <textarea id="message" style="height: 150px;" class="form-control" placeholder="Message"></textarea><br>
				    <em>You can add multiple emails separated with semicolon (;)</em>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
	        		<button type="button" class="btn btn-primary" onclick="sendEmail();">Send</button>
				</div>
			</div>
		</div>
	</div>
	</body>
</html>