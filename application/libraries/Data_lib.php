<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Data_lib {

	public function getSubCategories()
	{
		$CI = & get_instance();
		$CI->load->model('data_model','data');
		return $CI->data->getSubCategories();
	}

	public function getCategories()
	{
		$CI = & get_instance();
		$CI->load->model('data_model','data');
		return $CI->data->getCategories();    	
	}

	public function getCategoryData()
	{
		$CI = & get_instance();
		$CI->load->model('data_model','data');
		return $CI->data->getCategoryData();      	
	}

	public function saveDeal($data) 
	{
		$CI = & get_instance();
		$CI->load->model('data_model','data');
		return $CI->data->saveDeal($data);
	}

	public function addCoupon($data) 
	{
		$CI = & get_instance();
		$CI->load->model('data_model','data');
		return $CI->data->addCoupon($data);
	}


	public function saveOffer($data) 
	{
		$CI = & get_instance();
		$CI->load->model('data_model','data');
		return $CI->data->saveOffer($data);
	}

	public function getDeals()
	{
		$CI = & get_instance();
		$CI->load->model('data_model','data');
		return $CI->data->getDeals();    	
	}


	public function delete($type = '',$id = '')
	{
		if ($type == '' || $id == '') {
			return 0;
		}
		$CI = & get_instance();
		$CI->load->model('data_model','data');    	
		if ($type == 'deals') {
			$table = 'deals';
		}
		if ($type == 'malls') {
			$table = 'malls';
		}
		if ($type == 'subcategory') {
			$table = 'subcategory';
		}
		if ($type == 'testimonials') {
			$table = 'testimonials';
		}
		if ($type == 'media') {
			$table = 'media';
		}
		if ($type == 'brands') {
			$table = 'brands';
		}
		if ($type == 'faq') {
			$table = 'faq';
		}
		if ($type == 'review') {
			$table = 'review';
		}
		if ($type == 'regions') {
			$table = 'regions';
		}
		return $CI->data->delete($table,$id);
	}

	public function deleteCoupon($id = '')
	{
		if ($id == '') {
			return 0;
		}
		$CI = & get_instance();
		$CI->load->model('data_model','data');    	
		$table = "coupons";
		return $CI->data->delete($table,$id);
	}

	public function getDealData($region,$id,$title = '')
	{
		$CI = & get_instance();
		$CI->load->model('data_model','data'); 
		return $CI->data->getDealData($region,$id,$title);    	
	}

	public function getUsers()
	{
		$CI = & get_instance();
		$CI->load->model('data_model','data');
		return $CI->data->getUsers();    	
	}


	public function addUserCoupon($data)
	{
		$CI = & get_instance();
		$CI->load->model('data_model','data');
		return $CI->data->addUserCoupon($data);    	
	}



	public function getNewsletters()
	{
		$CI = & get_instance();
		$CI->load->model('data_model','data');
		return $CI->data->getNewsletters();    	
	}

	public function addMall($data) 
	{
		$CI = & get_instance();
		$CI->load->model('data_model','data');
		return $CI->data->addMall($data);
	}

	public function getMalls()
	{
		$CI = & get_instance();
		$CI->load->model('data_model','data');
		return $CI->data->getMalls();    	
	}

	public function addSubcategory($data) 
	{
		$CI = & get_instance();
		$CI->load->model('data_model','data');
		return $CI->data->addSubcategory($data);
	}

	public function updateDeal($id,$data)
	{
		$CI = & get_instance();
		$CI->load->model('data_model','data');
		return $CI->data->updateDeal($id,$data);		
	}

		public function redeemCoupon($id)
	{
		$CI = & get_instance();
		$CI->load->model('data_model','data');
		return $CI->data->redeemCoupon($id);		
	}

	public function updateProfile($data)
	{
		$CI = & get_instance();
		$CI->load->model('data_model','data');
		return $CI->data->updateProfile($data);		
	}

	public function addTestimonial($data) 
	{
		$CI = & get_instance();
		$CI->load->model('data_model','data');
		return $CI->data->addTestimonial($data);
	}
	public function getTestimonial()
	{
		$CI = & get_instance();
		$CI->load->model('data_model','data');
		return $CI->data->getTestimonial();    	
	}

	public function getPrimaryDeals($region)
	{
		$CI = & get_instance();
		$CI->load->model('data_model','data');
		$data['Apparels'] = $CI->data->getDealsByCategory($region,'Apparels');
		$data['Fitness and Sports'] = $CI->data->getDealsByCategory($region,'Fitness and Sports');
		$data['Beauty and Grooming'] =	$CI->data->getDealsByCategory($region,'Beauty and Grooming');
		$data['Miscellaneous'] =$CI->data->getDealsByCategory($region,'Miscellaneous');
		return $data;
	}

	public function getMallsFromId($value3)
	{
		$CI = & get_instance();
		$CI->load->model('data_model','data');
		$data = $CI->data->getMallsFromId($value3);
		return $data[0]['name'];		
	}

	public function addMedia($data) 
	{
		$CI = & get_instance();
		$CI->load->model('data_model','data');
		return $CI->data->addMedia($data);
	}
	
	public function getMedia()
	{
		$CI = & get_instance();
		$CI->load->model('data_model','data');
		return $CI->data->getMedia();    	
	}
	
	public function getFaq()
	{
		$CI = & get_instance();
		$CI->load->model('data_model','data');
		return $CI->data->getFaq();    	
	}
	
	
	public function addBrand($data) 
	{
		$CI = & get_instance();
		$CI->load->model('data_model','data');
		return $CI->data->addBrand($data);
	}
	
	public function getBrand()
	{
		$CI = & get_instance();
		$CI->load->model('data_model','data');
		return $CI->data->getBrand();    	
	}
	
	public function addFaq($data) 
	{
		$CI = & get_instance();
		$CI->load->model('data_model','data');
		return $CI->data->addFaq($data);
	}
	

  
  	public function getContent()
	{
		$CI = & get_instance();
		$CI->load->model('data_model','data');
		return $CI->data->getContent();    	
	}

 	public function getCategoryDeals($region,$category,$where='',$coupons = '')
	{
		$CI = & get_instance();
		$CI->load->model('data_model','data'); 
		return $CI->data->getCategoryDeals($region,$category,$where,$coupons);    	
	}
  
  public function signup($data) 
	{
		$CI = &get_instance();
		$CI->load->model('data_model','data');
		return $CI->data->signup($data);
	}

	public function registerMerchant($data){
		$CI = &get_instance();
		$CI->load->model('data_model','data');
		return $CI->data->registerMerchant($data);
	}

	public function checkMailExist( $email,$table ='' )
	{
		$CI = &get_instance();
		$CI->load->model('data_model','data');
		return $CI->data->checkMailExist($email,$table);		
	}

  public function auth()
  {
      $CI = & get_instance();
      $data = $CI->session->userdata('user_data');
      $data['userLoggedIn'] = $CI->session->userdata('userLoggedIn');
      $data['merchantLoggedIn'] = $CI->session->userdata('merchantLoggedIn');
      if ((isset($data['userLoggedIn']) && $data['userLoggedIn']) || (isset($data['merchantLoggedIn']) && $data['merchantLoggedIn'])) {
          return 1;
      }
      return 0;
  }

	public function login($email,$password,$table='userdb')
	{
		$CI = &get_instance();
		$CI->load->model('data_model','data');
		$result = $CI->data->login($email,$password,$table);
		if (count($result)>0) {
      if ($result && $table == 'userdb') {
          $CI->session->set_userdata('userLoggedIn', true);
          $CI->session->set_userdata('user_data', $result);
          return 1;
      }else if($result && $table == 'merchant'){
          $CI->session->set_userdata('merchantLoggedIn', true);
          $CI->session->set_userdata('user_data', $result); 
          return 1;     	
      }
  	return 0;
		}			
	}

	public function isLoggedIn()
	{
		$CI = &get_instance();
		if ($CI->session->userdata('userLoggedIn') || $CI->session->userdata('merchantLoggedIn')) {
			return true;
		}
		return false;
	}
  
   public function getSubcategoryDeals($region,$subcategory,$where='',$coupons='')
	{
		$CI = & get_instance();
		$CI->load->model('data_model','data'); 
		return $CI->data->getSubcategoryDeals($region,$subcategory,$where,$coupons);    	
	}
  
  public function getSubcategoryFromId($id)
	{
		$CI = & get_instance();
		$CI->load->model('data_model','data');
		$data = $CI->data->getSubcategoryFromId($id);
		return $data[0]['subcategory'];		
	}
  
  public function getTestimonials()
	{
		$CI = & get_instance();
		$CI->load->model('data_model','data');
		return $CI->data->getTestimonials();    	
	}
  
  public function approveReview($dealId,$id)
	{
		$CI = &get_instance();
		$CI->load->model('data_model','data');
		return $CI->data->approveReview($dealId,$id);		
	}

	 public function approveOffer($id)
	{
		$CI = &get_instance();
		$CI->load->model('data_model','data');
		return $CI->data->approveOffer($id);		
	}

	 public function expireOffer($id)
	{
		$CI = &get_instance();
		$CI->load->model('data_model','data');
		return $CI->data->expireOffer($id);		
	}

	
	public function saveReview($data)
	{
		$CI = &get_instance();
		$CI->load->model('data_model','data');
		return $CI->data-> saveReview($data);			
	}
  
  public function search($region,$query,$category,$subcategory,$where='',$coupons='') 
  {
		$CI = &get_instance();
		$CI->load->model('data_model','data');
		return $CI->data->search($region,$query,$category,$subcategory,$where,$coupons);		
	}
  
	public function subscribe($email){
		$CI = &get_instance();
		$CI->load->model('data_model','data');
		return $CI->data->subscribe($email);			
	}

	public function uploadContentData($table,$data)
	{
		$CI = &get_instance();
		$CI->load->model('data_model','data');
		return $CI->data->uploadContentData($table,$data);			
	}

	public function getCotentData($table)
	{
		$CI = &get_instance();
		$CI->load->model('data_model','data');
		return $CI->data->getCotentData($table);		
	}

	public function getCategoryFromSubcateogry($subcategory) {
		$CI = &get_instance();
		$CI->load->model('data_model','data');
		return $CI->data->getCategoryFromSubcateogry($subcategory);		
	}
	
	public function addRegion($region,$subRegions) 
	{
		$CI = &get_instance();
		$CI->load->model('data_model','data');
		return $CI->data->addRegion($region,$subRegions);	
	}

	public function getRegions()
	{
		$CI = &get_instance();
		$CI->load->model('data_model','data');
		return $CI->data->getRegions();			
	}

	public function updateRegion($id,$region,$subRegions)
	{
		$CI = &get_instance();
		$CI->load->model('data_model','data');
		return $CI->data->updateRegion($id,$region,$subRegions);			
	}

	public function getPass($email)
	{
		$CI = &get_instance();
		$CI->load->model('data_model','data');
		return $CI->data->getPass($email);		
	}

	public function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
	}	

	public function fb_login($email,$table='userdb')
	{
		$CI = &get_instance();
		$CI->load->model('data_model','data');
		$result = $CI->data->fb_login($email,$table);
		if (count($result)>0) {
      if ($result && $table == 'userdb') {
          $CI->session->set_userdata('userLoggedIn', true);
          $CI->session->set_userdata('user_data', $result);
          return 1;
      }
  	return 0;
		}			
	}
}
