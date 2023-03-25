<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loadtotal extends CI_Controller {
	public function index()
{
    $t_id = $this->input->post('t_id');
    $data = $this->db->get_where('total', array('t_id' => $t_id))->result_array(); // Retrieve data from the database based on the ID
    echo json_encode($data); 
}

}
