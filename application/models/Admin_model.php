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
			$this->db->select('id,search_count,list_count');
			$query1=$this->db->get('pg');
			$result1=$query1->result_array();
			return $result1;
		}
		public function list_count()
		{
			$this->db->select('id,shortlist');
			$query=$this->db->get('user');
			$result=$query->result_array();
			for($i=0;$i<sizeof($result);$i++)
			{
				$k=explode(',',$result[$i]['shortlist']);
				echo "<br>";
				print_r($k);
				foreach($k as $j)
				{
					$sql="Update pg set list_count=list_count+1 where id='".$j."'";
					$query2=$this->db->query($sql);	
				}
					
			}
		}

}
?>