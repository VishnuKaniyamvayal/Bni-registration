<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Addtraining extends CI_Controller
{

	public function index()
	{
		if($this->session->userdata('user'))
		{
		$this->load->view('s_admin_header');
		$this->load->view('addtraining');
		}
		else
		{	
			redirect(base_url());
		}
	}
}
