<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class changepw extends CI_Controller {

		public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');

	}

	public function index($email=NULL)
	{
		$email = $this->security->xss_clean($this->input->get('email'));		
		$data['email']=$email;
		$this->load->view('HnF/head');
		$this->load->view('style');
		$this->load->view('changepw',$data);
		$this->load->view('HnF/footer1');
	}

	public function send_mail($email_id=NULL){

	$email_id = $this->security->xss_clean($this->input->post('email'));	
	$base=base_url();
		$link="$base/index.php/resetpw";
		$msg="Hi $email_id, Click on link to reset your password $link";
		$head="Reset Password";
		
		$data= array (
			'email_id'=>$email_id,
			'msg'=>$msg,
			'head'=>$head
		);	

		if($sock= @fsockopen('www.google.com',80,$num,$error,5)){
			$mail_msg="sent";
		 	$this->session->set_userdata('$mail_msg');
		$this->load->model('mail');
		$this->mail->send_mail($data);
			
		}
		
		$this->proceed();
		
	}

	public function proceed()
	{
		//$email = $this->security->xss_clean($this->input->get('email'));		
		
		$this->load->view('HnF/head');
		$this->load->view('style');
		$this->load->view('changepw_proceed');
		$this->load->view('HnF/footer1');
	}
}