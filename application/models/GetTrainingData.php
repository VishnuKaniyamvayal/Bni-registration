<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GetTrainingData extends CI_Model {
	public function getData()
	{
      $this->db->select('t_program');
      $t_program = array($this->db->get('t_program')->result_array());
      $this->db->select('venue');
      $venue = array($this->db->get('venue')->result_array());
      $this->db->select('total');
      $total = array($this->db->get('total')->result_array());
      $result = array_merge($t_program,$venue,$total);
      return $result;
   }
        

	}
