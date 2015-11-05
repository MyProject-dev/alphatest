<?php
/**
* Admin
*/
class Admin
{
	private $EL;
	private $_users = 'users';
	private $_usermeta = 'usermeta';

	public $errors;
	public $messages = array(
		'invalid_username' => 'Enter a valid username',
		'unique_username' => 'This username is already taken',
		'invalid_email' => 'Enter a valid email address',
		'unique_email' => 'This email is already registed',
		'invalid_name' => 'Enter a valid name',
		'invalid_password' => 'Enter a valid password, minimum 4 characters',
		'pass_not_match'=> 'Passwords do not match'
	);

	public function __construct() {
		$this->EL = EasyLogin::getInstance();
	}

	public function get_users() {
		$query = $this->EL->db->select('*', $this->_users)->orderby('registered', 'DESC');
		return $query->get();
	}

	public function add_user($data) {
		extract($data);
		$data = array();

		if ($this->EL->config_item('require_username')) {
			if (!$this->EL->valid_username($username)) 
				$this->errors[] = $this->messages['invalid_username'];
		 	elseif (!$this->EL->is_unique($username, $this->_users.".username"))
				$this->errors[] = $this->messages['unique_username'];
			else $data['username'] = $username;
		}

		if (!$this->EL->valid_email($email)) {
			$this->errors[] = $this->messages['invalid_email'];
		} elseif (!$this->EL->is_unique($email, $this->_users.".email")) {
			$this->errors[] = $this->messages['unique_email'];
		} else {
			$data['email'] = $email;
		}

		if ($this->EL->config_item('require_name')) {
			$name = $this->EL->escape($name);	
			if (empty($name))
				$this->errors[] = $this->messages['invalid_name'];
			else $data['name'] = $name;
		}

		if ($this->EL->valid_url($url)) {
			$data['url'] = $url;
		}

		if (empty($password) || strlen($password) < 4) {
			$this->errors[] = $this->messages['invalid_password'];
		} else {
			$data['password'] = $this->EL->encrypt($password);
		}

 		$data['status'] = 1;
 		
 		if (empty($this->errors)) {
			if ($this->EL->db->insert($this->_users, $data)) {
				if (isset($send_email)) {
					$subject = $this->EL->config_item('email_templates/add_user_subject');
					$message = sprintf($this->EL->config_item('email_templates/add_user_message'), $email, $password);
					$this->EL->send_email($email, $subject, $message);
				}
				return TRUE;
			}
 		}
		return FALSE;
	}

	public function delete_user($user_id) {
		$user_id = $this->EL->escape($user_id);
		$query = $this->EL->db->limit(1)->delete($this->_users, array('id', $user_id));
		if ($query) {
			$query = $this->EL->db->delete($this->_usermeta, array('user_id', $user_id));
			return true;
		}
		return false;
	}

	public function set_value($value, $default = NULL) {
		if (isset ($_POST[$value]) )
			return $this->EL->escape( $_POST[$value] );
		else if ($default != NULL) 
			return $default;
	}
}