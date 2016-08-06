<?php

class Info extends CI_Model{
	
	public function get_info($id){
		$this->db->select('*');
		$this->db->from('Information');
		$this->db->where('user_id', $id);
		$query = $this->db->get();

		if ($query->num_rows() === 1){
			return $query->row();
		}

		return NULL; 		
	}

}