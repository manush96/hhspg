<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('home_model');
        $this->load->helper('url_helper');
        $this->load->helper('cookie');
        $this->load->library('session');
    }
	public function index()
	{
		$this->load->view('common/header');
		$this->load->view('common/index');
		$this->load->view('common/footer');
	}
	public function temp()
	{
		$this->load->view('common/header');
		$this->load->view('owner/add_pg');
		$this->load->view('common/footer');
	}
	public function search($city, $area,$gender)
	{
		$city = urldecode($city);
		$area = urldecode($area);
		$gender=urldecode($gender);
		$data['search_result'] = $this->home_model->search_pg($city, $area,$gender);
		
		$this->load->view('common/header');
		$this->load->view('home/search',$data);
		$this->load->view('common/footer');
	}
	public function blog()
	{
		$this->load->view('common/header');
		$this->load->view('home/view_blog');
		$this->load->view('common/footer');

	}

	public function get_area_suggestion()
	{
		$city = $this->input->get('city');
		$area = $this->input->get('area');
		$data['area_list'] = $this->home_model->get_area_suggestion($area,$city);
		$data['keyword'] = $area;

		$this->load->view('home/area_suggestion',$data);
	}
}
