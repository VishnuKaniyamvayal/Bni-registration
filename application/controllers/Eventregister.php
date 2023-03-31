<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Eventregister extends CI_Controller {

	public function index()
	{
		$this->load->model('Get');
		$data['regions'] = $this->Get->getRegion();
		if($this->session->userdata('user'))
		{
		$this->load->view('s_admin_header');
		$this->load->view('form',$data);
		}
		else
		{
			redirect(base_url());
		}
		
	}
}
