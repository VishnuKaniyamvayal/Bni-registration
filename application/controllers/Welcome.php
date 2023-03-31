<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	
	{
		if($this->session->userdata('user'))
		{
			$this->load->view('s_admin_header');
			$this->load->view('home');
		}
		else
		{
			$this->load->view('no_login_header');
			$this->load->view('home');
		}
		
		
		
	}
}
