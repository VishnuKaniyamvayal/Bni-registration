<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GetData extends CI_Model {
	public function getData()
	{
        $this->db->select('*');
        $query = $this->db->get('details');
        $data = $query->result();
        $data_array = json_decode(json_encode($data), true);
        // $data_array = $data_array_u[0];
        $p_array = array();

        
         foreach ($data_array as $data_member) {
            $this->db->select('region');
            $this->db->where('r_id', $data_member['region']);
            $region_query = $this->db->get('region')->result();
            $temp = json_decode(json_encode($region_query), true);
            $region = $temp[0]['region'];

            //chapter

            $this->db->select('chapter');
            $this->db->where('c_id', $data_member['chapter']);
            $chapter_query = $this->db->get('chapter')->result();
            $temp = json_decode(json_encode($chapter_query), true);
            $chapter = $temp[0]['chapter'];

            //t_program

            $this->db->select('t_program');
            $this->db->where('t_id', $data_member['t_program']);
            $program_query = $this->db->get('t_program')->result();
            $temp = json_decode(json_encode($program_query), true);
            $t_program = $temp[0]['t_program'];

            //member

            $this->db->select('name');
            $this->db->where('m_id', $data_member['member']);
            $member_query = $this->db->get('member')->result();
            $temp = json_decode(json_encode($member_query), true);
            $member = $temp[0]['name'];

            $venue = $data_member['venue'];
            $gstn = $data_member['gstn'];
            $address = $data_member['address'];
            $company = $data_member['company'];
            $total = $data_member['total'];
            $payment = $data_member['payment'];


         $temp_array = array(
			'region'=> $region,
			'chapter'=> $chapter,
			't_program' => $t_program,
         'venue' => $venue,
			'member' => $member,
			'gstn' => $gstn,
			'address' => $address,
			'company' => $company,
			'total' => $total,
			'payment' => $payment
     );

        array_push($p_array, $temp_array);
}
        

        

        //return $data;
        return $p_array;

	}
}