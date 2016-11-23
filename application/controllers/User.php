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
        $this->load->view("common/header");
        $this->load->view("user/login");
        $this->load->view("common/footer");
    }

    public function login()
    {
        $email=$this->input->post("email");
        $password=$this->input->post("password");
        
        $k=$this->user_model->check($email,$password);
        
        if($k!=-1)
        {
            $this->session->set_userdata('user_id',$k);
            redirect(""); 
        }   
        else
        {
            $this->general->set_alert('danger','Wrong username or password!');
        }
    }

    public function register()
    {
    	$post=$this->input->post();
    	
        $id = $this->user_model->register($post);

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
            $this->session->set_userdata('user_id',$id);
            redirect("");
        }
    }
    
    public function logout()
	{
	    $this->session->unset_userdata('user_id');
	    redirect("home");
	}
}
?>