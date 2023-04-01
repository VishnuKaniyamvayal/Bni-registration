<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subrequest extends CI_Controller {

	public function index()
	{   
		$plan = $this->input->post('plan');
		$userdata = $this->session->userdata('user');
		$member_request = array(
			'u_id' => $userdata['u_id'],
			'name' => $userdata['username'],
			'email' => $userdata['email'],
			'phone' => $userdata['phone'],
			'plan' => $plan,
		);
		$this->db->insert('member_request',$member_request);
		redirect(base_url('index.php/Subrequest/success'));
		
	}
	public function success()
	{
		$this->load->view('successpagerequest');
	}
}
