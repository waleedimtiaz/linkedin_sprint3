<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class register extends CI_Controller {

		public function __construct()
	{
		parent::__construct();
		//$this->load->model('Donor_model');
		$this->load->helper('url');
		//$this->load->library('session');

	}
	public function index()
	{
		$this->process();
	}
	
	public function process()
	{
		$this->load->model('register_model');
		$exist=$this->register_model->validate_email();

		if(! $exist){
			$this->register_model->insert_details();
			redirect('basic_profile','refresh');
		}

		else{
			$page=$this->session->userdata('page');
			if($page=='join')
				redirect('joinnow');
			else if($page=='sign')
				redirect('index');

		}

	}

}