<?php

class Login extends CI_Model{
	
	public function authenticate_user($username, $password){
		
		$this->db->select('*');
		$this->db->from('login');
		$this->db->where('username', $username); 
		$this->db->where('password', $password); 
		$this->db->where('is_clinic', 0); 
		$query = $this->db->get();

		if ($query->num_rows() === 1){
			$val = $query->row();
			return array('id' => $val->user_id, 'clinic' => $val->is_clinic);
		}

		return NULL;
	}

	public function authenticate_clinic($username, $password){
		$this->db->select('*');
		$this->db->from('login');
		$this->db->where('username', $username); 
		$this->db->where('password', $password); 
		$this->db->where('is_clinic', 1); 
		$query = $this->db->get();

		if ($query->num_rows() === 1){
			$val = $query->row();
			return array('id' => $val->user_id, 'clinic' => $val->is_clinic);
		}

		return NULL;
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