<?php

// Example 1 - Check if user is logged or not

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
		<h2>Check if user is logged in</h2>
		<p style="text-align:center;">
			<?php
			//load_templates();

			if (is_user_logged_in()) {
				echo 'You are logged in';
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