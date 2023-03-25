<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loadchapter extends CI_Controller {
	public function index()
{
    $r_id = $this->input->post('r_id');
    $data = $this->db->get_where('chapter', array('r_id' => $r_id))->result_array(); // Retrieve data from the database based on the ID
    echo json_encode($data); 
}

}
