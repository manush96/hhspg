<?php

class Owner extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('owner_model');
        $this->load->helper('url_helper');
        $this->load->helper('cookie');
        $this->load->library('session');
    }
    public function index()
    {	
    	$this->load->view("common/header");
		$this->load->view("owner/login");
		$this->load->view("common/footer");
    }
   	public function login()
   	{
	   	$email=$this->input->post('email');
	   	$password=$this->input->post('password');

	   	$check=$this->owner_model->check_creds($email,$password);
        
        if($check>0)
        {
            $this->session->set_userdata('owner_id',$check);
            redirect("owner/profile"); 
        }
        elseif($check==-1)
        {
            redirect("owner/verify_otp");
        }

        else
        {
            $this->general->set_alert('danger','Wrong username or password!');
        }
   	}
    public function verify_otp()
    {
      $otp=$this->owner_model->otp_generation();
      $data['otp']=$otp;
      $this->session->set_userdata('otp',$otp);
      $this->load->view("owner/verify_otp",$data);

    }
    public function check_otp()
    {
      $given=$this->input->post('otp');
      $true=$this->session->userdata('otp');
      if($given==$true)
      {
        redirect("owner/profile");
      }
      else
      {
        $this->general->set_alert('danger','Wrong otp please check again');
      }
    }
   	public function profile()
   	{
   		$this->load->view("common/header");
   		$this->load->view("owner/profile");
   	}
   	public function add_pg()
   	{
   		$this->load->view("owner/add_pg");
   	}
    public function add_pg_data()
    {
      echo $this->input->post();
    }

}