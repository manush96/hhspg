<?php
class Home_model extends CI_Model
{
		public function __construct()
		{
			$this->load->database();
			$this->load->helper('url');
			$this->load->helper('cookie');
		}
		
		public function search_pg($city, $area)
		{
			$this->db->select('*');
           	$this->db->from('pg');
	        $this->db->where('city',$city);
	        $this->db->like('Specific_Area',$area);
	        $query=$this->db->get();
	        return $query->result_array();
		}
	}
?>