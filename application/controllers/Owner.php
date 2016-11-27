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
    public function signup()
    {
      $name=$this->input->post('name');
      $email=$this->input->post('email');
      $contact=$this->input->post('contact');
      $password=$this->input->post('password');
      $k=$this->owner_model->register_owner($name,$email,$contact,$password);
      if($k==1)
      {
        redirect("owner/verify_otp");
      }
      else
      {
        echo "already in use";
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
        $this->owner_model->set_active();

        redirect("owner/profile");
      }
      else
      {
        redirect("owner/verify_otp");
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