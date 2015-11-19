<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Twitter extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('session');
    $this->load->library(array('twconnect'));
		$this->load->helper('url');
	}
	public function index()
	{
		if($this->session->userdata('login') == true){
			redirect('Twitter/profile');
		}
		
		$this->load->view('welcome_message');
	}
	
	public function redirect() {

		if($this->session->userdata('login') == true){
			redirect('Twitter/profile');
		}
		
		$ok = $this->twconnect->twredirect('Twitter/callback');

		if (!$ok) {
			echo 'Could not connect to Twitter. Refresh the page or try again later.';
		}
		
	}


	public function callback() {
		
		if($this->session->userdata('login') == true){
			redirect('Twitter/profile');
		}
		
		$ok = $this->twconnect->twprocess_callback();
		
		if ( $ok ) { redirect('Twitter/success'); }
			else redirect ('Twitter/failure');
			
	}


	public function success() {

		if($this->session->userdata('login') == true){
			redirect('Twitter/profile');
		}
		
		$this->twconnect->twaccount_verify_credentials();

		
		$user_profile = $this->twconnect->tw_user_info;
		
		$this->session->set_userdata('login',true);
		

		$arr = array(
			'id' => $user_profile->id,
			'name' => $user_profile->name,
			'screen_name' => $user_profile->screen_name,
			'location' => $user_profile->location,
			'email' => $user_profile->email,
			'description' => $user_profile->description,
			'profile_image_url' => $user_profile->profile_image_url,
		);
		
		$this->session->set_userdata('user_profile',$arr);
		
		redirect('Twitter/profile');
		
	}



	public function failure() {

		if($this->session->userdata('login') == true){
			redirect('Twitter/profile');
		}
		
		echo '<p>Twitter connect failed</p>';
		echo '<p><a href="' . base_url() . 'Twitter/logout">Try again!</a></p>';
	}
	
	public function profile(){
		if($this->session->userdata('login') != true){
			redirect('');
		}
		$contents['user_profile'] = $this->session->userdata('user_profile');
		$this->load->view('profile',$contents);
		
	}
	
	public function logout(){
		$this->session->sess_destroy();
		redirect('');
		
	}
}
