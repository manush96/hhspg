<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class logout extends CI_Controller
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
	    	$this->session->unset_userdata('user_id');
	    	redirect("home");
	    }

	}