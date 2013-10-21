<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class mycountry extends CI_Controller {

		public function __construct()
	{
		parent::__construct();
		//$this->load->model('Donor_model');
		$this->load->helper('url');

	}

	public function index()
	{
	$this->load->view('HnF/head');
	$this->load->view('style');
	$this->load->view('country');
	$this->load->view('HnF/footer1');
	}
}