<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MemberRegister extends CI_Model {
	public function memberReg($data)
	{
        $this->db->insert('member', $data);
        return true;
	}
}