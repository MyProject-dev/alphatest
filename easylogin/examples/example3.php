<?php

// Example 3 - get user data

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
	<div id="container" style="max-width: 900px;">
		<h2>Dump user data</h2>
		<?php
		//load_templates();

		if (is_user_logged_in()) {
			$user_id = current_user('id');

			$userdata = get_userdata($user_id);
			
			// For demo purposes
			unset($userdata['data']['password']);

			echo '<pre>';
			print_r($userdata);
			echo '</pre>';

		} else {
			echo '<h2>Not logged in</h2>';
		}
		?>
		<div style="text-align:center;">
			<a href="./">More Examples</a>
		</div>
	</div>
</body>
</html>