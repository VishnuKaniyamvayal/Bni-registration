<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class isRequestSent extends CI_Model {
	public function isTrue()
	{
        $userdata = $this->session->userdata('user');
        $u_id = $userdata['u_id'];
        $this->db->select('*');
        $this->db->where('u_id',$u_id);        
        $result_array = $this->db->get('member_request')->result_array();
        if(empty($result_array))
        {
            return array("request_sent" => 0);
        }
        else
        {
            return  array("request_sent" => 1);
        }
    }
        

	}