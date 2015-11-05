<?php
/**
* Options
*/
class Options {
	private $_options = 'options';
	private $db;

	public function __construct() {
		$EL = EasyLogin::getInstance();
		$this->db = $EL->db;
	}

	public function get($option_name) {
		if ($option_name) {
			$query = $this->db->select('value', $this->_options)->where('name', $option_name)->limit(1);
			if ($result = $query->get()) {
				return $result[0]->value;
			}
		}
		return false;
	}

	public function add($option_name, $option_value) {
		$data = array(
			'name'  => $option_name, 
			'value' => $option_value
		);
		return $this->db->insert($this->_options, $data);
	}

	public function update($option_name, $option_value) {
		$query = $this->db->select('value', $this->_options)->where('name', $option_name)->limit(1);
		if ($query->get()) {
			$query = $this->db->where('name', $option_name)->limit(1);
			return $query->update($this->_options, array('value' => $option_value));
		} else {
			return $this->add($option_name, $option_value);
		}
	}
	
	public function delete($option_name) {
		$query = $this->db->where('name', $option_name)->limit(1);
		return $this->db->delete($this->_options);
	}
}

?>