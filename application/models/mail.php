<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class mail extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	
	// private function  is_connected()
	// {
	//     $connected = @fsockopen("www.gmail.com", [8080]); //website and port
	//     if ($connected){
	//         $is_conn = true; //action when connected
	//         fclose($connected);
	//     }else{
	//         $is_conn = false; //action in connection failure
	//     }
	//     return $is_conn;

	// }

	public function send_mail($data=array()){
	

		$to=$data['email_id'];
		$msg=$data['msg'];
		$head=$data['head'];
		//$connect=$this->is_connected();
		//if($connect){
		
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
		$this->email->to($to); 
		$this->email->subject($head);
		$this->email->message($msg);	

		$this->email->send();
		// $mail_msg="sent";
		// $this->session->set_userdata('$mail_msg');
		// }
		// else{
		// 	$mail_msg="nsent";
		// 	$this->session->set_userdata('$mail_msg');
		// }
		 }

	
}
?>