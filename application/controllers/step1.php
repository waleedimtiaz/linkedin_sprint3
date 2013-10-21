<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class step1 extends CI_Controller {

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
		//echo $msg;	
		
		$config = Array(		
		    'protocol' => 'smtp',
		    'smtp_host' => 'ssl://smtp.googlemail.com',
		    'smtp_port' => 465,
		    'smtp_user' => 'waleedij@gmail.com',
		    'smtp_pass' => 'w12345678w',
		    'smtp_timeout' => '20',
		    'mailtype'  => 'text', 
		    'charset'   => 'iso-8859-1'
		);
 
		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");

		$this->email->from('waleedij@gmail.com', 'Waleed');
		$this->email->to($email_id); 
		$this->email->subject('confirm email');
		$this->email->message($msg);	

		$this->email->send();

		$this->load->view('HnF/head1');
		$this->load->view('style');
		$this->load->view('step2');
		$this->load->view('HnF/footer2');
			
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
