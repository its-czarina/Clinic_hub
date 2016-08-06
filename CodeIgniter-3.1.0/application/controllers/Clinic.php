<?php

class Clinic extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->helper('cookie');
        $this->load->helper(array('form', 'url'));
    }

    public function login(){

        if (is_null(get_cookie('clinic_id'))){

            $this->load->library('form_validation');

            //field name, human name, rules
            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');

            if ($this->form_validation->run() == FALSE)
            {
                $this->load->view('login-clinic');
            }
            else
            {
                $user = $this->input->post('username');
                $pass = $this->input->post('password');
                $this->load->model('login');
                $clinic_id = $this->login->authenticate_clinic($user, $pass);
                if (!is_null($clinic_id)){
                    $cookie = array(
                        'name'   => 'clinic',
                        'value'  => $clinic_id['id'],
                        'expire' => time()+86500,
                        'path'   => '/',
                    );
                    $this->input->set_cookie($cookie);
                    redirect('clinic');
                }
                else{
                    redirect('clinic/login');
                }
            }
        }
        else{
            redirect('clinic');
        }
    }

	public function index(){

        if (is_null(get_cookie('clinic'))){
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
    else{
        $this->load->view('home-clinic');
    }

	}
    
    public function logout(){
        $cookie = array(
            'name'   => 'clinic',
            'value'  => NULL,
            'path'   => '/',
        );
        $this->input->set_cookie($cookie);   
        delete_cookie($cookie);
        redirect('home');
    }

    public function update_doctor(){
        $this->load->view('add-doctor-btn');
        $this->load->model('doctors');
        $data['doctors'] = $this->doctors->get_doctors(get_cookie('clinic'));

        if ($data['doctors']->num_rows() >= 1){
            $this->load->view('list-doctors', $data);    
        }
        else{
            $this->load->view('empty', $data);       
        }   
    }

    public function appointments($id = NULL){
        if ($id === NULL)
        {
            $this->load->view('empty');
            //display all appointments all days
        }
        else
        {
            $this->load->view('empty');
            //display appointments in specified id
        }
    }

    public function add_doctor(){
        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');
        //field name, human name, rules
        $this->form_validation->set_rules('firstname','First Name','required');
        $this->form_validation->set_rules('lastname','Last Name','required');
        $this->form_validation->set_rules('email','Email Address','required');
        $this->form_validation->set_rules('specialization','specialization','required');

        $this->form_validation->set_rules('consultationstart','Consultation Start','required');
        $this->form_validation->set_rules('consultationend','Consultation End','required');

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('doctor');
        }
        else
        {
            $data = array(
                'clinic_id' => get_cookie('clinic'),
                'name' => $this->input->post('firstname')." ".$this->input->post('lastname'),
                'specialization' => $this->input->post('specialization'),
                'email' => $this->input->post('email'),
                'consultation_start' => $this->input->post('consultationstart'),
                'consultation_end' => $this->input->post('consultationend')
            );

            $this->db->insert('doctor', $data);
            redirect('clinic/update_doctor');
        }
    }

}