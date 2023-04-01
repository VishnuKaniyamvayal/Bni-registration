<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginModel extends CI_Model {
	public function userLogin($email,$password)
	{	$password_encrypted = md5($password);
        $this->db->select('u_id, m_id , usertype , username ,email, phone');
		$this->db->where('email',$email);
		$this->db->where('password',$password_encrypted);
		$result = $this->db->get('users');

		return $result->row_array();
		
    }
	
}