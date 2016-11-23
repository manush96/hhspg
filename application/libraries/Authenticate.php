<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 

class Authenticate {

		public function __construct()
        {
        	$this->CI = &get_instance();
        	$this->CI->load->helper('url_helper');

        	$auth_arr = array(
                'admin' => array('index','login'),
                'home' => array('index','get_search_listing','get_category_listing','track_order'),
                'kart' => array('add_to_kart','remove_from_kart','get_no_of_items','payment'),
                'product' => array('view','get_available','give_rating'),
        		'user' => array('index','signin','signup','register','login','form_check','test')
        	);

          	$ctrl = $this->CI->router->fetch_class();
          	$fun = $this->CI->router->fetch_method();

    		if(!isset($auth_arr[$ctrl]))
    		{
    			$auth_arr[$ctrl] = array('');
    		}

            if(!in_array($fun, $auth_arr[$ctrl]))
            {
                if($ctrl == "admin")
                {
                    $session = $this->CI->session->userdata('admin_id');
                    if(!isset($session))
                    {
                        redirect('http://localhost/Kart/admin');
                    }
                }
                else
                {
                    $session = $this->CI->session->userdata('user_id');
                	if(!isset($session))
                	{
                		redirect('http://localhost/Kart');
                	}
                }
            }
        }
	
}