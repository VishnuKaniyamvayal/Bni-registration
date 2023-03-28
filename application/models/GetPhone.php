<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GetPhone extends CI_Model {
	
        public function isPhoneExists($phone) {
                $query = $this->db->select('phone')->where('phone', $phone)->get('member');
                return $query;
        
        }
}