<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GetMemberData extends CI_Model {
	public function getData()
	{
        $this->db->select('*');
        $query = $this->db->get('member');
        $data = $query->result();
        $data_array = json_decode(json_encode($data), true);
        // $data_array = $data_array_u[0];
        $p_array = array();

        
         foreach ($data_array as $data_member) {
            $this->db->select('r_id');
            $this->db->where('c_id', $data_member['c_id']);
            $region_query = $this->db->get('chapter')->result();
            $temp = json_decode(json_encode($region_query), true);
            $region_id = $temp[0]['r_id'];


            $this->db->select('region');
            $this->db->where('r_id', $region_id);
            $region_query = $this->db->get('region')->result();
            $temp = json_decode(json_encode($region_query), true);
            $region = $temp[0]['region'];

            //chapter

            $this->db->select('chapter');
            $this->db->where('c_id', $data_member['c_id']);
            $chapter_query = $this->db->get('chapter')->result();
            $temp = json_decode(json_encode($chapter_query), true);
            $chapter = $temp[0]['chapter'];

            //t_program

            //member name

            
            $name = $data_member['name'];
            $gstn = $data_member['gstn'];
            $address = $data_member['address'];
            $company = $data_member['company'];
            $email = $data_member['email'];
            $phone = $data_member['phone'];


         $temp_array = array(

         'region'=> $region,
			'chapter'=> $chapter,
			'name' => $name,
			'gstn' => $gstn,
			'address' => $address,
			'company' => $company,
			'email' => $email,
			'phone' => $phone
     ); 

        array_push($p_array, $temp_array);
}
        

        

      //   return $data_array;
        return $p_array;

	}
}