<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class register_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	
	public function validate_email(){
		$email = $this->security->xss_clean($this->input->post('email'));
		$this->db->where('email', $email);
		$query = $this->db->get('users');
		if($query->num_rows == 1)
		{
			$data['v_email']=false;
			$data['email_e']=$email;
			$this->session->set_userdata($data);			
			return true;
		}
		return false;
	}

	public function insert_details(){
		$email = $this->security->xss_clean($this->input->post('email'));		
		$password = $this->security->xss_clean($this->input->post('password'));
		$fname = $this->security->xss_clean($this->input->post('fname'));
		$lname = $this->security->xss_clean($this->input->post('lname'));

		$data = array(
   			'fname' => $fname ,
   			'lname' => $lname ,
   			'email' => $email,
   			'password' => md5($password)
		);
		$this->session->set_userdata($data);
		$this->db->insert('users', $data);
	}
}
?>