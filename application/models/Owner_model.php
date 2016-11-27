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
			$status=$result[0]->status;

			if(md5($password)==$pass and $status==1)
			{
				return $result[0]->id;
			}
			else if(md5($password)==$pass and $status==0)
			{
				$this->session->set_userdata('temp_owner_id',$result[0]->id);
				return -1;
			}
			else
			{
				return -2;
			}
		}
		public function otp_generation()
		{
			$a="0123456789";
			$shuffle=str_shuffle($a);
			$otp=substr($shuffle, 1,4);
			return $otp;
		}





}

?>