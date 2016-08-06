<?php

class Login extends CI_Model{
	
	public function authenticate_user($username, $password){
		$this->db->select('*');
		$this->db->from('login');
		$this->db->where('username', $username); 
		$this->db->where('password', $password); 
		$query = $this->db->get();

		if ($query->num_rows() === 1){
			return TRUE;
		}
		return FALSE;
	}

	public function get_password($username){
		$this->db->select('password');
		$this->db->from('login');
		$this->db->where('username', $username); 
		$query = $this->db->get();
		$query = $query->result_array();

		return $query['password'];
	}

}