<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class auth_model extends CI_Model {

	function check_data_user($username)
	{
		$query = $this->db->get_where('login', array('username' => $username));
		foreach ($query->result_array() as $row) {
			$array = $row;
		}
		if (!isset($array)) {
			$array = '';
		}
		return $array;
	}

	function check_data($username,$password)
	{
		$password = md5($password);
		$query = $this->db->get_where('login', array('username' => $username, 'password' => $password));
		foreach ($query->result_array() as $row) {
			$array = $row;
		}
		if (!isset($array)) {
			$array = '';
		}
		return $array;
	}

	function get_data_user($username)
	{
		$this->db->from('login');
		$this->db->where('username',$username);
		$this->db->limit(1);
		$query = $this->db->get();
		foreach ($query->result_array() as $row) {
			$array = $row;
		}
		if (!isset($array)) {
			$array = '';
		}
		return $array;
	}

}

/* End of file auth_model.php */
/* Location: ./application/models/auth_model.php */