<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Addmember extends CI_Controller {

	public function index()
	{	$this->load->model('Get');
		// $this->load->model('LoadGstn');
		// $gstn['gstn'] = array($this->LoadGstn->getGstn());
		$data['regions'] = $this->Get->getRegion();
		// $data['merged_data'] = array_merge($gstn,$region);
		$this->load->view('header');
		$this->load->view('addmember',$data);
		//print_r($data);
	}
	public function upload()
	{
		$this->load->view('header');
		$this->load->view('fileupload');
	}
}
