<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loadmemberdetails extends CI_Controller {
	public function index()
{
    $m_id = $this->input->post('m_id');
    $data = $this->db->get_where('member', array('m_id' => $m_id))->result_array(); // Retrieve data from the database based on the ID
    echo json_encode($data); 
}

}
