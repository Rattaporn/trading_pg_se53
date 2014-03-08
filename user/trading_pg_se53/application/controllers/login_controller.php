<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_controller extends CI_Controller{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('regist_model');
		$this->load->helper(array('form', 'url'));
		$this->load->library('session');
	}
	
	public function index()
	{
		$this->load->view('header');
		//$this->load->view('register_view');
		//$this->load->view('register_seller');
		//$this->load->view('register_buyer');
		$this->load->view('author');
		$this->load->view('footer');	
	}
	
	public function login()
	{
		
		
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required');
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('header');
			$this->load->view('author');
			$this->load->view('footer');
			
		}
		else
		{
			$data['username'] = $this->input->post('username');
			$password = $this->input->post('password');
			$data['password'] = md5($password);
			$this->load->model('Regist_model');
			
			
			$login = $this->regist_model->checklogin($data);
			if($login){
				$this->session->set_userdata('login','login');
				redirect('index');
			}else{
				$this->session->set_flashdata('fail','Username or password invalid');
				redirect('login_controller');
			}
			
			
		}
	
		//echo "Login";
	}
	
	public function logout(){
		$this->session->sess_destroy();
		redirect('index/index');
	}
	
	
}