<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function index()
{
    $this->load->view('Login');    
}

    public function userLogin()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $this->load->model('LoginModel');
        $user = $this->LoginModel->userLogin($email,$password);
        if(empty($user))
        {
            $this->session->set_flashdata('login_error',"Check your Email and Password");
            redirect(base_url('index.php/Login'));
        }
        else
        {
            $userdata = array(
                'u_id' => $user['u_id'],                
                'm_id' => $user['m_id'],
                'usertype' => $user['usertype'],
                'username' => $user['username'],
                'email' => $user['email'],
                'phone' => $user['phone'],
                );
            $this->session->set_userdata('user',$userdata);
            redirect(base_url());
        }
    }

}
