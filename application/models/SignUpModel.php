<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SignUpModel extends CI_Model {
	public function userSignup($email,$password,$username)

	{
		$password_encrypted = md5($password);
        $userdata = array(
			'email'=>$email,
			'password'=> $password_encrypted,
			'username'=>$username
		);
		$this->db->insert("users",$userdata);

		return true;
		
    }
	
}