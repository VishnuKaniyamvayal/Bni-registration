<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Addmember extends CI_Controller
{

	public function index($u_id)
	{
		$u_id_array = array(
			'u_id'=>$u_id
		);
		$result = $this->db->select('*')->where('u_id', $u_id)->get('users')->result_array();
		$users_array = array(
			'users'=> $result,
		);
		$this->load->model('GetInitial');
		// $this->load->model('LoadGstn');
		// $gstn['gstn'] = array($this->LoadGstn->getGstn());
		$data['initial'] = array_merge($this->GetInitial->getvalues(),$u_id_array,$users_array);
		//$data['merged_data'] = array_merge($gstn,$region);
		 //$print = array_merge($this->GetInitial->getvalues(),$u_id_array,$users_array);
		
		if($this->session->userdata('user'))
		{
			if($this->session->userdata('user')['usertype'] == 'admin')
			{
			$this->load->view('admin_header');
			$this->load->view('addmember', $data);
			// print_r($print);
			}
			else
			{
				redirect(base_url());
			}
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
