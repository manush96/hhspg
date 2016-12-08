<?php
class Home_model extends CI_Model
{
		public function __construct()
		{
			$this->load->database();
			$this->load->helper('url');
			$this->load->helper('cookie');
		}
		
		public function search_pg($city, $area, $gender)
		{
			$this->db->select('*');
	        $this->db->where('city',$city);
	        $this->db->where('gender',$gender);
	        $this->db->like('area',$area);

	        $query=$this->db->get('pg');
	        $result=$query->result_array();
	        $size=$query->num_rows();
	        if($size>1)
	        {
	        	$this->db->select('*');
	        	$this->db->from('search');
	        	$this->db->where('area',$result[0]['area']);
	        	#$this->db->where('status','1');
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
	public function get_pg_info($id)
	{
		$this->db->select('*');
		$this->db->where('id',$id);
		$query = $this->db->get('pg');
		$result = $query->row_array();
		return $result;
	}
	public function get_amenities($amenities)
	{
		$this->db->select('*');
		$where = 'id IN ('.$amenities.')';
		$this->db->where($where);
		$query = $this->db->get('amenities');
		$result = $query->result_array();
		return $result;
	}
	public function get_wishlist($id)
	{
		$myArr = array();
		
		if(!($id == NULL))
		{
			$this->db->select('shortlist');
			$this->db->where('id',$id);
			$query = $this->db->get('user');
			$result = $query->row_array();

			$myArr = explode(',', $result['shortlist']);
		}

		return $myArr;
	}
	public function add_to_wishlist($pg_id, $id)
	{
		$this->db->select('shortlist');
		$this->db->where('id',$id);
		$query = $this->db->get('user');
		$result = $query->row_array();

		$tmp_array = explode(',', $result['shortlist']);
		array_push($tmp_array, $pg_id);
		$tmp_array = array_unique(array_filter($tmp_array));

		$res = implode(',', $tmp_array);

		$data = array(
			'shortlist' => $res,
			);

		$this->db->where('id',$id);
		$this->db->update('user',$data);

	}

	public function remove_from_wishlist($pg_id, $id)
	{
		$this->db->select('shortlist');
		$this->db->where('id',$id);
		$query = $this->db->get('user');
		$result = $query->row_array();

		$tmp_array = explode(',', $result['shortlist']);
		if(($key = array_search($pg_id, $tmp_array)) !== false)
    		unset($tmp_array[$key]);
		$tmp_array = array_unique(array_filter($tmp_array));

		$res = implode(',', $tmp_array);

		$data = array(
			'shortlist' => $res,
			);

		$this->db->where('id',$id);
		$this->db->update('user',$data);
	}
	public function get_images($id)
	{
		$this->db->select('form_no');
		$this->db->where('id',$id);
		$query=$this->db->get('pg');
		$result=$query->result_array();
		$directory = "img/pg_images/".$result[0]['form_no']."/";
					$filecount = 0;
					$files = glob($directory . "*");
					if ($files){
					$filecount = count($files);
					}
		$images=array();
		for($i=1;$i<=$filecount;$i++)
		{
			$im=$result[0]['form_no']."/".$i.".jpg";
			array_push($images,$im);
		}
		return $images;
	}
}
?>