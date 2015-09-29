<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Backoffice_lib {

    public function login($username,$password)
    {
    	$CI =& get_instance();
        $CI->load->model('backoffice_model','backoffice');
        $result = $CI->backoffice->login($username,$password);
        if ($result) {
            $data = array(
                'loggedIn' => true,
            );
            $CI->session->set_userdata('user_data', $data);
            return 1;
        }
    	return 0;
    }

    public function auth()
    {
        $CI = & get_instance();
        $data = $CI->session->userdata('user_data');
        if (isset($data['loggedIn']) && $data['loggedIn']) {
            return 1;
        }
        return 0;
    }
}