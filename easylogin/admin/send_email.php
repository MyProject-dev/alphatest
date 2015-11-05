<?php if (!defined('EL_ADMIN')) exit('No direct script access allowed'); 

if (!empty($_POST['to']) && !empty($_POST['subject']) && !empty($_POST['message']) ) {

	$to = $EL->escape($_POST['to']);
	$subject = $EL->escape($_POST['subject']);
	
	if (strchr($to, ';'))
		$to = explode(';', $to);

	if (is_array($to)) {
		foreach ($to as $key => $sendTo)
			if ($EL->valid_email($sendTo))
				$EL->send_email($sendTo, $subject, $_POST['message']);
	}
	elseif ($EL->valid_email($to)) {
		$EL->send_email($to, $subject, $_POST['message'] );
	}
}
?>