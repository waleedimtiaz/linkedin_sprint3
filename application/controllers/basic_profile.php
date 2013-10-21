<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class basic_profile extends CI_Controller {

		public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');

	}
	public function index()
	{
		$this->load->view('style');
		$this->load->view('HnF/head');
		$this->load->view('basic_profile');
		$this->load->view('HnF/footer1');
	}

	public function process()
	{
		$this->load->model('basic_profile_model');
		$this->basic_profile_model->insert_details();
		redirect('steps','refresh');			
	}
	



}