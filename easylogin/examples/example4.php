<?php

// Example 4 - get user avatar

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
		<h2>Get user avatar</h2>
		<p style="text-align:center;">
			<?php
			//load_templates();

			if (is_user_logged_in()) {

				$user_id = current_user('id');
				
				$avatar = get_user_avatar($user_id);
				
				echo '<img src="'.$avatar.'" width="150" height="150">';

			} else {
				echo '<h2>Not logged in</h2>';
			}
			?>
			<br><br>
			<a href="./">More Examples</a>
		</p>
	</div>
</body>
</html>