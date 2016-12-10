<?php
class User_model extends CI_Model
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
			$this->db->from('user');
			$this->db->where('email',$email);
			$query=$this->db->get();
			$result=$query->result();
			if($query->num_rows())
			{			
				$pass=$result[0]->password;
				$status=$result[0]->status;

				if(md5($password)==$pass and $status==1)
				{
					return $result[0]->id;
				}
				else if(md5($password)==$pass and $status==0)
				{
					$this->session->set_userdata('user_id',$result[0]->id);
					return -1;
				}
				else
				{
					return -2;
				}
			}
			else
			{
				return -2;
			}
		}

		public function set_active()
		{
			
			$id=$this->session->userdata('user_id');
			$this->db->where('id',$id);
			$data=array('status'=>'1');
			$this->db->update('user',$data);

		}
		public function register_user($post)
		{
			$name=$post['name'];
			$email=$post['email'];
			$contact=$post['phone'];
			$password=$post['password'];
			$this->db->select('id');
			$this->db->where('email',$email);
			$this->db->or_where('phone',$contact);
			$query=$this->db->get('user');
			if($query->num_rows()==0)
			{
				$data=array('username'=>$name,'email'=>$email,'phone'=>$contact,'password'=>md5($password));
				$this->db->insert('user',$data);

				$this->session->set_userdata('user_id',$this->db->insert_id());
				return 1;
			}
			else
			{
				return 0;
			}
		}

		public function otp_generation()
		{
			$a="0123456789";
			$shuffle=str_shuffle($a);
			$otp=substr($shuffle, 1,4);
			return $otp;
		}

		public function register($post)
		{
			$this->db->select('*');
	    	$this->db->where('email',$post['email']);
	    	$query=$this->db->get('user');
	    	$num=$query->num_rows();
	    	if($num==0)
	    	{
		    	$data=array
		    	(
		    		'username'=> $post['name'],
		    		'password'=> md5($post['password']),
		    		'email'=> $post['email'],
		    		'phone' => $post['phone']
		    	);
		    	if($this->db->insert('user',$data))
		    	{
		    		$insert_id = $this->db->insert_id();
		    		return $insert_id;
		    	}
		    	else
		    	{
		    		return 0;
		    	}    	
		    }
		    else
		    {
		    	return -1;
		    }
		}
		public function get_number($id)
		{
			$this->db->select('phone');
			$this->db->where('id',$id);
			$query=$this->db->get('user');
			$result=$query->result_array();
			return $result[0]['phone'];
		}
}
	
?>