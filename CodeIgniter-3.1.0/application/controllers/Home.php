<?php

class Home extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->helper('cookie');
        $this->load->helper(array('form', 'url'));
    }
    public function calendar(){
        $this->load->view('calendarUI');
    }
	public function index(){
        if (is_null(get_cookie('user'))) {
        
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
                redirect('home/login');
            }
        }
        else {
            $this->load->view('welcome_message');
        }
    }

    public function logout(){
        $cookie = array(
            'name'   => 'user',
            'value'  => NULL,
            'path'   => '/',
        );
        $this->input->set_cookie($cookie);   
        delete_cookie($cookie);
        redirect('home');
    }

    public function login(){

        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');

        //field name, human name, rules
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('login-user');
        }
        else
        {
            $user = $this->input->post('username');
            $pass = $this->input->post('password');
            $this->load->model('login');
            $user_id = $this->login->authenticate_user($user, $pass);
            if (!is_null($user_id)){
                $cookie = array(
                    'name'   => 'user',
                    'value'  => $user_id['id'],
                    'expire' => time()+86500,
                    'path'   => '/',
                );
                $this->input->set_cookie($cookie);
                redirect('home/');
            }
            else{
                redirect('home/login');
            }
        }

	}

    public function search_doctor(){
        $this->load->view('search');
    }

    public function schedule_checkup(){
        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');
        //field name, human name, rules
        $this->form_validation->set_rules('date','Date','required');
        $this->form_validation->set_rules('query','Query','required');

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('schedule');
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
 
    public function update_info(){
            if (!is_null(get_cookie('user'))) {
                $this->load->model('info');
                $info = $this->info->get_info(get_cookie('user'));
                if ($info === NULL){
                    $this->load->library('form_validation');
                    
                    $this->form_validation->set_rules('hasphysician','has physician','required');
                    $this->form_validation->set_rules('lastcheckup','last checkup','required');
                    $this->form_validation->set_rules('havehospitalized','have hospilazied','required');

                    if ($this->form_validation->run() == FALSE)
                    {
                        $this->load->view('history');
                    }
                    else
                    {
                        $data = array(  
                            'user_id' => get_cookie('user'),
                            'bloodtype' => $this->input->post('bloodtype'),
                            'height'=> $this->input->post('height'),
                            'weight'=> $this->input->post('weight'),
                            'hasphysician' => $this->input->post('hasphysician'),
                            'lastcheckup'=> $this->input->post('lastcheckup'),
                            'doessmoke'=> $this->input->post('doessmoke'),
                            'havehospitalized'=> $this->input->post('havehospitalized'),
                            'hasreaction'=> $this->input->post('hasreactions'),
                            'takingmedication'=> $this->input->post('takingmedication'),
                            'medications' => $this->input->post('medications'),
                            'chestpains'=> $this->input->post('haveexperienced'),
                            'injurysurgery'=> $this->input->post('haveinjuries'),
                        );
                        $this->db->insert('information', $data);
                        redirect('home/');
                    }
                }
                else
                {
                    $this->load->view('med-info', $info);
                }
            }
        else {
            redirect('home/login');
        }
    }

    public function view_calendar(){
        $this->load->view('calendarUI');
    }

    public function view_chart($id = NULL){
        $this->load->view('information');
    }

    public function download_record(){
        $yourFile = "files/sample_file.txt";
        $file = @fopen($yourFile, "rb");

        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=FeDelMundo_Trial.txt');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($yourFile));
        while (!feof($file)) {
            print(@fread($file, 1024 * 8));
            ob_flush();
            flush();
        }
    }



}

?>