<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
        $this->load->helper('url_helper');
        $this->load->helper('cookie');
        $this->load->library('session');
    }
	public function index()
	{	
		$this->load->view("common/header");
		$this->load->view("login/user_login");
		$this->load->view("common/footer");
	}
	public function check_login()
	{
		$email=$this->input->post("email");
		$password=$this->input->post("password");
		
		$k=$this->login_model->check($email,$password);
		
		if($k!=1)
		{
			$this->session->set_userdata('user_id',$k);
			redirect("");
			
		}	
		else
		{
			echo "wrong username";
		}
	}



}

?>