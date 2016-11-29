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
	        $result=$query->result_array();
	        $size=$query->num_rows();
	        if($size>1)
	        {
	        	$this->db->select('*');
	        	$this->db->from('search');
	        	$this->db->where('area',$result[0]['area']);
	        	$this->db->where('status','1');
	        	$query2=$this->db->get();
	        	$row=$query2->num_rows();
	        	if($row==0)
	        	{
			        $data=array(
			        	'area'=>$area,
			        );
			        $this->db->insert("search",$data);
			        $id=$this->db->insert_id();
			        $sql="Update search set count=count+1 where id=".$id;
			        
			        $query1=$this->db->query($sql);
		        }
		        else
		        {
		        	$sql="Update search set count=count+1 where area='".$result[0]['area']."'";
		        	$query1=$this->db->query($sql);
		        }
	        }
	        return $result;

		}
		public function get_area_suggestion($area,$city)
		{
			$limit = 5;
			$sql = "SELECT * FROM `pg` WHERE
				    (area like '$area%'
				    OR area like '%$area%'
				    OR area like '$area%') 
					AND city = '$city'
					GROUP BY area
					
					ORDER BY CASE 
						WHEN area LIKE '$area%' THEN 1
						WHEN area LIKE '%$area%' THEN 2
						WHEN area LIKE '%$area' THEN 3
				 		ELSE 5 
				 	END, area ASC

			 	LIMIT $limit;";

		$query = $this->db->query($sql);
		$result_list = $query->result_array();
        return $result_list;
	}
}
?>