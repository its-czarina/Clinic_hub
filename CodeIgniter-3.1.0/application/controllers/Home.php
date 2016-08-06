<?php

class Home extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->helper('cookie');
    }

	public function index(){
        if (is_null(get_cookie('user'))) {
        
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
        else {
            $this->load->view('welcome_message');
        }
    }

    public function login(){

        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');

        //field name, human name, rules
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('login');
        }
        else
        {

            $user = $this->input->post('username');
            $pass = $this->input->post('password');
            $user_id = $this->authenticate_login($user, $pass);
            if ($user_id !== NULL){
                $cookie = array(
                    'name'   => 'user',
                    'value'  => $user_id,
                    'expire' => time()+86500,
                    'path'   => '/',
                );
                $this->input->set_cookie($cookie);
                $this->load->view('test', array('id' => $user_id));
            }
         //   $this->load->view('login');
        }

	}

 
    private function authenticate_login($user, $pass){
        $this->load->model('login');
        $is_authenticated = $this->login->authenticate_user($user, $pass);
        return $is_authenticated;
    }

}

?>