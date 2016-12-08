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
	public function search($city="", $area="",$gender="")
	{
		$range = $this->input->post('range');
		$type = $this->input->post('type');

		$id = $this->session->userdata('user_id');

		$city = urldecode($city);
		$area = urldecode($area);
		$gender=urldecode($gender);

		$data['search_result'] = $this->home_model->search_pg($city, $area,$gender);
		$data['wishlist'] = $this->home_model->get_wishlist($id);
		
		if(!isset($range) OR !isset($type) OR $range == "" OR $type == "")
		{
			$head['city'] = $city;
			$head['area'] = $area;
			$head['gender'] = $gender;

			$data['map_load'] = TRUE;

			$this->load->view('common/header');
			$this->load->view('home/search_header',$head);
			$this->load->view('home/search',$data);
			$this->load->view('common/footer');
		}
		else
		{
			$data['map_load'] = FALSE;
			
			$this->load->view('home/search',$data);
		}
		
	}
	public function blog()
	{
		$this->load->view('common/header');
		$this->load->view('home/view_blog');
		$this->load->view('common/footer');

	}
	public function get_modal_pg()
	{
		$id = $this->input->post('id');
		$data['pg'] = $this->home_model->get_pg_info($id);
		$data['amenities'] = $this->home_model->get_amenities($data['pg']['amenities']);
		$data['images']=$this->home_model->get_images($id);

		$rules = $data['pg']['rules'];
		$rules = explode(',', $rules);
		
		$data['rules'] = $rules;

		$rooms = $data['pg']['room_price'];
		$rooms = explode(',', $rooms);
		$rooms = array_map('trim',$rooms);
		$new = array();

		foreach ($rooms as $i => $value)
		{
			$tmp = explode(':', $value);
			if(stripos($tmp[0], 'ac') !== false)
			{
				$tmp[0] = str_ireplace("ac", "", $tmp[0]);
				$tmp[0] = trim($tmp[0]);
				$tmp2 = explode(' ', $tmp[0]);
				if(!isset($tmp[1]))
				{
					$tmp2 = explode(' ', $tmp[0]);
					$tmp[0] = $tmp2[0].' '.$tmp2[1];
					$tmp[1] = $tmp2[2];
				}
				$new[$tmp2[0]]['ac'] = trim($tmp[1]);
			}
			else
			{
				$tmp[0] = trim($tmp[0]);
				$tmp2 = explode(' ', $tmp[0]);
				if(!isset($tmp[1]))
				{
					$tmp2 = explode(' ', $tmp[0]);
					$tmp[0] = $tmp2[0].' '.$tmp2[1];
					$tmp[1] = $tmp2[2];
				}
				$new[$tmp2[0]]['normal'] = trim($tmp[1]);
			}
		}

		$data['rooms'] = $new;
		$this->load->view('home/view_modal', $data);
	}		
	public function view_pg($token)
	{
		$myArr = explode('_', $token);
		if($myArr[0] == "")
		{
			redirect("");
		}
		else
		{
			$id = $myArr[1];
			$data['pg'] = $this->home_model->get_pg_info($id);
			$data['amenities'] = $this->home_model->get_amenities($data['pg']['amenities']);
			$data['images']=$this->home_model->get_images($id);
			$rules = $data['pg']['rules'];
			$rules = explode(',', $rules);
			$address=$this->home_model->get_address($id);	
			$data['rules'] = $rules;
			$this->session->set_userdata('pg_address',$address);
			$rooms = $data['pg']['room_price'];
			$rooms = explode(',', $rooms);
			$rooms = array_map('trim',$rooms);
			$new = array();

			foreach ($rooms as $i => $value)
			{
				$tmp = explode(':', $value);
				if(stripos($tmp[0], 'ac') !== false)
				{
					$tmp[0] = str_ireplace("ac", "", $tmp[0]);
					$tmp[0] = trim($tmp[0]);
					$tmp2 = explode(' ', $tmp[0]);
					if(!isset($tmp[1]))
					{
						$tmp2 = explode(' ', $tmp[0]);
						$tmp[0] = $tmp2[0].' '.$tmp2[1];
						$tmp[1] = $tmp2[2];
					}
					$new[$tmp2[0]]['ac'] = trim($tmp[1]);
				}
				else
				{
					$tmp[0] = trim($tmp[0]);
					$tmp2 = explode(' ', $tmp[0]);
					if(!isset($tmp[1]))
					{
						$tmp2 = explode(' ', $tmp[0]);
						$tmp[0] = $tmp2[0].' '.$tmp2[1];
						$tmp[1] = $tmp2[2];
					}
					$new[$tmp2[0]]['normal'] = trim($tmp[1]);
				}
			}

			$data['rooms'] = $new;
			$this->load->view('common/header');
			$this->load->view('home/view_pg', $data);
			$this->load->view('common/footer');
		}
	}

	public function add_to_wishlist()
	{
		$id = $this->session->userdata('user_id');
		$url = $this->input->post('url');
		if($id == NULL)
		{
			echo $url;
		}
		else
		{
			$pg_id = $this->input->post('pg_id');
			$this->home_model->add_to_wishlist($pg_id, $id);
			echo "TRUE";
		}
	}

	public function remove_from_wishlist()
	{
		$id = $this->session->userdata('user_id');
		$url = $this->input->post('url');
		if($id == NULL)
		{
			echo $url;
		}
		else
		{
			$pg_id = $this->input->post('pg_id');
			$this->home_model->remove_from_wishlist($pg_id, $id);
			echo "TRUE";
		}
	}

	public function get_area_suggestion()
	{
		$city = $this->input->get('city');
		$area = $this->input->get('area');
		$data['area_list'] = $this->home_model->get_area_suggestion($area,$city);
		$data['keyword'] = $area;

		$this->load->view('home/area_suggestion',$data);
	}
	public function schedule_visit()
	{
		$post=$this->input->post();
		$this->home_model->schedule($post);
		$this->load->view('common/header');
		$this->load->view('home/success_visit');		
	}
}
