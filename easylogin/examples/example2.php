<?php

// Example 2 - Check if user has a specific role

require_once '../includes/load.php';

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>EasyLogin v1.3</title>
	<link rel="stylesheet" href="../assets/css/demo.css">
	<style>h2{ margin: 0px }</style>
</head>
<body>
	<div id="container">
		<h2>Check user role</h2>
		<p style="text-align:center;">
			<?php
			//load_templates();

			if (is_user_logged_in()) {
				if ( current_user('role') == 'admin' ) {
					echo 'Your account has the <strong>admin</strong> role';
				} else {
					echo 'Your account has the <strong>'.current_user('role').'</strong> role';
				}
			} else {
				echo 'Not logged in';
			}
			?>
			<br><br>
			<a href="./">More Examples</a>
		</p>
	</div>
</body>
</html>