<?php

class Clinic extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->helper('cookie');
    }


	public function index(){

        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');
        //field name, human name, rules
        $this->form_validation->set_rules('name','Clinic Name','required');
        $this->form_validation->set_rules('address','Address','required');
        $this->form_validation->set_rules('contactnum','Contact Number','required');
        $this->form_validation->set_rules('email','E-mail Address','required');
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password','Password','required');
        $this->form_validation->set_rules('confpassword','Confirm Password','required');


        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('clinic/registration');
        }
        else
        {
        	$data = array(
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password'),
                'is_clinic' => '1'
			);

			$this->db->insert('login', $data);
            $this->load->view('login');
        }

	}

}

?>