<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Addmember extends CI_Controller
{

	public function index()
	{
		$this->load->model('Get');
		// $this->load->model('LoadGstn');
		// $gstn['gstn'] = array($this->LoadGstn->getGstn());
		$data['regions'] = $this->Get->getRegion();
		// $data['merged_data'] = array_merge($gstn,$region);
		if($this->session->userdata('user'))
		{
		$this->load->view('s_admin_header');
		$this->load->view('addmember', $data);
		}
		else
		{	
			redirect(base_url());
		}
		//print_r($data);
	}
	public function upload()
	{
		$this->load->view('s_admin_header');
		$this->load->view('fileupload');
	}
}
