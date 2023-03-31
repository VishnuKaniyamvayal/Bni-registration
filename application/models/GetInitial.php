<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GetInitial extends CI_Model {
	public function getvalues()
	{
        $this->db->select('*');
        $region_query = $this->db->get('region');
        $t_program_query  = $this->db->get('t_program');
        $region = array($region_query->result_array());
        $t_program = array($t_program_query->result_array());
        $result = array_merge($region , $t_program);
        return $result;
        }
}