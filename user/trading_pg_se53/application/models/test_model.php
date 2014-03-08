<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test_model extends CI_Model { 

	function __construct()  
	{
		parent::__construct();
		
	}	
		
	function insert($data)
	{
		$this->db->insert('test',$data);
	}
}
