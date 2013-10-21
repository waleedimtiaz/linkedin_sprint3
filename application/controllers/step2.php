<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class step2 extends CI_Controller {

		public function __construct()
	{
		parent::__construct();
		//$this->load->model('Donor_model');
		$this->load->helper('url');

	}

	public function index(){
	
		
	$this->load->view('HnF/head1');
	$this->load->view('style');
	$this->load->view('step2');
	$this->load->view('HnF/footer2');
	
	}
}