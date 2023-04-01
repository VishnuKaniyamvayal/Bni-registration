<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GetTrainingData extends CI_Model {
	public function getData()
	{
      $this->db->select('t_program');
      $t_program = $this->db->get('t_program')->result_array();
      $this->db->select('venue');
      $venue = $this->db->get('venue')->result_array();
      $this->db->select('total');
      $total = $this->db->get('total')->result_array();
      $result = array_merge($t_program,$venue,$total);
      return $result;
   }
        

	}
