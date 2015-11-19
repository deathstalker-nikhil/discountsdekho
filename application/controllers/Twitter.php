<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Twitter extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('session');
    $this->load->library(array('twconnect'));
		$this->load->helper('url');
	}
	
	public function redirect() {		
		$ok = $this->twconnect->twredirect('Twitter/callback');
		if (!$ok) {
			echo 'Could not connect to Twitter. Refresh the page or try again later.';
		}
	}

	public function callback() {
		$ok = $this->twconnect->twprocess_callback();
		if ( $ok ) { redirect('Twitter/success'); }
		else redirect ('Twitter/failure');	
	}

	public function success() {
		$this->twconnect->twaccount_verify_credentials();
		$user_profile = $this->twconnect->tw_user_info;		
		$arr = array(
			'id' => $user_profile->id,
			// 'name' => $user_profile->name,
			// 'screen_name' => $user_profile->screen_name,
			// 'location' => $user_profile->location,
			// 'email' => $user_profile->email,
			// 'description' => $user_profile->description,
			// 'profile_image_url' => $user_profile->profile_image_url,
		);
		$this->session->set_flashdata('twitter_id',$arr['id']);
		if($this->session->userdata('userLoggedIn') == true){
				$this->load->model('data_model','data');
				//insert twitter id in db
				$this->data->insertTwitterId($arr['id'],$this->session->userdata('user_data')['email']);
				$this->session->set_flashdata('message', 'Twitter account added');
				redirect(base_url('user_profile'));
		}
		redirect(base_url('home/login'));
	}

	public function failure() {		
		$this->session->set_flashdata('message', 'Twitter connect failed');
		redirect(base_url());
	}
}
