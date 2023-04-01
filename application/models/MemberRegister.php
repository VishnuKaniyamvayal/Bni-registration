<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MemberRegister extends CI_Model {
	public function memberReg($data)
	{
        $this->db->insert('member', $data);
		$insert_id = $this->db->insert_id();
        $query = $this->db->get_where('member', array('m_id' => $insert_id));
        return $query->result_array();
	}
	public function check_region($region){
		$this->db->select('r_id');
		$this->db->where('region',$region);
		return $this->db->get('region')->row_array();

	}
}