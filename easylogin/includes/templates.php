<?php
$EL = EasyLogin::getInstance();

$script_url = $EL->config_item('script_url');
$connect_url = $script_url . 'connect.php?method=';

$connect_with = array(
	'facebook' => $EL->api_key('facebook/app_id'),
	'twitter'  => $EL->api_key('twitter/api_key'),
	'google'   => $EL->api_key('google/client_id')
);
 

$script_url = 'easylogin/'
?>

<!-- <link rel="stylesheet" href="<?php echo $script_url; ?>assets/css/easylogin.css">
<link rel="stylesheet" href="<?php echo $script_url; ?>assets/css/imgPicker.css">
 -->



<link rel="stylesheet" href="<?php echo $script_url; ?>assets/css/easylogin.css">
<link rel="stylesheet" href="<?php echo $script_url; ?>assets/css/imgPicker.css">


<script src="<?php echo $script_url; ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo $script_url; ?>assets/js/imgPicker.min.js"></script>
<script src="<?php echo $script_url; ?>assets/js/easylogin.min.js"></script>

<script>
	EasyLogin.config = {
		script_url: '<?php echo $script_url; ?>',
		ajax_url: '<?php echo $script_url; ?>includes/ajax.php'
	};
</script>
 
<?php if (!$EL->is_logged()): ?>
<!-- Sign in Modal -->
<div class="modal fade easylogin" id="EL_signin" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Sign in</h4>
			</div>
			<form action="" method="POST" class="easylogin-form">
			<div class="modal-body">
				<div class="alert alert-warning">
					<button type="button" class="close dismiss">&times;</button><span></span>
				</div>
				<div class="form-group connect-with">
					<div class="info">Connect with a social network</div>

					
					<?php //if ($connect_with['facebook']): ?>
						<a href="<?php echo $connect_url.'facebook'; ?>" class="connect facebook" title="Connect with Facebook">Facebook</a>
			        <?php //endif; ?>
			        <?php if ($connect_with['google']): ?> 
			        	<a href="<?php echo $connect_url.'google'; ?>" class="connect google" title="Connect with Google">Google</a>
			        <?php endif; ?>
			        <?php if ($connect_with['twitter']): ?>
			        	<a href="<?php echo $connect_url.'twitter'; ?>" class="connect twitter" title="Connect with Twitter">Twitter</a>
			    	<?php endif; ?>
				</div>
				<div class="info">Sign in with your email address</div>
				<div class="form-group">
					<label>Email or Username <br>
						<input type="text" name="username" class="form-input">
					</label>
					<!-- <input type="text" name="username" class="form-input" placeholder="Enter your username or email address"> -->
				</div>	
				<div class="form-group">
					<label>Password <br>
						<input type="password" name="password" class="form-input">
					</label>
					<!-- <input type="password" name="password" class="form-input" placeholder="Enter your password"> -->
				</div>
				<div class="form-group">
					<label style="font-weight: normal;">
						<input type="checkbox" name="remember" value="1">
						Remember my name
					</label>
				</div>
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-primary">Sign in</button>
				<span class="ajax-loader"></span>
				<div class="pull-right align-right">
					<a href="#" data-toggle="modal" data-target="#EL_forgot_pass">Forgot Password</a><br>
					<a href="#" data-toggle="modal" data-target="#EL_resend_activation">Resend activation email</a>
				</div>
			</div>
			<input type="hidden" name="action" value="signin">
			</form>
		</div>
	</div>
</div>

<!-- Sign up Modal -->
<div class="modal fade easylogin" id="EL_signup" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Sign up</h4>
			</div>
			<form action="" method="POST" class="easylogin-form">
			<div class="modal-body">
				<div class="alert alert-warning">
					<button type="button" class="close dismiss">&times;</button><span></span>
				</div>
				<div class="form-group connect-with">
					<div class="info">Connect with a social network</div>
					<?php// if ($connect_with['facebook']): ?>
						<a href="<?php echo $connect_url.'facebook'; ?>" class="connect facebook" title="Connect with Facebook">Facebook</a>
			        <?php //endif; ?>
			        <?php if ($connect_with['google']): ?>
			        	<a href="<?php echo $connect_url.'google'; ?>" class="connect google" title="Connect with Google">Google</a>
			        <?php endif; ?>
			        <?php if ($connect_with['twitter']): ?>
			        	<a href="<?php echo $connect_url.'twitter'; ?>" class="connect twitter" title="Connect with Twitter">Twitter</a>
			    	<?php endif; ?>
				</div>
				<div class="info">Sign up with your email address</div>
				<?php if ($EL->config_item('require_username')): ?>
				<div class="form-group">
					<label>Username <br>
						<input type="text" name="username" class="form-input">
					</label>
					<!-- <input type="text" name="username" class="form-input" placeholder="Enter your username"> -->
				</div>	
				<?php endif; ?>
				<div class="form-group">
					<label>Email <br>
						<input type="text" name="email" class="form-input">
					</label>
					<!-- <input type="text" name="email" class="form-input" placeholder="Enter your email address"> -->
				</div>
				<?php if ($EL->config_item('require_name')): ?>
				<div class="form-group">
					<label>Full Name <br>
						<input type="text" name="name" class="form-input">
					</label>
					<!-- <input type="text" name="name" class="form-input" placeholder="Enter your full name"> -->
				</div>
				<?php endif; ?>
				<div class="form-group">
					<label>Password <br>
						<input type="password" name="password" class="form-input">
					</label>
					<!-- <input type="text" name="password" class="form-input" placeholder="Enter your password"> -->
				</div>
				<?php if ($EL->config_item('require_captcha')): ?>
				<div class="form-group recaptcha-group"></div>
				<?php endif; ?>
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-primary">Sign up</button>
				<span class="ajax-loader"></span>
				<div class="pull-right align-right">
					<br>
					<a href="#" data-toggle="modal" data-target="#EL_signin">Back to Sign in</a><br>
				</div>
			</div>
			<input type="hidden" name="action" value="signup">
			</form>
		</div>
	</div>
</div> 
<!-- Sign up complete Modals -->
<div class="modal fade easylogin" id="EL_signup_complete1" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Confirm your account !</h4>
			</div>
			<div class="modal-body">
				<p>We emailed you to make sure we have the right email address.</p>
    			<p>Once you click the activation link in that email, you`ll be ready to sign in.</p>
			</div>
		</div>
	</div>
</div>
<div class="modal fade easylogin" id="EL_signup_complete2" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Sign up complete !</h4>
			</div>
			<div class="modal-body">
				<p>Your account has been created !</p>
				<p>You can <a href="#" data-toggle="modal" data-target="#EL_signin">sign in</a> now.</p>
			</div>
		</div>
	</div>
</div> 
<!-- Forgot password Modal -->
<div class="modal fade easylogin" id="EL_forgot_pass" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Forgot Password</h4>
			</div>
			<form action="" method="POST" class="easylogin-form">
			<div class="modal-body">
				<div class="alert alert-warning">
					<button type="button" class="close dismiss">&times;</button><span></span>
				</div>
				<div class="form-group">
					<label>Email <br>
						<input type="text" name="email" class="form-input">
					</label>
					<!-- <input type="text" name="email" class="form-input" placeholder="Enter your email address"> -->
				</div>
				<?php if ($EL->config_item('require_captcha')): ?>
				<div class="form-group recaptcha-group"></div>
				<?php endif; ?>
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-primary">Send instructions</button>
				<span class="ajax-loader"></span>
				<div class="pull-right align-right">
					<br>
					<a href="#" data-toggle="modal" data-target="#EL_signin">Back to Sign in</a><br>
				</div>
			</div>
			<input type="hidden" name="action" value="forgot_pass">
			</form>
		</div>
	</div>
</div>
<div class="modal fade easylogin" id="EL_recover_sent" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Forgot Password</h4>
			</div>
			<div class="modal-body">
				<p>A recover link has been sent to your email address.</p>
				<p>Once you click that link you`ll be able to change your password.</p>
			</div>
		</div>
	</div>
</div>

<!-- Resend activation email Modal -->
<div class="modal fade easylogin" id="EL_resend_activation" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Activation email</h4>
			</div>
			<form action="" method="POST" class="easylogin-form">
			<div class="modal-body">
				<div class="alert alert-warning">
					<button type="button" class="close dismiss">&times;</button><span></span>
				</div>
				<div class="form-group">
					<label>Email <br>
						<input type="text" name="email" class="form-input">
					</label>
					<!-- <input type="text" name="email" class="form-input" placeholder="Enter your email address"> -->
				</div>
				<?php if ($EL->config_item('require_captcha')): ?>
				<div class="form-group recaptcha-group"></div>
				<?php endif; ?>
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-primary">Send</button>
				<span class="ajax-loader"></span>
				<div class="pull-right align-right">
					<br>
					<a href="#" data-toggle="modal" data-target="#EL_signin">Back to Sign in</a><br>
				</div>
			</div>
			<input type="hidden" name="action" value="resend_activation">
			</form>
		</div>
	</div>
</div>
<div class="modal fade easylogin" id="EL_recover_sent" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Forgot Password</h4>
			</div>
			<div class="modal-body">
				<p>A recover link has been sent to your email address.</p>
				<p>Once you click that link you`ll be able to change your password.</p>
			</div>
		</div>
	</div>
</div>

<!-- Activate completed Modal -->
<div class="modal fade easylogin" id="EL_account_activated" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Account activated</h4>
			</div>
			<div class="modal-body">
				<p>Your account has been activated !</p>
				<p>You can <a href="#" data-toggle="modal" data-target="#EL_signin">sign in</a> now.</p>
			</div>
		</div>
	</div>
</div>

<!-- Recover password Modal -->
<div class="modal fade easylogin" id="EL_recover_pass" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Change Password</h4>
			</div>
			<form action="" method="POST" class="easylogin-form">
			<div class="modal-body">
				<div class="alert alert-warning">
					<button type="button" class="close dismiss">&times;</button><span></span>
				</div>
				<div class="form-group">
					<label>New Password <br>
						<input type="password" name="password" class="form-input">
					</label>
				</div>	
				<div class="form-group">
					<label>Confirm Password <br>
						<input type="password" name="confirm_password" class="form-input">
					</label>
				</div>
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-primary">Change Password</button>
				<span class="ajax-loader"></span>
			</div>
			<input type="hidden" name="action" value="recover_pass">
			<input type="hidden" name="recover_key">
			</form>
		</div>
	</div>
</div>

<?php else: ?>

<!-- My account Modal -->
<div class="modal fade easylogin" id="EL_account" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">My account</h4>
			</div>
			<form action="" method="POST" class="easylogin-form">
			<div class="modal-body">
				
				<ul class="nav nav-pills">
					<li class="active"><a href="#account_general" data-toggle="tab">General</a></li>
					<?php if($EL->config_item('custom_fields')): ?>
					<li><a href="#account_settings" data-toggle="tab">Settings</a></li>
					<?php endif; ?>
					<li><a href="#account_password" data-toggle="tab">Password</a></li>
					<li><a href="#account_avatar" data-toggle="tab">Avatar</a></li>
				</ul>

				<div class="alert alert-warning">
					<button type="button" class="close dismiss">&times;</button><span></span>
				</div>

				<div class="tab-content">
					<div class="tab-pane active" id="account_general">
						<div class="form-group">
							<label>Email <br>
								<input type="text" name="email" class="form-input">
							</label>
						</div>
						<?php if ($EL->config_item('require_name')): ?>
						<div class="form-group">
							<label>Full Name <br>
								<input type="text" name="name" class="form-input">
							</label>
						</div>
						<?php endif; ?>
						<div class="form-group">
							<label>Website <br>
								<input type="text" name="url" class="form-input">
							</label>
						</div>
					</div>
					<div class="tab-pane" id="account_settings">
						
					</div>
					<div class="tab-pane" id="account_password">
						<div class="info">If you would like to change the password type a new one.</div>
						<div class="form-group">
							<label>Password <br>
								<input type="password" name="password" class="form-input">
							</label>
						</div>
						<div class="form-group">
							<label>Confirm New Password <br>
								<input type="password" name="confirm_password" class="form-input">
							</label>
						</div>
					</div>
					<div class="tab-pane" id="account_avatar">
						<div class="pull-left">
							<div class="info">Chose how your avatar is displayed.</div>
							<label><input type="radio" name="avatartype" value="gravatar"> Gravatar</label>
							<label><input type="radio" name="avatartype" value="uploaded"> Uploaded</label>
							<?php $oauth_type = $EL->get_current_user('oauth'); ?>
							<?php if ($oauth_type == 'facebook'): ?>
							<label><input type="radio" name="avatartype" value="facebook"> Facebook</label>
							<?php elseif ($oauth_type == 'twitter'): ?>
							<label><input type="radio" name="avatartype" value="twitter"> Twitter</label>
							<?php elseif ($oauth_type == 'google'): ?>
							<label><input type="radio" name="avatartype" value="google"> Google+</label>
							<?php endif; ?>
							<br>
							<button type="button" class="btn btn-primary btn-sm edit-avatar">Edit Avatar</button>
						</div>
						<div class="pull-right">
							<img src="<?php echo $EL->get_current_user('avatar'); ?>" class="user-avatar">
						</div>
					</div>
				</div>	
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-primary">Save Changes</button>
				<span class="ajax-loader"></span>
			</div>
			<input type="hidden" name="action" value="account">
			</form>
		</div>
	</div>
</div>

<?php endif; ?>

<?php if (!$EL->is_logged() && $EL->config_item('require_captcha')): ?>
<script type="text/template" id="recaptchaTemplate">
	<label for="recaptcha_response_field">Enter the words below</label>
	<div id="easylogin_recaptcha" class="recaptcha" style="display:none">
		<div id="recaptcha_image"></div>
	    <div class="recaptcha-btns">
			<div><a href="javascript:Recaptcha.reload()">Reload</a> |</div>
			<div class="recaptcha_only_if_image"><a href="javascript:Recaptcha.switch_type('audio')">Listen</a> |</div>
			<div class="recaptcha_only_if_audio"><a href="javascript:Recaptcha.switch_type('image')">Image</a> |</div>
			<div><a href="javascript:Recaptcha.showhelp()">Help</a></div>
		</div>
		<input type="text" name="recaptcha_response_field" id="recaptcha_response_field" class="form-input">
	</div>
</script>
<input type="hidden" name="recaptcha_public_key" value="<?php echo $EL->api_key('recaptcha/public_key'); ?>">
<?php endif; ?>