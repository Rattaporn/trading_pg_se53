<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Trade_model extends CI_Model { 

	function __construct()  
	{
		parent::__construct();
		
	}	
		
	function insert($data1)
	{
		$this->db->insert('image',$data1);
	}
}
