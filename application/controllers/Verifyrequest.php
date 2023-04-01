<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Verifyrequest extends CI_Controller {

	public function index()
	{   
		$this->db->select('*');
		$requests['requests'] = $this->db->get("member_request")->result_array();
		if($this->session->userdata('user')['usertype'] == 'admin')
		{
		$this->load->view('admin_header');
		$this->load->view('viewrequests',$requests);
		}
		else
		{
			redirect(base_url());
		}
		
	}
	public function accept($req_id,$u_id)
	{   $this->db->delete('member_request', array('req_id' => $req_id));
		$url = base_url('index.php/Addmember/index/'.$u_id);
   		echo '<script>window.open("' . $url . '", "_blank");</script>';
		
	}
	public function decline($req_id,$u_id)
	{   
		$this->db->delete('member_request', array('req_id' => $req_id));
		redirect(base_url('index.php/Verifyrequest/index'));
	}
	

}
