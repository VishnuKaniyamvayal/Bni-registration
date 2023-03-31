<?php
error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');

class Loadtrainingview extends CI_Controller {
	public function index()
{
    $this->load->model('GetTrainingData');
    // $data['details'] = 
	print_r($this->GetTrainingData->getData());
    // if($this->session->userdata('user'))
	// 	{
    //      $this->load->view('s_admin_header');
    //      $this->load->view('viewtraining',$data);
	// 	}
	// 	else
	// 	{
	// 		redirect(base_url());
	// 	}

}

}
