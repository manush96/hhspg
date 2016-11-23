<?php
class User_model extends CI_Model
{
		public function __construct()
		{
			$this->load->database();
			$this->load->helper('url');
			$this->load->helper('cookie');
		}
		public function login($email,$password)
		{
			$this->db->select('*');
			$this->db->from('user');
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
}
	
?>