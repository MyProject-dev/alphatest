<?php
error_reporting(0);
$params = json_decode(file_get_contents('php://input'), true); 
$signUpCode = $params['signUpCode'];    

?>

<?php if(rand(0,1) == 1): ?> 
	 1
<?php  else: ?>  
    <div class="alert alert-danger" role="alert"> <strong>Oh snap!</strong> Change a few things up and try submitting again. </div> 
<?php endif; ?>
