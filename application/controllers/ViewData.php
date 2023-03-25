<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ViewData extends CI_Controller {
	public function index()
{
    $this->load->model('GetData');
    $reg_data['details'] = $this->GetData->getData();
    $this->load->view('view',$reg_data);
    
}

}
