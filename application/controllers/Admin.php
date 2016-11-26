<?php

class Admin extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('admin_model');
        $this->load->helper('url_helper');
        $this->load->helper('cookie');
        $this->load->library('session');
    }

    public function index()
    {   
        $this->load->view("admin/login");
    }
    public function login()
    {
        print_r($this->input->post());
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        if($username == "arise" && $password == "arise")
        {
            $this->session->set_userdata('admin_id',1);
            redirect("admin/view_search_trends");
        }
        else
        {
            $this->general->set_alert('danger','Wrong username or password!','admin');
        }
    }
    public function add_pg()
    {

    }
    public function view_search_trends()
    {
        $data['result']=$this->admin_model->view_search();
        
        $this->load->view("admin/header");
        $this->load->view("admin/sidebar");
        $this->load->view('admin/search_trends',$data);
        $this->load->view("admin/footer");
    }
    public function view_users()
    {
        $data['result']=$this->admin_model->view_users();
        $this->load->view("admin/header");
        $this->load->view("admin/sidebar");
        $this->load->view('admin/user_data',$data);
        $this->load->view("admin/footer");
    }
    public function view_online_users()
    {
        $this->load->view("admin/header");
        $this->load->view("admin/sidebar");
        $x = count(scandir(ini_get("session.save_path")))-2;
        $this->load->view("admin/footer");
    }
    public function pg_analysis()
    {

        $this->admin_model->list_count();#short list ma pg na occurrence gani pg no short list count ganva
        $data['result']=$this->admin_model->pg_trends();

        $this->load->view("admin/header");
        $this->load->view("admin/sidebar");
        $this->load->view('admin/pg_trends', $data);
        $this->load->view("admin/footer");
    }
    public function area_analysis()
    {

    }
    public function set_session_url($url)
    {
        $this->session->set_userdata('admin_url',$url);
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('admin');        
    }
}

?>