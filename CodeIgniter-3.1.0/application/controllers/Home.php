<?php

class Home extends CI_Controller{

	public function index(){

        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');
        //field name, human name, rules
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('confpassword', 'Confirm Password', 'required');
        $this->form_validation->set_rules('firstname', 'First Name', 'required');
        $this->form_validation->set_rules('lastname', 'Last Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('birthday', 'Birthday', 'required');
        $this->form_validation->set_rules('sex', 'Sex', 'required');

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('home');
        }
        else
        {
        	$data = array(
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password')
			);

			$this->db->insert('login', $data);
            $this->load->view('login');
        }

	}

}

?>