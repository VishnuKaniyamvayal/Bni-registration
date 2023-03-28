<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GetGstn extends CI_Model {
	
        public function isGstnExists($gstn) {
                $query = $this->db->select('gstn')->where('gstn', $gstn)->get('member');
                // if( $query->num_rows() > 0 ){
                //     return TRUE;                 
                // } else { 
                //     return FALSE;                
                // }
                return $query;
        
        }
        
        
        
        
        
        
        
        
        
        
        
        
        // public function getGstn()
	// {
        // $this->db->select('gstn');
        // $query = $this->db->get('details');
        // $results = $query->result_array();
        // $array = array();
        // foreach($results as $result)
        // {
        //      $gstn = $result['gstn'];
             
        //      array_push($array,$gstn);
        // };
        // return $array;
        // }
}