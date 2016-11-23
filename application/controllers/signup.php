<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class signup extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
        $this->load->helper('url_helper');
        $this->load->helper('cookie');
        $this->load->library('session');
    	
    }
    public function register()
    {
    	$name=$this->input->post('name');
    	$email=$this->input->post('email');
    	$phone=$this->input->post('phone');
    	$password=$this->input->post('password');
    	$this->db->select('*');
    	$this->db->from('user');
    	$this->db->where('email',$email);
    	$query=$this->db->get();
    	$num=$query->num_rows();
    	if($num==0)
    	{
	    	$data=array
	    	(
	    		username=> $name,
	    		password=> md5($password),
	    		email=> $email,
	    		phone => $phone
	    	);
	    	$this->db->insert('user',$data);
	    	$this->session->set_userdata('user_check',true);
	    }
	    else
	    {
	    	$this->session->set_userdata('user_check',false);
	    }
    	redirect("signup/registered");
    }
    public function registered()
    {
    	$this->load->view('signup/registered');
    }
}
?>