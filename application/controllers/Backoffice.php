<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Backoffice extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library(array('session','Backoffice_lib','Data_lib'));
		$this->load->helper('url');
	}

	public function index()
	{
		if (!$this->backoffice_lib->auth()) {
			redirect(base_url('backoffice/login'));
		}
		redirect(base_url('backoffice/deals'));
	}

	public function login()
	{
		if ($this->backoffice_lib->auth()) {
			redirect(base_url('backoffice'));
		}
		$data['message'] = '';
		if ($x = $this->session->flashdata('errorMessage')) {
			$data['message'] = $x;
		}
		$data['csrf_token_name'] = $this->security->get_csrf_token_name();
		$data['csrf_token'] = $this->security->get_csrf_hash();
		$this->load->view('backoffice/login',$data);
	}

	public function doLogin()
	{
		if ($this->backoffice_lib->auth()) {
			redirect(base_url('backoffice'));
		}
		$username = '';
		$password = '';
		if ($x = $this->input->post('username')) {
			$username = $x;
		}
		if ($x = $this->input->post('password')) {
			$password = $x;
		}
		if($username == '' || $password == ''){
			$this->session->set_flashdata('errorMessage', 'Incomplete Details');
			redirect(base_url('backoffice/login'));
		}
		$result = $this->backoffice_lib->login($username,$password);
		if ($result) {
			redirect(base_url('backoffice'));
		}
		$this->session->set_flashdata('errorMessage', 'Invalid Details');
		redirect(base_url('backoffice/login'));
	}

	public function logout()
	{
		$data = array(
			'loggedIn' => false
			);
		$this->session->set_userdata('user_data', $data);
		redirect(base_url('backoffice/login'));
	}

	public function deals()
	{
		if (!$this->backoffice_lib->auth()) {
			redirect(base_url('backoffice/login'));
		}
		$data['csrf_token_name'] = $this->security->get_csrf_token_name();
		$data['csrf_token'] = $this->security->get_csrf_hash();
		$data['head'] = $this->load->view('backoffice/common/head',array(),true);
		$data['deals'] = $this->data_lib->getDeals();
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
		$this->load->view('backoffice/deals',$data);
	}

	public function malls()
	{
		if (!$this->backoffice_lib->auth()) {
			redirect(base_url('backoffice/login'));
		}
		$data['csrf_token_name'] = $this->security->get_csrf_token_name();
		$data['csrf_token'] = $this->security->get_csrf_hash();
		$data['head'] = $this->load->view('backoffice/common/head',array(),true);
		$data['malls'] = $this->data_lib->getMalls();
		$this->load->view('backoffice/malls',$data);
	}

	public function editDeals($id = '')
	{
		if (!$this->backoffice_lib->auth()) {
			redirect(base_url('backoffice/login'));
		}
		if ($id == '') {
			die("No Id given.. :(");
		}
		$data['csrf_token_name'] = $this->security->get_csrf_token_name();
		$data['csrf_token'] = $this->security->get_csrf_hash();
		$data['dealData'] = $this->data_lib->getDealData($id)[0];
		if ($x = json_decode($data['dealData']['subcategory'])) {
			$data['dealData']['subcategory'] = $x;
		}
		$data['dealData']['images'] = json_decode($data['dealData']['images'],true);
		$data['dealData']['city'] = json_decode($data['dealData']['city'],true);
		$data['dealData']['malls'] = json_decode($data['dealData']['malls'],true);
		$categoryData = $this->data_lib->getCategoryData();
		foreach ($categoryData as $key => $value) {
			$x[''.$value['category']] = array();
		}
		foreach ($categoryData as $key => $value) {
			array_push($x[''.$value['category']],$value['subcategory']);
		}
		$data['malls'] = $this->data_lib->getMalls();
		$data['categoryData'] = $x;
		$data['regions'] = $this->data_lib->getRegions();
		$data['head'] = $this->load->view('backoffice/common/head',array(),true);
		$this->load->view('backoffice/editdeal',$data);		
	}

	public function saveDeal()
	{
		if (!$this->backoffice_lib->auth()) {
			redirect(base_url('backoffice/login'));
		}
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
		if ($x = $this->input->post('brand')) {
			$brand = $x;
		}
		if ($x = $this->input->post('brandDetails')) {
			$brandDetails = $x;
		}
		if ($x = $this->input->post('region')) {
			$region = $x;
		}
		if ($x = $this->input->post('activeCities')) {
			$activeCities = $x;
		}
		if ($x = $this->input->post('dealDetails')) {
			$dealDetails = $x;
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
		if ($title==''||$category==''||$subcategory==''||$region==''||$activeCities==''||$dealDetails==''||$startDate=='') {
			die("Incomple Details");
		}
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
			$data = array(
				'title' => $title,
				'brand' => $brand,
				'brand_details' => $brandDetails,
				'category' => $category,
				'subcategory' => $subcategory,
				'city' => $activeCities,
				'details' => $dealDetails,
				'region' => $region,
				'locations' => $dealLocations,
				'malls' => $malls,
				'start_date' => $startDate,
				'end_date' => $endDate,
				'images' => $images
				);
			$result = $this->data_lib->saveDeal($data);
		if ($result) {
			redirect(base_url('backoffice/deals'));
		}
		else {
			die("Some error Occured..:(");
		}
	}

	public function updateDeal()
	{
		if (!$this->backoffice_lib->auth()) {
			redirect(base_url('backoffice/login'));
		}	
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
		$id = '';
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
		if ($x = $this->input->post('brand')) {
			$brand = $x;
		}
		if ($x = $this->input->post('brandDetails')) {
			$brandDetails = $x;
		}
		if ($x = $this->input->post('region')) {
			$region = $x;
		}
		if ($x = $this->input->post('activeCities')) {
			$activeCities = $x;
		}
		if ($x = $this->input->post('dealDetails')) {
			$dealDetails = $x;
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
		if ($x = $this->input->post('oldImages')) {
			$images = array('Image1'=>$x[0],'Image2'=>$x[1],'Image3'=>$x[2],'Image4'=>$x[3],'Image5'=>$x[4]);
		}
		if ($x = $this->input->post('id')) {
			$id = $x;
		}
		if ($id ==''||$title==''||$category==''||$subcategory==''||$region==''||$activeCities==''||$dealDetails==''||$startDate=='') {
			die("Incomple Details");
		}
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
		if (is_array($subcategory)) {
			$subcategory = json_encode($subcategory);
		}
		$data = array(
			'title' => $title,
			'brand' => $brand,
			'brand_details' =>$brandDetails,
			'category' => $category,
			'subcategory' => $subcategory,
			'city' => $activeCities,
			'details' => $dealDetails,
			'region' => $region,
			'locations' => $dealLocations,
			'malls' => $malls,
			'start_date' => $startDate,
			'end_date' => $endDate,
			'images' => $images
			);
		$result = $this->data_lib->updateDeal($id,$data);
		if ($result) {
			redirect(base_url('backoffice/deals'));
		}
		else {
			die("Some error Occured..:(");
		}
	}

	public function delete($type ='',$id ='')
	{
		if (!$this->backoffice_lib->auth()) {
			redirect(base_url('backoffice/login'));
		}
		if ($type == '' || $id =='') {
			die('Incomple Details');
		}
		$result = $this->data_lib->delete($type,$id);
		if ($result) {
			redirect(base_url('backoffice/'.$type));
		}
		else {
			die('Some error Occured..:(');
		}

	}

	public function content()
	{
		if (!$this->backoffice_lib->auth()) {
			redirect(base_url('backoffice/login'));
		}
    $data['csrf_token_name'] = $this->security->get_csrf_token_name();
		$data['csrf_token'] = $this->security->get_csrf_hash();
		$data['head'] = $this->load->view('backoffice/common/head',array(),true);
    $content = $this->data_lib->getContent();
    $data['about'] = $content[0];
    $data['privacy'] = $content[1];
    $data['disclaimer'] = $content[2];
		$this->load->view('backoffice/content',$data);
    

	}  

	public function faq()
	{
		if (!$this->backoffice_lib->auth()) {
			redirect(base_url('backoffice/login'));
		}
		$data['csrf_token_name'] = $this->security->get_csrf_token_name();
		$data['csrf_token'] = $this->security->get_csrf_hash();
		$data['head'] = $this->load->view('backoffice/common/head',array(),true);
		$data['faq'] = $this->data_lib->getFaq();
		$this->load->view('backoffice/faq',$data);

	}  
	public function review()
	{
		if (!$this->backoffice_lib->auth()) {
			redirect(base_url('backoffice/login'));
		}
		$data['head'] = $this->load->view('backoffice/common/head',array(),true);
		$data['review'] = $this->data_lib->getReview();
		$this->load->view('backoffice/review',$data);

	}   

	public function brands()
	{
		if (!$this->backoffice_lib->auth()) {
			redirect(base_url('backoffice/login'));
		}
		$data['csrf_token_name'] = $this->security->get_csrf_token_name();
		$data['csrf_token'] = $this->security->get_csrf_hash();
		$data['head'] = $this->load->view('backoffice/common/head',array(),true);
		$data['brand'] = $this->data_lib->getBrand();
		$this->load->view('backoffice/brands',$data);

	}  

	public function media()
	{
		if (!$this->backoffice_lib->auth()) {
			redirect(base_url('backoffice/login'));
		}
		$data['csrf_token_name'] = $this->security->get_csrf_token_name();
		$data['csrf_token'] = $this->security->get_csrf_hash();
		$data['head'] = $this->load->view('backoffice/common/head',array(),true);
		$data['media'] = $this->data_lib->getMedia();
		$this->load->view('backoffice/media',$data);

	}   
	public function newsletter()
	{
		if (!$this->backoffice_lib->auth()) {
			redirect(base_url('backoffice/login'));
		}
		$data['head'] = $this->load->view('backoffice/common/head',array(),true);
		$data['users'] = $this->data_lib->getNewsletters();
		$this->load->view('backoffice/newsletter',$data);

	}   

	public function subcategory()
	{
		if (!$this->backoffice_lib->auth()) {
			redirect(base_url('backoffice/login'));
		}
		$data['csrf_token_name'] = $this->security->get_csrf_token_name();
		$data['csrf_token'] = $this->security->get_csrf_hash();
		$data['head'] = $this->load->view('backoffice/common/head',array(),true);
		$data['subcategory'] = $this->data_lib->getSubcategories();
		$this->load->view('backoffice/subcategory',$data);

	}   
	public function testimonials()
	{
		if (!$this->backoffice_lib->auth()) {
			redirect(base_url('backoffice/login'));
		}
		$data['csrf_token_name'] = $this->security->get_csrf_token_name();
		$data['csrf_token'] = $this->security->get_csrf_hash();
		$data['head'] = $this->load->view('backoffice/common/head',array(),true);
		$data['testimonial'] = $this->data_lib->getTestimonial();
		$this->load->view('backoffice/testimonials',$data);

	}   
	public function users()
	{
		if (!$this->backoffice_lib->auth()) {
			redirect(base_url('backoffice/login'));
		}
		$data['head'] = $this->load->view('backoffice/common/head',array(),true);
		$data['users'] = $this->data_lib->getUsers();
		$this->load->view('backoffice/users',$data);

	}  
	public function password()
	{
		if (!$this->backoffice_lib->auth()) {
			redirect(base_url('backoffice/login'));
		}
    $data['message'] = "";
    if ($x = $this->session->flashdata('errorMsg'))
          $data['message'] = $x;
    	$data['csrf_token_name'] = $this->security->get_csrf_token_name();
		$data['csrf_token'] = $this->security->get_csrf_hash();
		$data['head'] = $this->load->view('backoffice/common/head',array(),true);
		$this->load->view('backoffice/password',$data);

	}  
	public function addMall()
	{
		if (!$this->backoffice_lib->auth()) {
			redirect(base_url('backoffice/login'));
		}
		$name = '';
		$address = '';
		$city = '';

		if ($x = $this->input->post('name')) {
			$name = $x;
		}
		if ($x = $this->input->post('address')) {
			$address = $x;
		}
		if ($x = $this->input->post('city')) {
			$city = $x;
		}
		if ($name==''||$address==''||$city=='') {
			die("Incomple Details");
		}

		$data = array(
			'name' => $name,
			'address' => $address,
			'city' => $city,
			);
		$result = $this->data_lib->addMall($data);
		if ($result) {
			redirect(base_url('backoffice/malls'));
		}
		else {
			die("Some error Occured..:(");
		}
	}

	public function addSubcategory()
	{
		if (!$this->backoffice_lib->auth()) {
			redirect(base_url('backoffice/login'));
		}
		$subcategory = '';
		$category = '';
		
		if ($x = $this->input->post('name')) {
			$subcategory = $x;
		}
		if ($x = $this->input->post('category')) {
			$category = $x;
		}
		
		if ($subcategory==''||$category=='') {
			die("Incomple Details");
		}

		$data = array(
			'category' => $category,
			'subcategory' => $subcategory,
			);
		$result = $this->data_lib->addSubcategory($data);
		if ($result) {
			redirect(base_url('backoffice/subcategory'));
		}
		else {
			die("Some error Occured..:(");
		}
	}
	public function addTestimonial()
	{
		if (!$this->backoffice_lib->auth()) {
			redirect(base_url('backoffice/login'));
		}
		$name = '';
		$testimonial = '';
		

		if ($x = $this->input->post('name')) {
			$name = $x;
		}
		if ($x = $this->input->post('testimonial')) {
			$testimonial = $x;
		}
		
		if ($name==''||$testimonial=='') {
			die("Incomple Details");
		}

		$data = array(
			'name' => $name,
			'testimonial' => $testimonial,
			);
		$result = $this->data_lib->addTestimonial($data);
		if ($result) {
			redirect(base_url('backoffice/testimonials'));
		}
		else {
			die("Some error Occured..:(");
		}
	}
	public function addMedia()
	{
		if (!$this->backoffice_lib->auth()) {
			redirect(base_url('backoffice/login'));
		}
		$this->load->library('upload');
		$name = '';
		$link = '';
		$image = '';
		if ($x = $this->input->post('name')) {
			$name = $x;
		}
		if ($x = $this->input->post('link')) {
			$link = $x;
		}
		if ($name==''||$link=='') {
			die("Incomple Details");
		}
		$config['upload_path'] = 'assets/uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '1000';
		$config['max_width'] = '1024';
		$config['max_height'] = '768';
		$this->upload->initialize($config);

		if ($this->upload->do_upload('Image1')) 
			{$x = $this->upload->data();
				$image = '/assets/uploads/'.$x['file_name'];
			}


			$data = array(
				'name' => $name,
				'link' => $link,
				'image' => $image,
				);
			$result = $this->data_lib->addMedia($data);
			if ($result) {
				redirect(base_url('backoffice/media'));
			}
			else {
				die("Some error Occured..:(");
			}  
		}


		public function addBrand()
		{
			if (!$this->backoffice_lib->auth()) {
				redirect(base_url('backoffice/login'));
			}
			$this->load->library('upload');
			$brandname = '';
			$path = '';
			if ($x = $this->input->post('name')) {
				$brandname = $x;
			}

			if ($brandname=='') {
				die("Incomple Details");
			}
			$config['upload_path'] = 'assets/uploads/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']	= '1000';
			$config['max_width'] = '1024';
			$config['max_height'] = '768';
			$this->upload->initialize($config);

			if ($this->upload->do_upload('Image1')) 
				{$x = $this->upload->data();
					$path = '/assets/uploads/'.$x['file_name'];
				}


				$data = array(
					'brandname' => $brandname,
					'path' => $path,
					);
				$result = $this->data_lib->addBrand($data);
				if ($result) {
					redirect(base_url('backoffice/brands'));
				}
				else {
					die("Some error Occured..:(");
				}  
			}


			public function addFaq()
			{
				if (!$this->backoffice_lib->auth()) {
					redirect(base_url('backoffice/login'));
				}
				$question = '';
				$answer = '';

				if ($x = $this->input->post('question')) {
					$question = $x;
				}
				if ($x = $this->input->post('answer')) {
					$answer = $x;
				}

				if ($question==''||$answer=='') {
					die("Incomple Details");
				}

				$data = array(
					'question' => $question,
					'answer' => $answer,
					);
				$result = $this->data_lib->addFaq($data);
				if ($result) {
					redirect(base_url('backoffice/faq'));
				}
				else {
					die("Some error Occured..:(");
				}
			}

  public function updateAbout(){
      $about = $this->input->post('about');
      $data = array('data'=> $about);
      	$result = $this->load->model('data_model');
        $result = $this->data_model->updateAbout($data);
		if ($result) {
			redirect(base_url('backoffice/content'));
		}
		else {
			die("Some error Occured..:(");
		}
      }

    public function updatePrivacy(){
      $privacy = $this->input->post('privacy');
      $data = array('data'=> $privacy);
      	$result = $this->load->model('data_model');
        $result = $this->data_model->updatePrivacy($data);
		if ($result) {
			redirect(base_url('backoffice/content'));
		}
		else {
			die("Some error Occured..:(");
		}
      }
  
    public function updateDisclaimer(){
      $disclaimer = $this->input->post('disclaimer');
      $data = array('data'=> $disclaimer);
      	$result = $this->load->model('data_model');
        $result = $this->data_model->updateDisclaimer($data);
		if ($result) {
			redirect(base_url('backoffice/content'));
		}
		else {
			die("Some error Occured..:(");
		}
      }
  
  
  public function changePassword(){
      $cpass = $this->input->post('cpass');
      $npass = $this->input->post('npass');
      $conpass = $this->input->post('conpass');
      $this->load->model('data_model');
    $pass = $this->data_model->getPassword();
    if ($pass['password'] == $cpass)
    {
      if ($npass == $conpass){
      $data = array('password'=> $npass);
      	$result = $this->load->model('data_model');
        $result = $this->data_model->changePassword($data);
		if ($result) {
			redirect(base_url('backoffice/password'));
		}
		else {
			die("Some error Occured..:(");
		}
      }
      else
      {
       $this->session->set_flashdata('errorMsg','New Password not matches your re-typed password');
    redirect(base_url('backoffice/password'));
      }
      
  }
  else
  {
    $this->session->set_flashdata('errorMsg','Current Password Entered is Incorrect');
    redirect(base_url('backoffice/password'));
  }
  }


  public function approveReview($dealId = '',$id = '')
  {
  	if ($dealId == '' || $id == '') {
  		die("No id given");
  	}
  	$result = $this->data_lib->approveReview($dealId,$id);
  	if ($result) {
  		redirect(base_url('backoffice/review'));
  	}
  	else {
  		die("Some error occured");
  	}
  }

  public function uploadImages() 
  {
		if (!$this->backoffice_lib->auth()) {
			redirect(base_url('backoffice/login'));
		}
		$this->load->library('upload');
		$type = '';
		$data = array();
		$table = '';
		if ($x = $this->input->post('type')) {
			$type = $x;
		}
		if ($type == '') {
			die('No type given');
		}
		$config['upload_path'] = 'assets/uploads/';
		$config['allowed_types'] = 'gif|jpg|png|JPG';
		$config['max_size']	= '1000';
		$config['max_width'] = '4000';
		$config['max_height'] = '4000';
		$this->upload->initialize($config);
		if ($type == 'top-deals') {
			for ($i=1;$i<=6;$i++) {
				$link = '';
				$image = '';
				if ($x = $this->input->post('imageLink'.$i)) {
					$image = $x;
				}
				if ($x = $this->input->post('link'.$i)) {
					$link = $x;
				}
				if ($this->upload->do_upload('deal'.$i)) {
					$x = $this->upload->data();
					$image = '/assets/uploads/'.$x['file_name'];
				}
				array_push($data, array('id'=>$i,'link'=>$link,'path'=>$image));
				$table = 'top-deals';
			}
		}
    if ($type == 'slider') {
			for ($i=1;$i<=6;$i++) {
				$link = '';
				$image = '';
				if ($x = $this->input->post('imageLink'.$i)) {
					$image = $x;
				}
				if ($x = $this->input->post('link'.$i)) {
					$link = $x;
				}
				if ($this->upload->do_upload('deal'.$i)) {
					$x = $this->upload->data();
					$image = '/assets/uploads/'.$x['file_name'];
				}
				array_push($data, array('id'=>$i,'link'=>$link,'path'=>$image));
				$table = 'slider';
			}
		}
      if ($type == 'ads') {
			for ($i=1;$i<=6;$i++) {
				$link = '';
				$image = '';
				if ($x = $this->input->post('imageLink'.$i)) {
					$image = $x;
				}
				if ($x = $this->input->post('link'.$i)) {
					$link = $x;
				}
				if ($this->upload->do_upload('deal'.$i)) {
					$x = $this->upload->data();
					$image = '/assets/uploads/'.$x['file_name'];
				}
				array_push($data, array('id'=>$i,'link'=>$link,'path'=>$image));
				$table = 'ads';
			}
		}
		if (count($data) > 0 ) {
			$result = $this->data_lib->uploadContentData($table,$data);
			if ($result) {
				redirect(base_url('/backoffice/content'));
			}
			else {
				die('Some error occured..:(');
			}
		}
  }
  
	public function regions()
	{
		if (!$this->backoffice_lib->auth()) {
			redirect(base_url('backoffice/login'));
		}
		$data['csrf_token_name'] = $this->security->get_csrf_token_name();
		$data['csrf_token'] = $this->security->get_csrf_hash();
		$data['head'] = $this->load->view('backoffice/common/head',array(),true);
		$data['regions'] = $this->data_lib->getRegions();
		$this->load->view('backoffice/regions',$data);
	} 

	public function addRegion()
	{
		$region = '';
		$subRegions = '';
		if ($x = $this->input->post('regionName')) {
			$region = $x;
		}
		if ($x = $this->input->post('subRegions')) {
			$subRegions = $x;
		}
		if ($region == '' || $subRegions == '') {
			die("Incomplete Details Given");
		}
		$subRegions = json_encode(explode('#', $subRegions));
		if ($this->input->post('update')) {
			$id = $this->input->post('id');
			if (!$id) {die('Incomplete Details');}
			if ($this->data_lib->updateRegion($id,$region,$subRegions)) {
				redirect(base_url('backoffice/regions'));	
			}	
		}
		else
		{
			if ($this->data_lib->addRegion($region,$subRegions)) {
				redirect(base_url('backoffice/regions'));
			}
		}
		die('Some error occured');
	}

}





