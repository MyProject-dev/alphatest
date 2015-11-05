<?php
$config = array(
	
	// Website home page
	'home_url' =>'',
	
	// URL where are located the script files
	'script_url' => '',

	// Database connection


	/*
	'db' => array(
		'name' => 'ricopeco_easylogin',
		'user' => 'ricopeco_easylog',
		'pass' => '[)^8Dpa2iG$w',
		'host' => '127.0.0.1' // a.k.a. localhost
	),
	*/
	'db' => array(
		'name' => 'easylogin',
		'user' => 'root',
		'pass' => '',
		'host' => '127.0.0.1' // a.k.a. localhost
	),



	// Email
	'email' => array(
		'from_name' => 'Jesus Erwin Suarez',
		'from_email'=> 'mrjesuserwinsuarez@gmail.com',
	),

	// Enables phpmailer library (requires OpenSSL extension)
	'phpmailer' => true,

	// API KEYS
	'api_keys' => array(

		// ReCaptcha (https://www.google.com/recaptcha)
		'recaptcha' => array(
			'public_key'  => '',
			'private_key' => ''
		),

		// Google+ API (https://cloud.google.com/console)
		'google' => array(
			'client_id'     => '',
			'client_secret' => '',
			'dev_key'       => ''
		),

		// Facebook API (https://developers.facebook.com/)
		'facebook' => array(
			'app_id' => '528594163842974',
			'secret' => 'a411c8a3c4361556491b2c2ddf38bf21'
		),

		// Twitter API (http://dev.twitter.com/)
		'twitter' => array(
			'api_key' => '',
			'api_secret' => ''
		),

		// Use Gmail account to send emails
		'gmail' => array(
			'username' => '',
			'password' => ''
		),
	),

	// Redirect URL after login (if it's empty will just reload the current page)
	'login_redirect' => '',

	'require_username' => true,
	'require_name' => true,
	'require_captcha'  => true,
	
	// Email activation
	'email_activation' => true,
	
	// Default user role
	'default_role' => 'user',

	// Upload dir for avatars
	'upload_dir' => 'uploads/',

	// Default avatar (mm | identicon | monsterid | wavatar or image url)
	'default_avatar' => 'mm',
	
	//Password encryption algorithm
	'encryption_algorithm' => 'md5', // "md5", "sha256", "haval160,4", "bcrypt‎" - http://php.net/manual/en/function.hash.php

	//Password encryption salt (eg. http://bit.ly/1cqHt75)
	'auth_salt' => '',
	
	// Session name
	'session_name' => 'easylogin',

	//Custom fields
	'custom_fields' => array(
		array(
			'type' => 'textarea',
			'name' => 'about',
			'label' => 'About'
		),
		/*
		array(
			'type' => 'text',
			'name' => 'text_field',
			'label' => 'Text Field'
		),
		array(
			'type' => 'select',
			'name' => 'select_field',
			'label' => 'Select Field',
			'options' => array(
				'op1' => 'Option 1',
				'op2' => 'Option 2',
				// add more options
			)
		),
		array(
			'type' => 'checkbox',
			'name' => 'checkbox_field',
			'label' => 'Checkbox Field'
		)
		*/
	),

	// Email templates
	'email_templates' => array(
		
		'signup_subject' => 'Confirm your account',
		'signup_message' => 'Confirm your account by clicking this link: <br> <a href="%1$s">%1$s</a>',
		
		'activation_subject' => 'Confirm your account',
		'activation_message' => 'Confirm your account by clicking this link: <br> <a href="%1$s">%1$s</a>',

		'recover_subject' => 'Recover your Password',
		'recover_message' => 'You if you have requested to change your password click the link below, otherwise ignore this email. <br> <a href="%1$s">%1$s</a>',

		'add_user_subject' => 'Your account details',
		'add_user_message' => 'Login details: <br> <strong>User:</strong> %1$s <br> <strong>Pass:</strong> %2$s'
	),
);