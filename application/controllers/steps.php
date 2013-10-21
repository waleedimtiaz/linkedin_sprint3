<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class steps extends CI_Controller {

		public function __construct()
	{
		parent::__construct();
		//$this->load->model('Donor_model');
		$this->load->helper('url');

	}

	public function index(){
	
		
	$this->load->view('HnF/head1');
	$this->load->view('style');
	$this->load->view('step1');
	$this->load->view('HnF/footer2');
	
	}

	public function step2(){
	
		
	$this->load->view('HnF/head1');
	$this->load->view('style');
	$this->load->view('step2');
	$this->load->view('HnF/footer2');
	
	}

	public function step3()
	{
	$this->load->view('HnF/head1');
	$this->load->view('style');
	$this->load->view('step3');
	$this->load->view('HnF/footer2');

	}

	public function step4(){
	
		
	$this->load->view('HnF/head1');
	$this->load->view('style');
	$this->load->view('step4');
	$this->load->view('HnF/footer2');
	
	}

	public function process()
	{
		
		if($this->security->xss_clean($this->input->post('email')))
			$email_id=$this->security->xss_clean($this->input->post('email'));
		else
			$email_id=$this->session->userdata('email');

		$base=base_url();
		$link="$base/index.php/step1/confirm_mail";
		$name=$this->session->userdata('fname');	
		$msg="Hi $name, Click on link to confirm your mail $link";
		$head="Confirm Email";
		//echo $msg;

		$data= array (
			'email_id'=>$email_id,
			'msg'=>$msg,
			'head'=>$head
		);	
		
		$this->load->model('mail');
		$this->mail->send_mail($data);

		/*$this->load->view('HnF/head1');
		$this->load->view('style');
		$this->load->view('step2');
		$this->load->view('HnF/footer2');*/
		$this->step2();
			
	}

	public function confirm_mail($msg=NULL)
	{
		$msg='yes';
		$data['msg']=$msg;
		$this->load->view('HnF/head1');
		$this->load->view('style');
		$this->load->view('step1',$data);
		$this->load->view('HnF/footer2');
	}

}
