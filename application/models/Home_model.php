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
	        $this->db->where('city',$city);
	        $this->db->like('area',$area);
	        $query=$this->db->get('pg');
	        return $query->result_array();
		}
		public function get_area_suggestion($area)
		{
			$limit = 5;
			$sql = "SELECT * FROM `pg` WHERE
				    (area like '$area%'
				    OR area like '%$area%'
				    OR area like '$area%') 
					
					GROUP BY area
					
					ORDER BY CASE 
						WHEN area LIKE '$area%' THEN 1
						WHEN area LIKE '%$area%' THEN 2
						WHEN area LIKE '%$area' THEN 2
				 		ELSE 5 
				 	END

				 	LIMIT $limit;";

			$query = $this->db->query($sql);
			$result_list = $query->result_array();
	        return $result_list;
		}
	}
?>