<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {
	public function index()
{
    $this->load->view('signup');    
}

    public function userSignup()
    {   $username = $this->input->post('username');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $phone = $this->input->post('phone');
        $this->load->model('SignUpModel');
        $created = $this->SignUpModel->userSignup($email,$password,$username,$phone);
        if($created)
        {
            $this->load->model('LoginModel');
            $user = $this->LoginModel->userLogin($email,$password);
            $userdata = array(
                'u_id'=>$user['u_id'],
                'm_id'=>$user['m_id'],
                'usertype'=>$user['usertype'],
                'username'=>$user['username'],
                'email'=>$user['email'],
                'phone'=>$user['phone'],

            );
            $this->session->set_userdata('user',$userdata);
            // print_r($this->session->userdata());
            redirect(base_url());
            

        }
    }

}
