<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegisterData extends CI_Controller {
	public function index()
	{
		$data = array(
			'region'=> $this->input->post('region'),
			'chapter'=> $this->input->post('chapter'),
			't_program' => $this->input->post('t_program'),
			'venue' => $this->input->post('venue'),
			'member' => $this->input->post('member'),
			'gstn' => $this->input->post('gstn'),
			'address' => $this->input->post('address'),
			'company' => $this->input->post('company'),
			'total' => $this->input->post('total'),
			'payment' => $this->input->post('payment'),

		);
		$this->load->model('Registermodel');
		$this->Registermodel->putData($data);
		redirect(base_url('index.php/ViewData'));


		
		
		
		
	}
}
