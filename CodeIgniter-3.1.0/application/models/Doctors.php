<?php

class Doctors extends CI_Model{
	
	public function get_doctors($clinic_id){
		$this->db->select('*');
		$this->db->from('doctor');
		$this->db->where('clinic_id', $clinic_id); 
		$query = $this->db->get();

		return $query;
	}

}