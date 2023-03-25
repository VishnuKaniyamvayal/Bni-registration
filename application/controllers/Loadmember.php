<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loadmember extends CI_Controller {
	public function index()
{
    $c_id = $this->input->post('c_id');
    $data = $this->db->get_where('member', array('c_id' => $c_id))->result_array(); // Retrieve data from the database based on the ID
    echo json_encode($data); 
}

}
