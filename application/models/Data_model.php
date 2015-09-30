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

	public function getDeals()
	{
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
		else
			$this->db->where(array('id'=>$id,'region'=>$region));
		$result = $this->db->get('deals');
		return $result->result_array();
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
	
	public function getReview()
	{
		$this->db->select('review.id,review.name,review.review,deals.id as deal_id,deals.title');
		$this->db->from('review');
		$this->db->join('deals', 'review.deal_id = deals.id');
		$this->db->where('app', '0');
		$result = $this->db->get();
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

	public function changeUserPassword($data, $id)
	{
		$this->db->where('id', $id);
		
		return $this->db->update('userdb', $data); 


	}
  
   public function getUserPassword($id)
	{
		$this->db->where('id',$id);
     $this->db->select('password');
		$result = $this->db->get('userdb');
		
		return $result->row_array();
	}
  
  	public function getTopDeals()
	{
		$result = $this->db->get('testimonials');
		return $result->result_array();
	}
  
  public function getCategoryDeals($region,$category)
	{
		$this->db->where(array('region'=>$region,'category'=> $category,'active'=>1));
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
  
 public function getSubcategoryDeals($region,$subcategory)
	{ 
		$this->db->where(['active'=>1,'region'=>$region]);
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
		return $this->db->update('review', array('app'=>'1'));   	
  }

  public function getReviews($deal_id)
  {
  	echo "review to work";
  	//$this->db->where(['app'=>'1','deal_id'=>$deal_id]);
  	//$result = $this->db->get('review');
  	//return $result->result_array();
  }

  public function  saveReview($data)
  {
		return $this->db->insert('review',$data);  	
  }
  
  
  public function search($search)
  {
  	$data = array('title'=>$search,'brand'=>$search,'city'=>$search,'region'=>$search,'locations'=>$search,'malls'=>$search);
  	$this->db->or_like($data);
  	$this->db->group_by("title"); 
  	$result = $this->db->get('deals');
  	return $result->result_array();  	 
  }

  public function subscribe($email){
      $data = array('email' => $email);   
      $result = $this->db->get_where('newsletter',$data);
      if($result->num_rows() > 0){
          return 0;
      }
      $query =  $this->db->insert_string('newsletter', $data);
      return $this->db->query($query);
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