<?php
error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');

class Loadmemberview extends CI_Controller {
	public function index()
{
    $this->load->model('GetMemberData');
    $data['details'] = $this->GetMemberData->getData();
    // print_r($data);
    $this->load->view('header');
    $this->load->view('viewmember',$data);

}

}
