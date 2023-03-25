<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Get extends CI_Model {
	public function getRegion()
	{
        $this->db->select('*');
        $query = $this->db->get('region');
        $result = $query->result_array();
        return $result;
        }
}