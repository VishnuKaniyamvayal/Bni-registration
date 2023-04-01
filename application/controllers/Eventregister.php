<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Eventregister extends CI_Controller {

	public function index()
	{
		$this->load->model('GetInitial');
		$data['initial'] = $this->GetInitial->getvalues();
		if($this->session->userdata('user')['usertype'] == 'member' && $this->session->userdata('user')['m_id'] != NULL)
		{
		$this->load->view('member_header');
		$this->load->view('form',$data);
		}
		else
		{
			redirect(base_url());
		}
		// print_r($this->GetInitial->getvalues());
		
	}
}
