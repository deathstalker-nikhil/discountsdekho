<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Backoffice_model extends CI_Model {

  function __construct()
  {
      parent::__construct();
      $this->load->database();
  }

	public function login($username,$password)
	{
		$result = $this->db->get_where('admin', array('username' => $username,'password' => $password), 1, 0);
		if ($result->num_rows()>0) {
			return true;
		}		
		return false;
	}

} 