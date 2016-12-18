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
    public function split()
    {
        $this->admin_model->bhadako();
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

    public function temp()
    {
        $this->load->view("admin/header");
        $this->load->view("admin/sidebar");
        $this->load->view('owner/add_pg');
        $this->load->view("admin/footer");
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
        $this->load->view('admin/pg_analysis', $data);
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
    public function owner_list()
    {
        $list=$this->admin_model->get_owner();
        $data['result']=$list;
        $this->load->view("admin/header");
        $this->load->view("admin/sidebar");
        $this->load->view('admin/view_owner', $data);
        /*$this->load->view("admin/footer");*/
    }
    public function get_pg_request()
    {
        $list=$this->admin_model->get_pg_request();
        $data['result']=$list;
        $this->load->view("admin/header");
        $this->load->view("admin/sidebar");
        $this->load->view('admin/get_pg_request', $data);
        $this->load->view("admin/footer");
    }
    public function approve_pg()
    {
        $k=$this->input->post();
        print_r($k);
    }
    public function owner_requests()
    {
        $data['details']=$this->admin_model->add_pg_request();
        $this->load->view("admin/header");
        $this->load->view("admin/sidebar");
        $this->load->view('admin/add_pg_request', $data);
        $this->load->view("admin/footer");
    }
    public function visited()
    {
        $id=$this->input->post('id');
        echo $this->admin_model->delete_visited($id);
    }

    public function request_changes()
    {
        $data['details']=$this->admin_model->request_changes();
        $this->load->view("admin/header");
        $this->load->view("admin/sidebar");
        $this->load->view('admin/request_change', $data);
        #$this->load->view("admin/footer");
    }

    public function handled()
    {
        $id=$this->input->post('id');
        echo $this->admin_model->delete_handled($id);
    }

    public function add_pg()
    {
        $this->load->view("admin/header");
        $this->load->view("admin/sidebar");
        $this->load->view('admin/add_pg');
        $this->load->view("admin/footer");
    }

    public function new_pg_data()
    {
        #id,ownerid,name,address,area,amenities,room_price,rules,gender,vacant_beds,city,price_to,price_from,type,form_no
        /*$post=$this->input->post();
        echo "<pre>";
        print_r($post);*/

        $name=$this->input->post('PG_Name');
        $address=$this->input->post('address');
        $contact=$this->input->post('contact');
        $area=$this->input->post('area');
        $room_price=$this->input->post('room_price');
        $gender=$this->input->post('gender');
        $vacant_beds=$this->input->post('vacant_beds');
        $city=$this->input->post('city');
        $price_to=$this->input->post('price_to');
        $price_from=$this->input->post('price_from');
        $type=$this->input->post('type');
        $form_no=$this->input->post('form_no');
        $amenities=$this->input->post('amenities');
        $rules=$this->input->post('rules');

        $new_amenities= $this->admin_model->format_amenities($amenities);
        $new_rules=$this->admin_model->format_rules($rules);

        $this->admin_model->pg_data_to_db($name, $address, $contact, $area, $room_price, $gender, $vacant_beds, $city, $price_from, $price_to, $type, $form_no, $new_amenities, $new_rules);
       
        add_pg();
    }

    public function add_owner()
    {
        $this->load->view("admin/header");
        $this->load->view("admin/sidebar");
        $this->load->view('admin/add_owner');
        #$this->load->view("admin/footer");
    }

    public function new_owner_data()
    {
        $name=$this->input->post('name');
        $email=$this->input->post('email');
        $contact=$this->input->post('contact');
        $password=$this->input->post('password');

        $this->admin_model->owner_data_to_db($name, $email, $contact, $password);

        $this->add_owner();
    }
}

?>