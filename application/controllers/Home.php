<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	var $head;
	var $foot;

		public function __construct()
	{
		parent::__construct();
		$this->load->library(array('Data_lib','session'));
		$this->load->helper(array('url'));
		$data['regions'] = $this->data_lib->getRegions();
		if ($x = $this->input->cookie('region')) {
			$this->region = $x;
		}
		else {
			$this->region = $data['regions'][0]['region'];
			$cookie = array(
			    'name'   => 'region',
			    'value'  => $this->region,
			    'expire' => '0',
			    'path'   => '/',
			);
			$this->input->set_cookie($cookie);
		}
		$subCategory = $this->data_lib->getSubCategories();
		$data['isLoggedIn'] = $this->data_lib->auth();
		$data['csrf_token_name'] = $this->security->get_csrf_token_name();
		$data['csrf_token'] = $this->security->get_csrf_hash();
		$data['subCategory'] = [];
		foreach ($subCategory as $key => $value) {
			if(!array_key_exists($value['category'],$data['subCategory'])){
				$data['subCategory'][$value['category']] = [];
			}
			array_push($data['subCategory'][$value['category']], $value['subcategory']);
		}
		$data['region'] = $this->region;
		$this->head =  $this->load->view('common/head',$data,true);
		$this->foot =  $this->load->view('common/foot',[],true);
	}	

	public function index()
	{
		$deals = $this->data_lib->getPrimaryDeals($this->region);
		foreach ($deals as $key => $value) {
			foreach ($value as $key2 => $value2) {
				$deals[$key][$key2]['images'] = json_decode($value2['images'],true);
				$deals[$key][$key2]['city'] = json_decode($value2['city'],true);
				$deals[$key][$key2]['malls'] = json_decode($value2['malls'],true);
			}
		}
		$data['deals'] = $deals;
		$data['head'] = $this->head;
		$data['foot'] = $this->foot;
		$this->load->view('home', $data);
	}

	public function aboutus()
	{
		$data['head'] = $this->head;
		$data['foot'] = $this->foot;
		$content = $this->data_lib->getContent();
		$data['about'] = $content[0];
		$this->load->view('aboutus', $data);
	}

	public function merchant_account()
	{
		if($this->data_lib->auth()){
			redirect(base_url());
		}
		$data['head'] = $this->head;
		$data['foot'] = $this->foot;
		$this->load->view('merchant_account', $data);
	}

	public function merchant_add_offer()
	{		
		$data['head'] = $this->head;
		$data['foot'] = $this->foot;
		$data['malls'] = $this->data_lib->getMalls();
		$data['regions'] = $this->data_lib->getRegions();
		$categoryData = $this->data_lib->getCategoryData();
		foreach ($categoryData as $key => $value) {
			$x[''.$value['category']] = array();
		}
		foreach ($categoryData as $key => $value) {
			array_push($x[''.$value['category']],$value['subcategory']);
		}
		$data['categoryData'] = $x;
		$this->load->view('merchant_add_offer', $data);
	}

	public function getCouponForUser()
	{		
		$coupon_id = '';
		$user_id = '';
		$coupon_type = '';
		$coupon_code = '';
		
		if ($x = $this->input->post('coupon_id')) {
			$coupon_id = $x;
		}
		if ($x = $this->input->post('user_id')) {
			$user_id = $x;
		}
		if ($x = $this->input->post('coupon_type')) {
			$coupon_type = $x;
		}
		if ($x = $this->input->post('coupon_code')) {
			$coupon_code = $x;
		}

		if($coupon_type ===  "variable"){
		$this->load->model('data_model');
    	$count = $this->data_model->getCouponCount($coupon_id);
    	$new_count = $count + 1;
    	$coupon_code = $coupon_code.$new_count; }

    	$data = array(
				'coupon_id' => $coupon_id,
				'user_id' => $user_id,
				'coupon_code' => $coupon_code
				);
		$result = $this->data_lib->addUserCoupon($data);
		if ($result) {
			redirect(base_url('Home/user_coupons'));
		}
		else {
			die("Some error Occured..:(");
		}



	}

	public function saveDeal()
	{
		$this->load->library('upload');
		$title = '';
		$category = '';
		$subcategory = '';
		$brand = '';
		$brandDetails = '';
		$region = '';
		$activeCities = '';
		$dealDetails = '';
		$dealLocations = '';
		$startDate = '';
		$endDate = '';
		$malls = '';
		$merchant_id = '';
		$images = array('Image1'=>'','Image2'=>'','Image3'=>'','Image4'=>'','Image5'=>'');
		if ($x = $this->input->post('title')) {
			$title = $x;
		}
		if ($x = $this->input->post('category')) {
			$category = $x;
		}
		if ($x = $this->input->post('subcategory')) {
			$subcategory = $x;
		}
		if ($x = $this->input->post('activeCities')) {
			$activeCities = $x;
		}
		if ($x = $this->input->post('brand')) {
			$brand = $x;
		}
		if ($x = $this->input->post('brandDetails')) {
			$brandDetails = $x;
		}
		if ($x = $this->input->post('region')) {
			$region = $x;
		}
		
		if ($x = $this->input->post('dealDetails')) {
			$dealDetails = $x;
		}
		if ($x = $this->input->post('merchant_id')) {
			$merchant_id = $x;
		}
		if ($x = $this->input->post('dealLocations')) {
			$dealLocations = $x;
		}
		if ($x = $this->input->post('startDate')) {
			$startDate = $x;
		}
		if ($x = $this->input->post('endDate')) {
			$endDate = $x;
		}
		if ($x = $this->input->post('malls')) {
			$malls = $x;
		}
		if ($title==''||$category==''||$subcategory==''||$region==''||$dealDetails==''||$startDate=='') {
			die("Incomple Details");
		}
		$added_by_merchant = 1;
		$config['upload_path'] = 'assets/uploads/';
		$config['allowed_types'] = 'gif|jpg|png|JPG';
		$config['max_size']	= '1000';
		$config['max_width'] = '4000';
		$config['max_height'] = '4000';
		$this->upload->initialize($config);
		for ($i=0;$i<5;$i++) {
			if ($this->upload->do_upload('Image'.($i+1))) {
				$x = $this->upload->data();
				$images['Image'.($i+1)] = '/assets/uploads/'.$x['file_name'];
			}
		}
		$activeCities = json_encode($activeCities);
		$malls = json_encode($malls);
		$images = json_encode($images);
		$subcategory = json_encode($subcategory);
		$active = 0;
			$data = array(
				'title' => $title,
				'brand' => $brand,
				'brand_details' => $brandDetails,
				'category' => $category,
				'subcategory' => $subcategory,
				'city' => $activeCities,
				'merchant_id' => $merchant_id,
				'details' => $dealDetails,
				'region' => $region,
				'locations' => $dealLocations,
				'malls' => $malls,
				'start_date' => $startDate,
				'added_by_merchant' => $added_by_merchant,
				'end_date' => $endDate,
				'images' => $images,
				'city' => $activeCities,
				'active' => $active
				);
		$result = $this->data_lib->saveOffer($data);
		if ($result) {
			redirect(base_url('Home/merchant_offers_added'));
		}
		else {
			die("Some error Occured..:(");
		}
	}

	public function addCoupon()
	{
		$dealID = '';
		$couponType = '';
		$coupon_code = '';
		$coupon_details = '';
		$merchant_id = '';

		if ($x = $this->input->post('deal_id')) {
			$dealID = $x;
		}
		if ($x = $this->input->post('couponType')) {
			$couponType = $x;
		}
		if ($x = $this->input->post('coupon_code')) {
			$coupon_code = $x;
		}
		if ($x = $this->input->post('merchant_id')) {
			$merchant_id = $x;
		}
		if ($x = $this->input->post('coupon_details')) {
			$coupon_details = $x;
		}
	
		if ($dealID==''||$couponType==''||$coupon_details=='') {
			die("Incomple Details");
		}

		if ($couponType==="variable"){
			$coupon_code="DD".$dealID."cou".$merchant_id;
		}
		
			$data = array(
				'deal_id' => $dealID,
				'coupon_type' => $couponType,
				'coupon_code' => $coupon_code,
				'coupon_details' => $coupon_details,
				'merchant_id' => $merchant_id
				);
		$result = $this->data_lib->addCoupon($data);
		if ($result) {
			redirect(base_url('Home/merchant_add_coupon'));
		}
		else {
			die("Some error Occured..:(");
		}
	}



	public function merchant_register()
	{
		if($this->data_lib->auth()){
			redirect(base_url());
		}		
		$data['head'] = $this->head;
		$data['foot'] = $this->foot;
		$this->load->view('merchant_register', $data);
	}

	public function review()
	{
		if (!$this->data_lib->isLoggedIn()) {
			redirect(base_url('/Home/login'));
		}
		$review = '';
		$dealId = '';
		$url = '';
		if ($x = $this->input->post('review')) {
			$review = $x;
		}
		if ($x = $this->input->post('dealId')) {
			$dealId = $x;
		}
		if ($x = $this->input->post('url')) {
			$url = $x;
		}
		if ($review == '' || $dealId == '') {
			die('Insufficent Details');
		}
		$userdata = $this->session->userdata('user_data');
		$id = $userdata['id'];
		$name = $userdata['name'];
		$data = array(
			'user_id'=>$id,
			'review'=>$review,
			'deal_id'=>$dealId,
			'user_name' => $name
			);
		$result = $this->data_lib->saveReview($data);
		if ($result) {
			redirect(base_url('/deal/'.$url));
		}
		else {
			die('Some error occured.. :(');
		}
	}

	public function registerMerchant(){
		$data['name'] = ($this->input->post('name'))?$this->input->post('name'):'';
		$data['email'] = ($this->input->post('email'))?$this->input->post('email'):'';
		$data['password'] = ($this->input->post('password'))?$this->input->post('password'):'';
		$data['contact'] = ($this->input->post('contact'))?$this->input->post('contact'):'';
		$data['region'] = ($this->input->post('region'))?$this->input->post('region'):'';
		if($data['name'] == '' || $data['email'] == '' || $data['password'] == '' || $data['contact'] == '' || $data['region'] == ''){
			die('Incomplete Details');
		}
		$result = $this->data_lib->checkMailExist($data['email'],'merchant');
		if ($result) {
			die('Email already exist..');
		}
		$result = $this->data_lib->registerMerchant($data);
		if ($result) {
			$result = $this->data_lib->login($data['email'],$data['password'],'merchant');
			if ($result) {
				redirect(base_url());
			}
			else {
				die('Some Error occured');
			}			
		}		
	}

	public function merchantLogin(){
		$email = ($this->input->post('email'))?$this->input->post('email'):'';
		$password = ($this->input->post('password'))?$this->input->post('password'):'';

		if ($email==''||$password=='') {
			die("Incomplete Details");
		}		

		$result = $this->data_lib->login($email,$password,'merchant');

		if ($result) {
			redirect(base_url());
		}
		else {
			die('Some Error occured');
		}			
	}

	public function user_change_password()
	{
		if($this->input->post('submit') == 'submitted') {
		$id = $this->input->post('id');
		 $cpass = $this->input->post('cpass');
      $npass = $this->input->post('npass');
      $conpass = $this->input->post('conpass');

      $this->load->model('data_model');
    $pass = $this->data_model->getUserPassword($id);
   
    if ($pass['password'] == $cpass)
    {
      if ($npass == $conpass){
      $data = array('password'=> $npass);
      	$result = $this->load->model('data_model');
        $result = $this->data_model->changeUserPassword($data,$id);
		if ($result) {
			
			redirect(base_url('/user_change_password'));
		}
		else {
			die("Some error Occured..:(");
		}
      }
      else
      {
       $this->session->set_flashdata('errorMsg','New Password not matches your re-typed password');
   redirect(base_url('/user_change_password'));
      }
      
  }
  else
  {
    $this->session->set_flashdata('errorMsg','Current Password Entered is Incorrect');
    redirect(base_url('/user_change_password'));
  }}
		$data['head'] = $this->head;
		$data['foot'] = $this->foot;
		$this->load->view('user_change_password', $data);
	}

	public function user_profile()
	{
		if($this->input->post('submit') == 'submitted') {
		$email = '';
		$mobile = '';
		$id = '';
		$this->load->model('data_model');
		$this->data_model->getSessionData($id);
		if ($x = $this->input->post('email')) {
			$email = $x;
		}
		if ($x = $this->input->post('mobile')) {
			$mobile = $x;
		}
		if ($x = $this->input->post('id')) {
			$id = $x;
		}
		$data = array(
			'mobile' => trim($mobile),
			'email' => trim($email),
			'id' => trim($id)
			);
		$result = $this->data_lib->updateProfile($data);
		$result1 = $this->data_model->getSessionData($id);
		$this->session->set_userdata('user_data', $result1[0]); 
		if ($result) {
			redirect(base_url('/user_profile'));
		}
		else {
			die("Some error Occured..:(");
		}
		
	}
		$data['head'] = $this->head;
		$data['foot'] = $this->foot;
		$this->load->view('user_profile', $data);
	}

		
	public function contact_us()
	{
		$data['head'] = $this->head;
		$data['foot'] = $this->foot;
		$this->load->library('email');
		$config = Array(
	     'protocol' => 'smtp',
	     'smtp_host' => 'ssl://smtp.googlemail.com',
	     'smtp_timeout' => '7',
	     'smtp_port' => '465',
	     'smtp_user' => 'discountsdekho@gmail.com', // change it to yours
	     'smtp_pass' => 'discounts@999', // change it to yours
	     'mailtype' => 'html',
	     'newline'   => "\r\n",
	     'charset' => 'utf-8',
	     'wordwrap' => TRUE
		);
		$this->email->initialize($config);
		if($this->input->post('submit')) {
			$this->email->from('discountsdekho@gmail.com', "Admin Team");
			$this->email->to("v.nikhil323@gmail.com");
			$this->email->subject("Contact Us");
			$this->email->message('<p><strong>Email</strong> : '.$this->input->post('email').'</p><p><strong>Message</strong> : '.$this->input->post('message').'</p><p><strong>Mobile</strong> : '.$this->input->post('mobile').'</p><p><strong>Name</strong> : '.$this->input->post('name').'</p>');
		  	$this->email->send();
		}
		$this->load->view('contact_us', $data);
	}


		public function privacy_policy()
	{
		$data['head'] = $this->head;
		$data['foot'] = $this->foot;
		$content = $this->data_lib->getContent();
		$data['privacy'] = $content[1];
		$this->load->view('privacy_policy', $data);
	}

	public function disclaimer()
	{
		$data['head'] = $this->head;
		$data['foot'] = $this->foot;
		$content = $this->data_lib->getContent();
		$data['disclaimer'] = $content[2];
		$this->load->view('disclaimer', $data);
	}



		public function user_coupons()
	{
		$data['head'] = $this->head;
		$data['foot'] = $this->foot;
		$user_id = $_SESSION['user_data']['id'];
		$this->load->model('data_model');
		$data['user_coupons'] = $this->data_model->getUserCoupons($user_id);
		foreach ($data['user_coupons'] as $key => $value) {
		
			$data['user_coupons'][$key]['deal_title'] = $this->data_lib->getDealData($this->region,$value['deal_id'])[0]['title'];
		}
		$this->load->view('user_coupons', $data);
	}

	public function category($category = '')
	{
		if ($category == '') {
			die('No Category Given');
		}
		$data['head'] = $this->head;
		$data['foot'] = $this->foot;
		$category = urldecode($category);
		$data['categorydeals'] = $this->data_lib->getCategoryDeals($this->region,$category);
		$data['category'] = $category;
		$data['malls'] = $this->data_lib->getMalls();
		$this->load->view('category', $data);
	}

	public function subscribe(){
		$email = '';

		if($x = $this->input->post('email')){
			$email = $x;
		}
		
		$result = $this->data_lib->subscribe($email);
		if($result){
			redirect(base_url('/Home'));
		}
		else{
			die("Some error occured");
		}
	}

	public function subcategory($subcategory = '')
	{
		if ($subcategory == '') {
			die('No Subcategory Given');
		}else{
			$subcategory = urldecode($subcategory);
		}
		$data['head'] = $this->head;
		$data['foot'] = $this->foot;
		$data['malls'] = $this->data_lib->getMalls();
		$subcategorydeals = $this->data_lib->getSubcategoryDeals($this->region,$subcategory);
		$data['subcategorydeals'] = $subcategorydeals;
		$data['subcategory'] = $subcategory;
		if (count($subcategorydeals) == 0) {
			$data['category'] = $this->data_lib->getCategoryFromSubcateogry($subcategory)[0]['category'];
		}
		else {
			$data['category'] = $subcategorydeals[0]['category'];
		}
		$this->load->view('subcategory',$data);
	}

	public function getFilteredDealsByCategory(){
		$category = ($this->input->get('category'))?$this->input->get('category'):'';
		$subcategory = ($this->input->get('subcategory'))?$this->input->get('subcategory'):'';
		$city = ($this->input->get('city'))?$this->input->get('city'):'';
		$malls = ($this->input->get('malls'))?$this->input->get('malls'):'';
		$coupons = ($this->input->get('coupons'))?$this->input->get('coupons'):'';
		if($category == ''){
			return;
		}
		$where = array(
							'malls'=>($malls)?$malls:[],
							'city'=>($city)?$city:[],
							'subcategory'=>($subcategory)?$subcategory:[]
						);
		$result = $this->data_lib->getCategoryDeals($this->region,$category,$where,$coupons); 
		if($result == []){
			echo '';
		}else{
			$dealsHtml = ''; 
      foreach ($result as $key => $value) { 
          $value['images'] = json_decode(($value['images']),true);
          $dealsHtml .= "<div class=\"col-lg-4\">
             <div class=\"dealBox\">
              <div class=\"heading\">
                  <h2>".$value['brand']."</h2>
              </div>
              <div class=\"body\">
                  <div class=\"img\">
                      <img src=\"".$value['images']['Image1']."\">
                  </div>
                  <div class=\"details\">
                      <div class=\"detailHead\">
                          <p><strong>".$value['title']."</strong></p>
                      </div>
                      <div class=\"detailBody\">
                          <p><strong>Offer Starts on:</strong> <span>".date('d-F-Y',strtotime($value['start_date']))."</span></p>
                          <p><strong>Offer Ends on:</strong> <span>".(($value['end_date'] != "0000-00-00")?date('d-F-Y',strtotime($value['end_date'])):'Limited period offer')."</span></p>
                      </div>
                  </div>
              </div>
              <div class=\"viewButton\">
                  <a href=\"/deal/".preg_replace('/\s+/','-',$value['title']).'-'.$value['id']."\">View Deal</a>
              </div>
          </div>
      </div>";
      }			
      echo $dealsHtml;
		}
	}

	public function getFilteredDealsBySubcategory(){
		$category = ($this->input->get('category'))?$this->input->get('category'):'';
		$subcategory = ($this->input->get('subcategory'))?$this->input->get('subcategory'):'';
		$city = ($this->input->get('city'))?$this->input->get('city'):'';
		$malls = ($this->input->get('malls'))?$this->input->get('malls'):'';
		$coupons = ($this->input->get('coupons'))?$this->input->get('coupons'):'';
		if($category == '' || $subcategory == ''){
			return;
		}
		$where = array(
							'malls'=>($malls)?$malls:[],
							'city'=>($city)?$city:[]
						);
		$result = $this->data_lib->getSubcategoryDeals($this->region,$subcategory,$where,$coupons); 
		if($result == []){
			echo '';
		}else{
			$dealsHtml = ''; 
      foreach ($result as $key => $value) { 
          $value['images'] = json_decode(($value['images']),true);
          $dealsHtml .= "<div class=\"col-lg-4\">
             <div class=\"dealBox\">
              <div class=\"heading\">
                  <h2>".$value['brand']."</h2>
              </div>
              <div class=\"body\">
                  <div class=\"img\">
                      <img src=\"".$value['images']['Image1']."\">
                  </div>
                  <div class=\"details\">
                      <div class=\"detailHead\">
                          <p><strong>".$value['title']."</strong></p>
                      </div>
                      <div class=\"detailBody\">
                          <p><strong>Offer Starts on:</strong> <span>".date('d-F-Y',strtotime($value['start_date']))."</span></p>
                          <p><strong>Offer Ends on:</strong> <span>".(($value['end_date'] != "0000-00-00")?date('d-F-Y',strtotime($value['end_date'])):'Limited period offer')."</span></p>
                      </div>
                  </div>
              </div>
              <div class=\"viewButton\">
                  <a href=\"/deal/".preg_replace('/\s+/','-',$value['title']).'-'.$value['id']."\">View Deal</a>
              </div>
          </div>
      </div>";
      }			
      echo $dealsHtml;
		}
	}

	public function search()
	{
		$data['region'] = ($this->input->get('region'))?$this->input->get('region'):$this->region;
		$data['query'] = ($this->input->get('query'))?$this->input->get('query'):'';
		$data['category'] = ($this->input->get('category'))?$this->input->get('category'):[];
		$data['city'] = ($this->input->get('subregion'))?$this->input->get('subregion'):[];
		$data['subcategory'] = ($this->input->get('subcategory'))?$this->input->get('subcategory'):'';
		$data['category'] = (is_array($data['category']))?$data['category']:[$data['category']];
		$data['city'] = (is_array($data['city']))?$data['city']:[$data['city']];
		$where = array(
							'malls'=>[],
							'city'=>($data['city'])?$data['city']:[]
						);
		$data['deals'] = $this->data_lib->search($data['region'],$data['query'],$data['category'],$data['subcategory'],$where);
		$data['head'] = $this->head;
		$data['malls'] = $this->data_lib->getMalls();
		$data['foot'] = $this->foot;
		$this->load->view('search', $data);
	}

	public function filteredSearchData()
	{
		$data['region'] = ($this->input->get('region'))?$this->input->get('region'):$this->region;
		$data['query'] = ($this->input->get('query'))?$this->input->get('query'):'';
		$data['category'] = ($this->input->get('category'))?$this->input->get('category'):[];
		$data['city'] = ($this->input->get('city'))?$this->input->get('city'):[];
		$data['malls'] = ($this->input->get('malls'))?$this->input->get('malls'):'';
		$data['subcategory'] = ($this->input->get('subcategory'))?$this->input->get('subcategory'):'';
		$data['coupons'] = ($this->input->get('coupons'))?$this->input->get('coupons'):'';
		$data['category'] = (is_array($data['category']))?$data['category']:[$data['category']];
		$data['city'] = (is_array($data['city']))?$data['city']:[$data['city']];
		$where = array(
							'malls'=>($data['malls'])?$data['malls']:[],
							'city'=>($data['city'])?$data['city']:[]
						);
		$result = $this->data_lib->search($data['region'],$data['query'],$data['category'],$data['subcategory'],$where,$data['coupons']); 	
		if($result == []){
			echo '';
		}else{
			$dealsHtml = ''; 
      foreach ($result as $key => $value) { 
          $value['images'] = json_decode(($value['images']),true);
          $dealsHtml .= "<div class=\"col-lg-4\">
             <div class=\"dealBox\">
              <div class=\"heading\">
                  <h2>".$value['brand']."</h2>
              </div>
              <div class=\"body\">
                  <div class=\"img\">
                      <img src=\"".$value['images']['Image1']."\">
                  </div>
                  <div class=\"details\">
                      <div class=\"detailHead\">
                          <p><strong>".$value['title']."</strong></p>
                      </div>
                      <div class=\"detailBody\">
                          <p><strong>Offer Starts on:</strong> <span>".date('d-F-Y',strtotime($value['start_date']))."</span></p>
                          <p><strong>Offer Ends on:</strong> <span>".(($value['end_date'] != "0000-00-00")?date('d-F-Y',strtotime($value['end_date'])):'Limited period offer')."</span></p>
                      </div>
                  </div>
              </div>
              <div class=\"viewButton\">
                  <a href=\"/deal/".preg_replace('/\s+/','-',$value['title']).'-'.$value['id']."\">View Deal</a>
              </div>
          </div>
      </div>";
      }			
      echo $dealsHtml;
		}
	}

	public function faq()
	{
		$data['head'] = $this->head;
		$data['foot'] = $this->foot;
		$data['faq'] = $this->data_lib->getFaq();
		$this->load->view('faq', $data);
	}

	public function advertise()
	{
		$data['head'] = $this->head;
		$data['foot'] = $this->foot;
		$this->load->view('advertise', $data);
	}

	public function login(){
		$email = ($this->input->post('email'))?$this->input->post('email'):'';
		$password = ($this->input->post('password'))?$this->input->post('password'):'';

		if ($email==''||$password=='') {
			die("Incomplete Details");
		}		

		$result = $this->data_lib->login($email,$password);

		if ($result) {
			redirect(base_url());
		}
		else {
			die('Some Error occured');
		}		

	}

	public function logout()
	{
    $this->session->set_userdata('userLoggedIn', false);
    $this->session->set_userdata('merchantLoggedIn',false);
    $this->session->set_userdata('user_data', []);
		redirect(base_url());
	}	

	public function signup() {
		$name = ($this->input->post('name'))?$this->input->post('name'):'';
		$email = ($this->input->post('email'))?$this->input->post('email'):'';
		$mobile = ($this->input->post('mobile'))?$this->input->post('mobile'):'';
		$dob = ($this->input->post('dob'))?$this->input->post('dob'):'';
		$password = ($this->input->post('password'))?$this->input->post('password'):'';
		$city = ($this->input->post('city'))?$this->input->post('city'):'';
		$gender = ($this->input->post('gender'))?$this->input->post('gender'):'';
			
		if ($name==''||$email==''||$mobile==''||$dob==''||$password==''||$city==''||$gender=='') {
			die("Incomplete Details");
		}

		$data = array(
			'name' => $name,
			'email' => $email,
			'mobile' => $mobile,
			'dob' => $dob,
			'sex' => $gender,
			'city' => $city,
			'password' => $password
			);
		
		$result = $this->data_lib->checkMailExist($email,'userdb');
		if ($result) {
			die('Email already exist..');
		}
		$result = $this->data_lib->signup($data);
		if ($result) {
			$result = $this->data_lib->login($email,$password,'userdb');
			if ($result) {
				redirect(base_url());
			}
			else {
				die('Some Error occured');
			}			
		}
	}
	
	public function listoffers()
	{
		$data['head'] = $this->head;
		$data['foot'] = $this->foot;
		$this->load->library('email');
		$config = Array(
	     'protocol' => 'smtp',
	     'smtp_host' => 'ssl://smtp.googlemail.com',
	     'smtp_timeout' => '7',
	     'smtp_port' => '465',
	     'smtp_user' => 'discountsdekho@gmail.com', // change it to yours
	     'smtp_pass' => 'discounts@999', // change it to yours
	     'mailtype' => 'html',
	     'newline'   => "\r\n",
	     'charset' => 'utf-8',
	     'wordwrap' => TRUE
		);
		$this->email->initialize($config);
		if($this->input->post('submit')) {
			$this->email->from('discountsdekho@gmail.com', "Admin Team");
			$this->email->to("v.nikhil323@gmail.com");
			$this->email->subject("Sales");
			$this->email->message('<p><strong>Email</strong> : '.$this->input->post('email').'</p><p><strong>Company Name</strong> : '.$this->input->post('company_name').'</p><p><strong>Brand Name</strong> : '.$this->input->post('brand_name').'</p><p><strong>Mobile</strong> : '.$this->input->post('mobile').'</p><p><strong>Link</strong> : '.$this->input->post('link').'</p>');
		  	$this->email->send();
		}
		$this->load->view('listoffers', $data);
	}

	public function media()
	{
		$data['head'] = $this->head;
		$data['foot'] = $this->foot;
		$this->load->model('data_model');
		$data['media'] = $this->data_model->getMedia();
		$this->load->view('media', $data);
	}

	public function merchant_add_coupon()
	{
		$data['head'] = $this->head;
		$data['foot'] = $this->foot;
		$merchant_id = $_SESSION['user_data']['merchant_id'];
		$this->load->model('data_model');
		$data['deals_without_coupons'] = $this->data_model->getDealsWithoutCoupons($merchant_id);
		$this->load->view('merchant_add_coupon', $data);
	}

	public function merchant_settings()
	{
		if($this->input->post('submit') == 'submitted') {
		$id = $this->input->post('id');
		 $cpass = $this->input->post('cpass');
      $npass = $this->input->post('npass');
      $conpass = $this->input->post('conpass');

      $this->load->model('data_model');
    $pass = $this->data_model->getMerchantPassword($id);
   
    if ($pass['password'] == $cpass)
    {
      if ($npass == $conpass){
      $data = array('password'=> $npass);
      	$result = $this->load->model('data_model');
        $result = $this->data_model->changeMerchantPassword($data,$id);
		if ($result) {
			
			redirect(base_url('/merchant_settings'));
		}
		else {
			die("Some error Occured..:(");
		}
      }
      else
      {
       $this->session->set_flashdata('errorMsg','New Password not matches your re-typed password');
   redirect(base_url('/merchant_settings'));
      }
      
  }
  else
  {
    $this->session->set_flashdata('errorMsg','Current Password Entered is Incorrect');
    redirect(base_url('/merchant_settings'));
  }}
  		$data['head'] = $this->head;
		$data['foot'] = $this->foot;
		$this->load->view('merchant_settings', $data);
	}

	public function merchant_offers_added()
	{
		$data['head'] = $this->head;
		$data['foot'] = $this->foot;
		$merchant_id = $_SESSION['user_data']['merchant_id'];
		$this->load->model('data_model');
		$data['deals_by_merchant'] = $this->data_model->getDealsByMerchant($merchant_id);
		$this->load->view('merchant_offers_added', $data);
	}

	public function users_with_coupons()
	{
		$data['head'] = $this->head;
		$data['foot'] = $this->foot;
		$merchant_id = $_SESSION['user_data']['merchant_id'];
		$this->load->model('data_model');
		$data['users_with_coupons'] = $this->data_model->getUsersWithCoupons($merchant_id);
		foreach ($data['users_with_coupons'] as $key => $value) {
			$data['users_with_coupons'][$key]['userData'] = $this->data_model->getUserById($value['user_id'])[0];
		}
		//var_dump($data['users_with_coupons']);die;
		$this->load->view('users_with_coupons', $data);
	}

	

public function redeemCoupon($id ='')
	{
		
		if ($id =='') {
			die('Incomple Details');
		}
		$result = $this->data_lib->redeemCoupon($id);
		if ($result) {
			redirect(base_url('/Home/users_with_coupons'));
		}
		else {
			die('Some error Occured..:(');
		}

	}

	public function deleteCoupon($id ='')
	{
		
		if ($id =='') {
			die('Incomple Details');
		}
		$result = $this->data_lib->deleteCoupon($id);
		if ($result) {
			redirect(base_url('/Home/merchant_coupons_issued'));
		}
		else {
			die('Some error Occured..:(');
		}

	}

	public function merchant_coupons_issued()
	{
		$merchant_id = $_SESSION['user_data']['merchant_id'];
		$this->load->model('data_model');
		$data['coupons_by_merchant'] = $this->data_model->getCouponsByMerchant($merchant_id);
		$data['head'] = $this->head;
		$data['foot'] = $this->foot;
		foreach ($data['coupons_by_merchant'] as $key => $value) {
			
			$data['coupons_by_merchant'][$key]['deal_title'] = $this->data_lib->getDealData($this->region,$value['deal_id'])[0]['title'];
		}
		
		$this->load->view('merchant_coupons_issued', $data);
	}

	public function deal($slug = '')
	{
		if ($slug == '') {
			die('Invalid URL given');
		}else{
			preg_match ('/([a-zA-z0-9-]+)-([0-9]+)/',$slug,$matches);
			if($matches){
				$title = str_replace('-', ' ', $matches[1]);
				$id = $matches[2];
			}else{
				die('No Id Given');
			}
		}
		$data['isLoggedIn'] = $this->data_lib->isLoggedIn();
		$data['head'] = $this->head;
		$data['foot'] = $this->foot;
		$dealData = $this->data_lib->getDealData($this->region,$id);
		$this->load->model('data_model');
		$data['couponData'] = $this->data_model->getCouponData($id);
		$data['review'] = $this->data_model->getReview($id);
		if ($dealData == array()) {
			redirect(base_url());
		}
		$dealData = $dealData[0];
		$dealData['city'] = json_decode($dealData['city']);
		$dealData['malls'] = json_decode($dealData['malls']);
		$dealData['images'] = json_decode($dealData['images'],true);
		if ($x = json_decode($dealData['subcategory'])) {
			$str = '';
			foreach ($x as $key => $value) {
				if ($key == (count($x)-1)) {
					$str .= $value;
				}
				else {
					$str .= $value.',';
				}
			}
			$dealData['subcategory'] = $str;
		}
		$dealData['start_date'] = date('d-F-Y',strtotime($dealData['start_date']));
		if ($dealData['end_date'] != '0000-00-00') {
			$dealData['end_date'] = date('d-F-Y',strtotime($dealData['end_date']));
		}
		else {
			$dealData['end_date'] = 'Limited Period Offer';	
		}
		$headData['csrf_token_name'] = $this->security->get_csrf_token_name();
		$headData['csrf_token'] = $this->security->get_csrf_hash();
		$data['dealData'] = $dealData;
		$this->load->view('deal',$data);
	}

	public function testimonials()
	{
		$data['head'] = $this->head;
		$data['foot'] = $this->foot;
		$data['testimonials'] = $this->data_lib->getTestimonials();
		$this->load->view('testimonials', $data);
	}

	public function delete($type ='',$id ='')
	{
		if ($type == '' || $id =='') {
			die('Incomple Details');
		}
		$result = $this->data_lib->delete($type,$id);
		if ($result) {
			redirect(base_url('Home/merchant_offers_added'));
		}
		else {
			die('Some error Occured..:(');
		}

	}

}
