<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TrainingRegister extends CI_Model {
	public function trainingReg($t_program,$total,$venue)
	{	$this->db->select("t_id");
        $this->db->where('t_program',$t_program);
		$query = $this->db->get('t_program')->result_array();
		$result = $query[0];
		$t_id = $result['t_id'];
 		$venue = array(
		 	't_id'=>$t_id,
		 	'venue'=>$venue,
		);
		$total = array(
		 	't_id'=> $t_id,
		 	'total'=>$total,
		);
		$this->db->insert('venue',$venue);
		$this->db->insert('total',$total);
        return true;
	}
}