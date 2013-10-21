<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class page extends CI_Controller {

		public function __construct()
	{
		parent::__construct();
		//$this->load->model('Donor_model');
		$this->load->helper('url');

	}

	public function index()
	{
	$this->load->view('default');
	}
}