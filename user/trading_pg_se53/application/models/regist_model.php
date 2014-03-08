<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Regist_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	
	function insert($data)
	{
		$this->db->insert('user',$data);
		
	}
	
	function update($data)
	{
		$this->db->where('user_id', $this->session->userdata('uid'));
		$this->db->update('user',$data);
		return true;
	}
		
	function checklogin($data){
		//print_r($data);
		
		$query = $this->db->get_where('user', array('username' => $data['username'],'password'=>$data['password']));
		
		if ($query->num_rows() > 0){
			$this->load->library('session');
			
			$rs= $query->result_array();
			
			foreach($rs as $r){
				$user_id	 = $r['user_id'];
				$username 	 = $r['username'];
				$img_profile = $r['img_profile'];
				$email 		 = $r['email'];
			}
			$ar=array(
				'uid'			=> $user_id,
				'name'			=> $username,
				'img_profile' 	=> $img_profile,
				'email' 		=> $email										
			);
			
			$this->session->set_userdata($ar);
			
			return true;
			
		}else{
			return FALSE;
		}
		
		exit();
	}
	
	
}