<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
 class Trading extends CI_Controller { 

	function __construct()  
	{
		parent::__construct();
		
		$this->load->model('trade_model');
		$this->load->helper(array('form', 'url'));
	}
	
	public function index() 
	{
		$this->load->view('header');		
		$this->load->view('home_view');				
		$this->load->view('footer');
	}
	
	public function sale()
	{
		$this->load->view('header');
		$this->load->view('manage');
		$this->load->view('footer');		
	}
	
	public function addPhoto(){
		
		$img_name 	= $this->input->post('img_name');
		$img_type 	= $this->input->post('img_type');
		$description = $this->input->post('description');
		$keyword	= $this->input->post('keyword');
		$place_name = $this->input->post('place_name');
		$address	= $this->input->post('address');
		$latitude 	= $this->input->post('latitude');
		$longtitude	= $this->input->post('longtitude');
		$img_file	= $this->input->post('imagefile');
		
		$data1 = array(
			'img_name' 		=> $img_name,
			'img_type' 		=> $img_type,
			'description' 	=> $description,
			'keyword'		=> $keyword,
			'place_name'	=> $place_name,
			'address'		=> $address,
			'latitude'		=> $latitude,
			'longtitude'	=> $longtitude,
			'imagefile'		=> $img_file			
		);
		
		echo $img_name; 	
		echo $img_type;
		echo $description;
		echo $address; 
		echo $img_file; 
		echo $latitude;
		
		// $this->trade_model->insert($data1);
	}
	
	function do_upload()
	{
		$config['upload_path'] = 'resource/imgTrade';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = '100';
		$config['max_width'] = '1024';
		$config['max_height'] = '768';
		
		$this->load->library('upload',$config);
		
		if(! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());
			
			$this->load->view('manage', $error);
		}
		else
		{
			$data = array(
				'img_file' => $this->upload->data()
			);
			echo $img_file['file_name'];
		}
				
    }
	
	
		
}