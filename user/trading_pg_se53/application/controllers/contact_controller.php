<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact_controller extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		$this->load->model('contact_model'); 
		$this->load->helper(array('form', 'url'));
	}
	
	public function contact()
	{
		$this->load->view('header');
		$this->load->view('contact');
		$this->load->view('footer');
		
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('txtName','name','required');
		$this->form_validation->set_rules('txtEmail','email','required');
		$this->form_validation->set_rules('txtTitle','title','required');
		$this->form_validation->set_rules('txtMessage','message','required');
		
		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('header');
			$this->load->view('contact');
			$this->load->view('footer');
		}
		else
		{
			$data['name'] = $this->input->post('txtName');
			$data['email'] = $this->input->post('txtEmail');
			$data['title'] = $this->input->post('txtTitle');
			$data['message'] = $this->input->post('txtMessage');
			
			
			$this->load->model('Contact_model');
			
			
			//$contact = $this->contact_model->insert($data);
			//if($contact){
				//echo 'send complete!'; 
				//redirect('Contact_controller');
				//$this->load->view('contact');
			}
			
			//redirect('index_controller');
		}
	}
	
	
}