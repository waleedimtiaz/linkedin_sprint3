<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class basic_profile_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	
	

	public function insert_details(){
		 $country = $this->security->xss_clean($this->input->post('country'));		
		 $postalcode = $this->security->xss_clean($this->input->post('pc'));
		 $profession = $this->security->xss_clean($this->input->post('optionsRadios'));


		if($profession==1){
			 $job = $this->security->xss_clean($this->input->post('job'));
			//   $emp = $this->security->xss_clean($this->input->post('emp'));	
			// if(!$emp){	
			 $company = $this->security->xss_clean($this->input->post('company'));
			// }
			 $industry = $this->security->xss_clean($this->input->post('industry'));
			$data = array(
				'email' => $this->session->userdata('email') ,
	   			'country' => $country ,
	   			'pcode' => $postalcode ,
	   			'job' => $job ,
	   			'comp' => $company ,
	   			'ind' => $industry ,
	   			'profession' =>$profession   			
			);
			$this->db->insert('employed', $data);
		}
		else if($profession==3){
			 $uni = $this->security->xss_clean($this->input->post('uni'));
			 $from = $this->security->xss_clean($this->input->post('from'));
			 $to = $this->security->xss_clean($this->input->post('to'));
			$data = array(
				'email' => $this->session->userdata('email') ,
   				'country' => $country ,
   				'pcode' => $postalcode ,
	   			'uni' => $uni ,
	   			'from' => $from ,
	   			'to' => $to  ,
	   			'profession' =>$profession 			
			);
			$this->db->insert('students', $data);
		}
		else if($profession==2){
			 $mjob = $this->security->xss_clean($this->input->post('mjob'));
			//  $emp1 = $this->security->xss_clean($this->input->post('emp1'));
			// if(!$emp1){			
			 $mcompany = $this->security->xss_clean($this->input->post('mcomp'));
			// }
			 $mindustry = $this->security->xss_clean($this->input->post('mindustry'));
			 $from1 = $this->security->xss_clean($this->input->post('from1'));
			 $to1 = $this->security->xss_clean($this->input->post('to1'));
			$data = array(
				'email' => $this->session->userdata('email') ,
	   			'country' => $country ,
	   			'pcode' => $postalcode ,
	   			'job' => $mjob ,
	   			'comp' => $mcompany ,
	   			'ind' => $mindustry ,
	   			'from' => $from1 ,
	   			'to' => $to1 ,
	   			'profession' =>$profession   			
			);
			$this->db->insert('job_seeker', $data);
		}

		// $data = array(
  //  			'fname' => $fname ,
  //  			'lname' => $lname ,
  //  			'email' => $email,
  //  			'password' => $password
		// );
		$this->session->set_userdata($data);
		//$this->db->insert('users', $data);
	}
}
?>