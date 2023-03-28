<?php
error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');

class Loadgstn extends CI_Controller {

    function index(){
        $this->load->model('GetGstn');
        $count= $this->GetGstn->isGstnExists($this->input->post('gstn'));
        $result = $count->result();   
        if ( $result[0] == TRUE ) {
                echo json_encode(FALSE);
            } else {
                echo json_encode(TRUE);
            }
 
    }



















    // 	public function index()
// {   $this->db->select('gstn');
//     $query = $this->db->get('details');
//     $results = $query->result_array();
//     $array = array();
//     foreach($results as $result)
//     {
//          $gstn = $result['gstn'];
         
//          array_push($array,$gstn);
//     };
    
//     echo json_encode($array); 
//}

}
