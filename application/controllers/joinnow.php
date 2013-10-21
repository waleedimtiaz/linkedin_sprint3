<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class joinnow extends CI_Controller {

		public function __construct()
	{
		parent::__construct();
		//$this->load->model('Donor_model');
		$this->load->helper('url');

	}

	public function index($msg=NULL)
	{
		$page='join';
		$data['page']=$page;
		$this->session->set_userdata($data);

		$this->load->helper('url');
		if( $this->session->userdata('email_e')){
			$msg=$this->session->userdata('email_e');
			$data['msg'] = $msg;
			// $this->session->unset_userdata('email_e');
		}
		
	$this->load->view('HnF/head1');
	$this->load->view('style');
	$this->load->view('join1', $data);
	$this->load->view('HnF/footer2');
	
	}
}