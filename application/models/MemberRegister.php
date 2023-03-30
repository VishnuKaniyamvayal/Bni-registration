<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MemberRegister extends CI_Model {
	public function memberReg($data)
	{
        $this->db->insert('member', $data);
        return true;
	}
	public function check_region($region){
		$this->db->select('r_id');
		$this->db->where('region',$region);
		return $this->db->get('region')->row_array();

	}
}