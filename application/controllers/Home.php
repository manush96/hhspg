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
    }
	public function index()
	{
		$this->load->view('common/header');
		$this->load->view('common/index');
		$this->load->view('common/footer');
	}
	public function search($city, $area)
	{
		$data['search_result'] = $this->home_model->search_pg($city, $area);
		
		$this->load->view('common/header');
		$this->load->view('home/search',$data);
		$this->load->view('common/footer');
	}

	public function get_area_suggestion($area)
	{
		$data['area_list'] = $this->home_model->get_area_suggestion($area);
		$data['keyword'] = $area;

		$this->load->view('home/area_suggestion',$data);
	}
}
