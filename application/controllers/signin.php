<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class signin extends CI_Controller {

		public function __construct()
	{
		parent::__construct();
		//$this->load->model('Donor_model');
		$this->load->helper('url');
		//$this->load->library('session');

	}

	public function index($msg=NULL)
	{

		$this->load->helper('url');
		if($this->session->userdata('email')){
			//$this->session->sess_destroy();
			redirect('page', 'refresh');
			//$this->load->view('default');
		}else{
			$data['msg'] = $msg;
			$data['heading'] = "Login";
			//$this->load->view('common/header',$data);
			//$this->load->view('loginView/login_view', $data);
			$this->load->view('style');
			$this->load->view('HnF/head');
			$this->load->view('signin', $data);
			$this->load->view('HnF/footer1');
		}
	
	}

	public function process()
	{
		
		// Load the model
		$this->load->model('signin_model');
		// Validate the user can login
		$result = $this->signin_model->validate();
		// Now we verify the result
		if(! $result){
			$this->load->model('register_model');
			$exist=$this->register_model->validate_email();
			if($exist){
			// If user did not validate, then show them login page again
			$msg = $this->session->userdata('email_e');
			$this->index($msg);
			}
			else{
				$msg = 'error';
				$this->index($msg);
			}
		
		}
		else{
			$this->load->view('default');
			// If user did validate, 
			// Send them to members area
			//redirect('default','refresh');
		}
	
	}

	public function do_logout(){
		$this->session->sess_destroy();
		redirect('index','refresh');
	}
}