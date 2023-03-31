<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Registertraining extends CI_Controller {

	public function index()
	{   $_SESSION['msg'] = '';
		$t_program = array(
			't_program' => $this->input->post('t_program'),
		);
        $this->db->insert("t_program",$t_program);
        $t_program_parameter = $this->input->post('t_program');
        $total = $this->input->post('total');
        $venue = $this->input->post('venue');
        $this->load->model('TrainingRegister');
        $this->TrainingRegister->trainingReg($t_program_parameter,$total,$venue);
        redirect(base_url('index.php/Uploadsuccess_training'));
    }

	

    // public function test()
	// {   $this->load->model('CheckAndReturn');
    //     $chapter = "";
    //     $region = "ruralcoimbatore";
    //     $chapter_checked = $this->CheckAndReturn->chapter($chapter,$region);
    //     echo gettype((int)$chapter_checked);
    // }
	

	}