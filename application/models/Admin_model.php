<?php
class Admin_model extends CI_Model
{
		public function __construct()
		{
			$this->load->database();
			$this->load->helper('url');
			$this->load->helper('cookie');
		}
		public function view_search()
		{
			$this->db->select('*');
			$result=$this->db->get('search');
			return $result->result_array();
		}
		public function view_users()
		{
			$this->db->select('*');
			$result=$this->db->get('user');
			return $result->result_array();
		}
		public function pg_trends()
		{
			$this->db->select('id,shortlist');
			$query=$this->db->get('user');
			$result=$query->result_array();
			$this->db->select('id','view_count');
			$query1=$this->db->get('pg');
			$result1=$query1->result_array();
			echo "<pre>";
			  print_r($result1);
			exit;	
		}

}
?>