<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->model('Get');
		$data['regions'] = $this->Get->getRegion();
		$this->load->view('header',$data);
		$this->load->view('form',$data);
	}
}
