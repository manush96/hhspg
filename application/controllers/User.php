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

        $this->load->view("common/header");
        $this->load->view("user/login",$data);
        $this->load->view("common/footer");
    }

    public function login()
    {
        $email=$this->input->post("email");
        $password=$this->input->post("password");
        
        $k=$this->user_model->check($email,$password);
        $return_url = $this->input->post('return_url');

        if($k!=-1)
        {
            $this->session->set_userdata('user_id',$k);
            if($return_url != "")
                redirect($return_url);
            else
                redirect(""); 
        }   
        else
        {
            $this->general->set_alert('danger','Wrong username or password!','user');
        }
    }
    public function register()
    {
    	$post=$this->input->post();
    	
        $id = $this->user_model->register($post);
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
}
?>