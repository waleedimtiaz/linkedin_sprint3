<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class index extends CI_Controller {

		public function __construct()
	{
		parent::__construct();
		//$this->load->model('Donor_model');
		$this->load->helper('url');

	}

	public function index()
	{
		$this->load->view('style');
		$this->loadpage();
	}
	public function loadpage()
	{	
		$page='sign';
		$data['page']=$page;
		$this->session->set_userdata($data);
		
		$this->load->helper('url');
		if( $this->session->userdata('email_e')){
			$msg=$this->session->userdata('email_e');
			$data['msg'] = $msg;
			// $this->session->unset_userdata('email_e');
		}

	$this->load->view('HnF/head');
	$this->load->view('signup',$data);		
	$this->load->view('HnF/footer');
	
	}
}