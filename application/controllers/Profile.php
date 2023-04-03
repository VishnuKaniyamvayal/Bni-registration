<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{

	public function index()
	{
		if($this->session->userdata('user'))
		{	if($this->session->userdata('user')['usertype'] == 's_admin')
			{
				$this->load->view('member_header');
				$user = $this->session->userdata('user');
				$member = $this->db->select('*')->where('m_id', $user['m_id'])->get('member')->result_array();
				$c_id = $member[0]['c_id'];
				$r_id_array = $this->db->select('r_id')->where('c_id', $c_id)->get('chapter')->result_array();
				$r_id = $r_id_array[0]['r_id'];
				$chapter = $this->db->select('chapter')->where('c_id', $c_id)->get('chapter')->result_array();
				$region = $this->db->select('region')->where('r_id', $r_id)->get('region')->result_array();

				$this->load->model('IsRequestSent');
				$is_request_sent = $this->IsRequestSent->isTrue();
				

				$userdata['user'] = array_merge($user,$member,$chapter,$region,$is_request_sent);
				$this->load->view('profile',$userdata);
				//print_r(array_merge($user,$member,$chapter,$region,$is_request_sent));

				$userdata['user'] = array_merge($user,$member,$chapter,$region,$is_request_sent);
				$this->load->view('profile',$userdata);
			}
			elseif($this->session->userdata('user')['usertype'] == 'admin')
			{
				$this->load->view('member_header');
				$user = $this->session->userdata('user');
				$member = $this->db->select('*')->where('m_id', $user['m_id'])->get('member')->result_array();
				$c_id = $member[0]['c_id'];
				$r_id_array = $this->db->select('r_id')->where('c_id', $c_id)->get('chapter')->result_array();
				$r_id = $r_id_array[0]['r_id'];
				$chapter = $this->db->select('chapter')->where('c_id', $c_id)->get('chapter')->result_array();
				$region = $this->db->select('region')->where('r_id', $r_id)->get('region')->result_array();

				$this->load->model('IsRequestSent');
				$is_request_sent = $this->IsRequestSent->isTrue();
				

				$userdata['user'] = array_merge($user,$member,$chapter,$region,$is_request_sent);
				$this->load->view('profile',$userdata);
				//print_r(array_merge($user,$member,$chapter,$region,$is_request_sent));
			}
			elseif($this->session->userdata('user')['usertype'] == 'member')
			{
				$this->load->view('member_header');
				$user = $this->session->userdata('user');
				$member = $this->db->select('*')->where('m_id', $user['m_id'])->get('member')->result_array();
				$c_id = $member[0]['c_id'];
				$r_id_array = $this->db->select('r_id')->where('c_id', $c_id)->get('chapter')->result_array();
				$r_id = $r_id_array[0]['r_id'];
				$chapter = $this->db->select('chapter')->where('c_id', $c_id)->get('chapter')->result_array();
				$region = $this->db->select('region')->where('r_id', $r_id)->get('region')->result_array();

				$this->load->model('IsRequestSent');
				$is_request_sent = $this->IsRequestSent->isTrue();
				

				$userdata['user'] = array_merge($user,$member,$chapter,$region,$is_request_sent);
				$this->load->view('profile',$userdata);
				//print_r(array_merge($user,$member,$chapter,$region,$is_request_sent));
			}
		}
		else
		{
			redirect(base_url('/'));
		}
		
	}
	public function upload()
	{
	}
}
