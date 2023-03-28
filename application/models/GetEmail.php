<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GetEmail extends CI_Model {
	
        public function isEmailExists($email) {
                $query = $this->db->select('email')->where('email', $email)->get('member');
                return $query;
        
        }
}