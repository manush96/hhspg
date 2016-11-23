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

}
	?>