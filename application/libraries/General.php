<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 

class General {

		public function __construct()
        {
        	$this->CI = &get_instance();
            $this->CI->load->model('home_model');
        }
        public function set_alert($type, $message,$url='')
        {
            $this->CI->session->set_flashdata($type,$message);
            redirect($url);
        }
        
}
?>