<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	
	{
		if($this->session->userdata('user'))
		{	if($this->session->userdata('user')['usertype'] == 's_admin')
			{
			$this->load->view('s_admin_header');
			$this->load->view('home');
			}
			elseif($this->session->userdata('user')['usertype'] == 'admin')
			{
			$this->load->view('admin_header');
			$this->load->view('home');
			}
			elseif($this->session->userdata('user')['usertype'] == 'member')
			{
			$this->load->view('member_header');
			$this->load->view('home');
			}
		}
		else
		{
			$this->load->view('no_login_header');
			$this->load->view('home');
		}
		
		
		
	}
}
