<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loadtraining extends CI_Controller {
	public function index()
{   $this->db->select("*");
    $data = $this->db->get("t_program")->result_array(); // Retrieve data from the database based on the ID
    echo json_encode($data); 
}

}