<?php
error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');

class ViewData extends CI_Controller {
	public function index()
{
    $this->load->model('GetData');
    $reg_data['details'] = $this->GetData->getData();
    // print_r($reg_data);
    if($this->session->userdata('user')['usertype'] == 's_admin')
		{
        $this->load->view('s_admin_header');
        $this->load->view('viewdata',$reg_data);
		}
		else
		{
			redirect(base_url());
		}
    
}

}
