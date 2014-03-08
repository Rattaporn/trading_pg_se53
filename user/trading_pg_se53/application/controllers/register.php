<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller{
	
	function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->model('regist_model');
		$this->load->helper(array('form','url'));
		header("Content-type:text/html;charset=utf-8");
		
	}
	
	public function index()
	{
		$this->load->view('header');
		//$this->load->view('register_view');
		//$this->load->view('register_seller');
		//$this->load->view('register_buyer');
		$this->load->view('register');
		$this->load->view('footer');
		
	}
	
	public function input()
	{
		$username 	= $this->input->post('username');
		$password 	= $this->input->post('password');
		$cfpassword = $this->input->post('cfpassword');
		$firstname 	= $this->input->post('firstname');
		$lastname 	= $this->input->post('lastname');
		$phone		= $this->input->post('phone');
		$address 	= $this->input->post('address');
		$email		= $this->input->post('email');		
		$img_profile = $this->input->post('userfile');
		$accnum	= $this->input->post('accnum');
								
		$data = array(
			'username' 	=> $username,
			'password' 	=> md5($password),
			'firstname'	=> $firstname,
			'lastname'	=> $lastname,
			'phone'		=> $phone,
			'address'	=> $address,
			'email'		=> $email,			
			'img_profile' => $img_profile,
			'accnum'	=> $accnum
			
		);
		
		$this->regist_model->insert($data);
		//echo "<script>javascript: alert('test')></script>";
		redirect('login_controller/index');
	}
	

	function do_upload()
	{
		$config['upload_path'] = 'resource/imgProfiles';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = '100';
		$config['max_width'] = '1024';
		$config['max_height'] = '768';
		
		$this->load->library('upload',$config);
		
		if(! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());			
			$this->load->view('register', $error);
		}
		else
		{
			$data = array(
				'img_profile' => $this->upload->data()
			);
			echo $img_profile['file_name'];
		}
				
    }
	
		
	public function editprofile($uid)
	{
		//echo $uid;
		
		$query = $this->db->get_where('user', array('user_id' => $uid)); 
		//echo $this->db->last_query();
		
		$rs['data'] = $query->result_array();  //show all data.
		//$arr['data'] = $rs;
		$this->load->view('header');
		$this->load->view('edit_profile',$rs);
		$this->load->view('footer');

		//$uid = $this->input->get('uid')
	}
	
	public function changepassword()
	{						
		$this->load->view('header');
		$this->load->view('changepassword');
		$this->load->view('footer');
	}
	
	
	function update()
	{
			$firstname 	= $this->input->post('firstname');
			$lastname 	= $this->input->post('lastname');
			$password	= $this->input->post('password');
			$phone		= $this->input->post('phone');
			$address 	= $this->input->post('address');
			$email		= $this->input->post('email');		
			$img_profile= $this->input->post('userfile');
			$accnum		= $this->input->post('accnum');
									
			$data = array(
				
				'firstname'	=> $firstname,
				'lastname'	=> $lastname,
				'phone'		=> $phone,
				'address'	=> $address,
				'email'		=> $email,			
				'img_profile' => $img_profile,
				'accnum'	=> $accnum
				
			);						 	
			echo $phone;
			echo $email;
			echo $address; 
			echo $img_profile; 
			echo $accnum;	
							
			$this->regist_model->update($data);
		
		/*	
		$this->load->library('form_validation');
		$this->form_validation->set_rules('firstname','Firstname','required');
		$this->form_validation->set_rules('lastname','Lastname','required');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('address','Address','required');
		$this->form_validation->set_rules('phone','Phone','required');
		$this->form_validation->set_rules('accnum','Account number','required');
		$this->form_validation->set_rules('img_profile','Avatar','required');
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('header');
			$this->load->view('edit_profile');
			$this->load->view('footer');
		}
		else
		{
			$data['firstname'] = $this->input->post('firstname');
			$data['lastname'] = $this->input->post('lastname');
			$data['phone'] = $this->input->post('phone');
			$data['address'] = $this->input->post('address');			
			$data['accnum'] = $this->input->post('accnum');
			$data['img_profile'] = $this->input->post('userfile');
			
			$this->load->model('Regist_model');
			
			$editprofile = $this->regist_model->update($data);
			if($editprofile){
				echo 'send complete!'; 				
				
			}
			
			
		} 
		*/			
	}
	
	 
}
