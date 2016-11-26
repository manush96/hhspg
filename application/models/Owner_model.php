<?php
class Owner_model extends CI_Model
{
		public function __construct()
		{
			$this->load->database();
			$this->load->helper('url');
			$this->load->helper('cookie');
		}
		public function check_creds($email,$password)
		{
		
			$this->db->select('*');
			$this->db->from('owner');
			$this->db->where('email',$email);
			$query=$this->db->get();
			$result=$query->result();
			$pass=$result[0]->password;
			if(md5($password)==$pass)
			{
				return $result[0]->id;
			}
			else
			{
				return -1;
			}
		}





}

?>