<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registermodel extends CI_Model {
	public function putData($data)
	{
        $this->db->insert('details', $data);
        return true;
	}
}