<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Data_model extends CI_Model {

	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function getSubCategories()
	{
		$result = $this->db->get('subcategory');
		return $result->result_array();
	} 

	public function getCategories()
	{
		$result = $this->db->get('category');
		return $result->result_array();		
	}

	public function getAllCoupons()
	{
		$result = $this->db->get('coupons');
		return $result->result_array();		
	}

	public function getAllMerchants()
	{
		$result = $this->db->get('merchant');
		return $result->result_array();		
	}

		public function getCouponsIssued()
	{
		$result = $this->db->get('user_coupons');
		return $result->result_array();		
	}

	public function getCategoryData()
	{
		$query = "SELECT A.id,B.id as categoryId,A.category,A.subcategory FROM subcategory AS A JOIN category AS B ON A.category=B.category";
		$result = $this->db->query($query);
		return $result->result_array();
	}

	public function saveDeal($data)
	{
		return $this->db->insert('deals',$data);
	}

	public function addCoupon($data)
	{
		$deal_id = $data['deal_id'];
		$query = "UPDATE deals SET coupons='1' WHERE id=$deal_id";
		$this->db->query($query);
		return $this->db->insert('coupons',$data);
	}

	public function saveOffer($data)
	{
		return $this->db->insert('deals',$data);
	}

	public function getDeals()
	{
		$this->db->where('active', '1');
		$result = $this->db->get('deals');
		return $result->result_array();
	}

	public function delete($table,$id)
	{
		$this->db->where('id', $id);
		return $this->db->delete($table); 
	}

	public function getDealData($region,$id,$title)
	{
		if($title != '')
			$this->db->where(array('id'=>$id,'region'=>$region,'title'=>$title));
		else if($region != '')
			$this->db->where(array('id'=>$id,'region'=>$region));
		$result = $this->db->get('deals');
		return $result->result_array();
	}

	public function getCouponData($id)
	{
		$this->db->where(array('deal_id'=>$id));
		$result = $this->db->get('coupons');
		return $result->result_array();
	}

	public function getDealRequests()
	{
		$authorized = 0;
		$added_by_merchant = 1;
		$this->db->where(array('authorized'=>$authorized,'added_by_merchant'=> $added_by_merchant));
		$result = $this->db->get('deals');
		return $result->result_array();
	}

	public function getCouponCount($coupon_id)
	{

		$result = $this->db->query("SELECT count(*) AS total from user_coupons WHERE coupon_id = '$coupon_id' ");

		
		return $result->result_array()[0]['total'];
	}



	public function getUsers()
	{
		$result = $this->db->get('userdb');
		return $result->result_array();
	}

	public function getNewsletters()
	{
		$result = $this->db->get('newsletter');
		return $result->result_array();
	}

	public function getMalls()
	{
		$result = $this->db->get('malls');
		return $result->result_array();
	}

	public function addMall($data)
	{
		return $this->db->insert('malls',$data);
	}

	public function addSubcategory($data)
	{
		return $this->db->insert('subcategory',$data);
	}

	public function updateDeal($id,$data)
	{
		$this->db->where('id', $id);
		return $this->db->update('deals', $data); 
	}

	public function updateProfile($data)
	{
		return $this->db->update('userdb', $data, array('id'=>$data['id']));
	}

	public function addTestimonial($data)
	{
		return $this->db->insert('testimonials',$data);
	}

	public function getTestimonial()
	{
		$result = $this->db->get('testimonials');
		return $result->result_array();
	}

	public function getDealsByCategory($region,$category)
	{
		$this->db->where(array('region'=>$region,'category'=> $category,'active'=>1));
		$this->db->order_by("id", "desc"); 
		$result = $this->db->get('deals',3,0);
		return $result->result_array();	
	}

	public function getDealsByMerchant($merchant_id)
	{
		$this->db->where(array('merchant_id'=>$merchant_id));
		$result = $this->db->get('deals');
		return $result->result_array();	
	}


	public function getDealsWithoutCoupons($merchant_id)
	{
		$this->db->where(array('merchant_id'=>$merchant_id,'added_by_merchant'=> 1,'coupons'=>0));
		$this->db->order_by("id", "desc"); 
		$result = $this->db->get('deals');
		return $result->result_array();	
	}


public function getUsersWithCoupons($merchant_id)
	{
		$result = $this->db->query('SELECT A.id,B.id as coupon_id,B.merchant_id,B.deal_id,B.coupon_type,B.coupon_details,A.user_id,A.coupon_code,A.redeem FROM user_coupons AS A JOIN coupons AS B WHERE A.coupon_id = B.id AND B.merchant_id = '.$merchant_id);
		return $result->result_array();	
	}



	public function getCouponsByMerchant($merchant_id)
	{
		$this->db->where(array('merchant_id'=>$merchant_id));
		$this->db->order_by("id", "desc"); 
		$result = $this->db->get('coupons');
		return $result->result_array();	
	}

public function getUserCoupons($user_id)
	{
		$result = $this->db->query('SELECT A.id,B.id as coupon_id,B.merchant_id,B.deal_id,B.coupon_type,B.coupon_details,A.user_id,A.coupon_code,A.redeem FROM user_coupons AS A JOIN coupons AS B WHERE A.coupon_id = B.id AND user_id = '.$user_id);
		return $result->result_array();	
	}



	public function getMallsFromId($value3)
	{
		$this->db->where('id', $value3);
		$result = $this->db->get('malls',1,0);
		return $result->result_array();		
	}

	public function addMedia($data)
	{
		return $this->db->insert('media',$data);
	}
	
	public function getMedia()
	{
		$result = $this->db->get('media');
		return $result->result_array();
	}
	
	public function getFaq()
	{
		$result = $this->db->get('faq');
		return $result->result_array();
	}
	
	public function getBrand()
	{
		$result = $this->db->get('brands');
		return $result->result_array();
	}
	
	public function getReview($id)
	{
		$this->db->where(array('deal_id'=>$id,'approval'=>1));
		$result = $this->db->get('review');
		return $result->result_array();
	}
	
	
	public function addBrand($data)
	{
		return $this->db->insert('brands',$data);
	}
	
	public function addFaq($data)
	{
		return $this->db->insert('faq',$data);
	}

	public function addUserCoupon($data)
	{
		return $this->db->insert('user_coupons',$data);
	}

  
  public function getContent()
	{
		$result = $this->db->get('content');
		return $result->result_array();
	}
  
  public function updateAbout($data)
	{
		$this->db->where('type', 'aboutus');
		return $this->db->update('content', $data); 
	}

  public function updatePrivacy($data)
	{
		$this->db->where('type', 'privacy');
		return $this->db->update('content', $data); 
	}


	 public function getSessionData($id)
	{
		$this->db->where('id', $id);
		$result = $this->db->get('userdb');
		return $result->result_array();		
	}

  
  public function updateDisclaimer($data)
	{
		$this->db->where('type', 'disclaimer');
		return $this->db->update('content', $data); 
	}

   public function changePassword($data)
	{
		$this->db->where('username', 'admin');
		return $this->db->update('admin', $data); 
	}
  
   public function getPassword()
	{
     $this->db->select('password');
		$result = $this->db->get('admin');
		return $result->row_array();
	}

	public function changeUserPassword($data, $id = '',$email = '')
	{
		if($id != '')
			$this->db->where('id', $id);
		else if($email != '')
			$this->db->where('email',$email);
		$this->db->update('userdb', $data);
		return $this->db->affected_rows();
	}


	public function changeMerchantPassword($data, $id = '',$email = '')
	{
		if($id != '')
			$this->db->where('merchant_id', $id);
		else if($email != '')
			$this->db->where('email',$email);
		$this->db->update('merchant', $data); 
		return $this->db->affected_rows();
	}
  
   public function getMerchantPassword($id)
	{
		$this->db->where('merchant_id',$id);
     $this->db->select('password');
		$result = $this->db->get('merchant');
		
		return $result->row_array();
	}

   public function getUserPassword($id)
	{
		$this->db->where('id',$id);
     $this->db->select('password');
		$result = $this->db->get('userdb');
		
		return $result->row_array();
	}

	  public function getUserByID($id)
	{
		$this->db->where('id',$id);
     
		$result = $this->db->get('userdb');
		
			return $result->result_array();
	}


	 public function getReviews()
	{
		$this->db->where('approval',0);
		$result = $this->db->get('review');
		
		return $result->result_array();
	}
  
  	public function getTopDeals()
	{
		$result = $this->db->get('testimonials');
		return $result->result_array();
	}
  
  public function getCategoryDeals($region,$category,$where,$coupons)
	{
		$this->db->where(array('region'=>$region,'category'=> $category,'active'=>1));
		if($coupons != ''){
			$this->db->where(array('coupons'=>$coupons));
		}
		$x = '';
		if($where != ''){
			foreach ($where as $key => $value) {
				if($value != []){
					$x .= ' (';
					foreach ($value as $key2 => $value2) {
						$x .= "$key LIKE '%$value2%' OR ";
					}
					$x = substr($x, 0, -3);
					$x .= ') AND';
				}
			}
			if($x != ''){	
				$x = substr($x, 0, -4);
				$this->db->where($x);
			}
		}		
		$this->db->order_by("id", "desc"); 
		$result = $this->db->get('deals');
		return $result->result_array();		
	}
  
  public function signup($data)
	{
		return $this->db->insert('userdb',$data);
	}

	public function registerMerchant($data){
		return $this->db->insert('merchant',$data);
	}

	public function checkMailExist($email,$table)
	{
		$this->db->where('email', $email);
		$result = $this->db->get($table);
		if ($result->num_rows() > 0) {
			return 1;
		}
		return 0;
	}

	public function login($email,$password,$table)
	{
		$result = $this->db->get_where($table, array('email' => $email,'password' => $password), 1, 0);		
		return $result->row_array();
	}
  
 public function getSubcategoryDeals($region,$subcategory,$where,$coupons)
	{ 
		$this->db->where(['active'=>1,'region'=>$region]);
		if($coupons != ''){
			$this->db->where(array('coupons'=>$coupons));
		}		
		$x = '';
		if($where != ''){
			foreach ($where as $key => $value) {
				if($value != []){
					$x .= ' (';
					foreach ($value as $key2 => $value2) {
						$x .= "$key LIKE '%$value2%' OR ";
					}
					$x = substr($x, 0, -3);
					$x .= ') AND';
				}
			}
			if($x != ''){	
				$x = substr($x, 0, -4);
				$this->db->where($x);
			}
		}
		$this->db->like(['subcategory'=> $subcategory]);
		$this->db->order_by("id", "desc"); 
		$result = $this->db->get('deals');
		return $result->result_array();		
	}  
  
  public function getSubcategoryFromId($id)
	{
		$this->db->where('id', $id);
		$result = $this->db->get('subcategory',1,0);
		return $result->result_array();		
	}
  
  public function getTestimonials()
	{
		$result = $this->db->get('testimonials');
		return $result->result_array();
	}
  
   public function approveReview($dealId,$id)
  {
		$this->db->where(array('id'=> $id,'deal_id'=>$dealId));
		return $this->db->update('review', array('approval'=>'1'));   	
  }

   public function approveOffer($id)
  {
		$this->db->where(array('id'=> $id));
		return $this->db->update('deals', array('authorized'=>'1','active' => '1'));   	
  }

   public function redeemCoupon($id)
  {
		$this->db->where(array('id'=> $id));
		return $this->db->update('user_coupons', array('redeem'=>'1'));   	
  }


   public function expireOffer($id)
  {
		$this->db->where(array('id'=> $id));
		return $this->db->update('deals', array('active'=>'0'));   	
  }

 

  public function  saveReview($data)
  {
		return $this->db->insert('review',$data);  	
  }
  
  
  public function search($region,$query,$category,$subcategory,$where,$coupons)
  {
  	$data = array('title'=>$query,'brand'=>$query,'city'=>$query,'locations'=>$query,'malls'=>$query);
  	if($query != ''){  		
	  	$x = ' (';
	  	foreach ($data as $key => $value) {
	  		$x .= " `$key` LIKE '%$value%' ESCAPE '!' OR"; 
	  	}
	  	$x = substr($x, 0, -3);
	  	$x .= ' )';
			$this->db->where($x);
  	}
		$this->db->where(['active'=>1,'region'=>$region]);
		if($coupons != ''){
			$this->db->where(array('coupons'=>$coupons));
		}		
		$x = '';
		if($where != ''){
			foreach ($where as $key => $value) {
				if($value != []){
					$x .= ' (';
					foreach ($value as $key2 => $value2) {
						$x .= "$key LIKE '%$value2%' OR ";
					}
					$x = substr($x, 0, -3);
					$x .= ') AND';
				}
			}
			if($x != ''){	
				$x = substr($x, 0, -4);
				$this->db->where($x);
			}
		}
		if($category != [])
			$this->db->where_in('category', $category);
		if($subcategory != '')
		$this->db->like(['subcategory'=> $subcategory]);
  	$this->db->group_by("title");
		$this->db->order_by("id", "desc"); 
		$result = $this->db->get('deals');
		return $result->result_array();	  	 	 
  }

  public function subscribe($email){
      $data = array('email' => $email);   
      return $this->db->insert('newsletter',$data);  
  }

  public function uploadContentData($table,$data)
  {
  	$this->db->empty_table($table); 
  	return $this->db->insert_batch($table, $data); 	
  }

  public function getCotentData($table)
  {
  	$result = $this->db->get($table);
  	return $result->result_array();
  }

  public function getCategoryFromSubcateogry($subcategory) 
  {
  	$this->db->where('subcategory',$subcategory);
  	$result = $this->db->get('subcategory');
  	return $result->result_array();  	
  }

  public function addRegion($region,$subRegions)
  {
	return $this->db->insert('regions',array('region'=>$region,'areas'=>$subRegions));	
  }

  public function getRegions()
  {
		$result = $this->db->get('regions');
		return $result->result_array();
  }

  public function updateRegion($id,$region,$subRegions)
  {
		$this->db->where('id', $id);
		return $this->db->update('regions', array('region'=>$region,'areas'=>$subRegions));   	
  }
  
  public function getPass($email)
  {
  	$this->db->select('password');
  	$this->db->where('email',$email);
  	$result = $this->db->get('userdb',1);
  	return $result->row_array();    	
  }
} 