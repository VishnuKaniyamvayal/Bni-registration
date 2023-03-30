<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CheckAndReturn extends CI_Model {
	public function region($region)
	{
        $this->db->select('r_id');		
		$this->db->where('region',$region);
		$query = $this->db->get('region');
        $result = $query->result_array();
        if(!(empty($result)))
		{
			return $result[0];
		}
		else{
			return array();
		}
    }
	public function chapter($chapter,$region)
	{	//get chapter
        $this->db->select('c_id');		
		$this->db->where('chapter',$chapter);
		$chapter_query = $this->db->get('chapter');
        $result_chapter = $chapter_query->result_array();
		if(empty($result_chapter))
		{
			return 'CHAPTERNOTFOUND';
		};
		//get region 
		$this->db->select('r_id');		
		$this->db->where('region',$region);
		$region_query = $this->db->get('region');
        $result_region = $region_query->result_array();
		if(empty($result_region))
		{
			return "REGIONNOTFOUND";
		};
		//check whether the region matches chapter
		$this->db->select('*');
		$this->db->where('c_id',$result_chapter[0]['c_id']);
		$this->db->where('r_id',$result_region[0]['r_id']);
		$both_query = $this->db->get('chapter');
		$main_query = $both_query->result_array();
		if(!(empty($main_query)))
		{
			return $result_chapter[0]['c_id'];	
		};
		return "NOTMATCHINGERROR";
	}
	public function gstn($gstn)
	{
		$this->db->select('gstn');
		$this->db->where('gstn',$gstn);
		$gstn = $this->db->get('member');
		$main_query = $gstn->result_array();
        if(!(empty($main_query)))
		{
			return $main_query[0];
		}
		else{

			return array();
		}
    }
	public function email($email)
	{	$regex = '/^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i';
		if (!preg_match($regex, $email))
		{
			return 'INVALID';
		}
		$this->db->select('email');
		$this->db->where('email',$email);
		$email = $this->db->get('member');
		$main_query = $email->result_array();
        if(!(empty($main_query)))
		{
			return $main_query[0];
		}
		else{

			return array();
		}
    }
	public function phone($phone)
	{
		$regex = '/^[0-9]/';
		if (!preg_match($regex, $phone))
		{
			return 'INVALIDCHARACTER';
		}
		if (strlen($phone) != 10)
		{
			return 'INVALIDLENGTH';
		}
		$this->db->select('phone');
		$this->db->where('phone',$phone);
		$phone = $this->db->get('member');
		$main_query = $phone->result_array();
        if(!(empty($main_query)))
		{
			return $main_query[0];
		}
		else{

			return "EMPTY";
		}
    }
	public function company($company)
	{	$regex = '/[^A-Za-z0-9]/';
		if (preg_match($regex, $company))
		{
			return FALSE;
		}

			return TRUE;
		
    }
}