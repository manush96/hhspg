<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
	public function add_pg()
	{

	}
    public function view_search_trends()
    {
        $data['result']=$this->admin_model->view_search();
        $this->load->view('common/header');
        $this->load->view('admin/search_trends',$data);

    }
    public function view_users()
    {

    }
    public function pg_analysis()
    {

    }
    public function area_analysis()
    {

    }
}
?>