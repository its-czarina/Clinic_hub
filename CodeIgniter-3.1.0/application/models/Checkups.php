<?php

class Checkups extends CI_Model{
	public function get_transactions($id){
		$this->db->select('*');
		$this->db->from('checkups');
		$this->db->where('patient_id', $id);
		$query = $this->db->get();

		if ($query->num_rows() >= 1)
			return $query->result();
		else
			return NULL;
	}
}