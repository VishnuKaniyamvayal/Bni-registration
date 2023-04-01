<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Addtraining extends CI_Controller
{

	public function index()
	{
		if($this->session->userdata('user'))
		{
			if($this->session->userdata('user')['usertype'] == 's_admin')
			{
			$this->load->view('s_admin_header');
			$this->load->view('addtraining');
			}
			elseif($this->session->userdata('user')['usertype'] == 'admin')
			{
			$this->load->view('admin_header');
			$this->load->view('addtraining');
			}
		}
		else
		{	
			redirect(base_url());
		}
	}
}
