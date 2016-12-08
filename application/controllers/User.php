<?php

class User extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->helper('url_helper');
        $this->load->helper('cookie');
    }

    public function index()
    {   
        $data['return_url'] = $this->input->get('return_url');
        $data['action'] = 'user/login';
        $this->load->view("common/header");
        $this->load->view("common/login",$data);
        $this->load->view("common/footer");
    }

    public function login()
    {
        $email=$this->input->post('email');
        $password=$this->input->post('password');

        $check=$this->user_model->check_creds($email,$password);

        if($check>0)
        {
            $this->session->set_userdata('user_id',$check);
            redirect(""); 
        }
        elseif($check==-1)
        {
            $id=$this->session->userdata('user_id');
            $number=$this->user_model->get_number($id);
            $this->verify_otp($number);
        }

        else
        {
            $this->general->set_alert('danger','Wrong username or password!');
        }
    }
    public function register()
    {
    	$post=$this->input->post();
    	
        $id = $this->user_model->register_user($post);
        $return_url = $this->input->post('return_url');
        
        if($id == -1)
        {
            $this->general->set_alert('danger','Email already in use!');
        }
        else if($id == 0)
        {
            $this->general->set_alert('danger','Oops something went wrong!');
        }
        else
        {
            $this->general->set_alert('success','Registered successfully');
            if($return_url != "")
                redirect($return_url);
            else
                redirect(""); 
        }
    }
    
    public function logout()
	{
	    if($this->session->userdata('user_id')!=null)
        {
            $this->session->unset_userdata('user_id');
        }
        else if($this->session->userdata('owner_id')!=null)
        {
            $this->session->unset_userdata('owner_id');
        }
	    redirect("home");
	}
    
    public function verify_otp($number)
    {

      $otp=$this->user_model->otp_generation();

      $data['otp']=$otp;
      $message  = "Hello your otp is".$otp;
      $message= str_ireplace(" ", "+", $message);
      $response = file_get_contents('http://tra.smsmyntraa.com/API/WebSMS/Http/v1.0a/index.php?username=HHMS&password=HHMS@123&sender=VHHSIN&to='.$number.'&message='.$message.'&reqid=&format=text&route_id=TRANSACTIONAL&callback=&unique=1&sendondate=');


      $this->session->set_userdata('otp',$otp);
      $this->load->view("user/verify_otp",$data);

    }
    public function check_otp()
    {
      $given=$this->input->post('otp');
      $true=$this->session->userdata('otp');
      if($given==$true)
      {
        $this->user_model->set_active();

        redirect("");
      }
      else
      {
        redirect("user/verify_otp");
      }
    }
    
}
?>