<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Registermember extends CI_Controller {

	public function index()
	{
		$data = array(
			'c_id'=> $this->input->post('chapter'),
			'name' => $this->input->post('name'),
			'gstn' => $this->input->post('gstn'),
			'address' => $this->input->post('address'),
			'company' => $this->input->post('company'),
		);
		 $this->load->model('MemberRegister');
		 $this->MemberRegister->memberReg($data);
    }

	public function upload()
	{
		$file = $_FILES["member_details"]["tmp_name"];
        
            $this->load->library('excel');
            
            $inputFileName = $file;
                
            //  Read your Excel workbook
            try {
                $inputFileType = PHPExcel_IOFactory::identify($inputFileName);
                $objReader = PHPExcel_IOFactory::createReader($inputFileType);
                $objPHPExcel = $objReader->load($inputFileName);
            } catch(Exception $e) {

                die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
            }
            
            //  Get worksheet dimensions
            $sheet = $objPHPExcel->getSheet(0);
            $n=$sheet->getHighestRow(); 
                
            $err = "";

            $upload_format = array('region','chapter','name','gstn','address','company','email','phone');

            if($upload_format[0] != $sheet->getCell('A1')->getValue()){
                
                $err .=  '(A1) name not matching with import format<br>';
            }
            if($upload_format[1] != $sheet->getCell('B1')->getValue()){
                
                $err .=  '(B1) name not matching with import format<br>';
            }
            if($upload_format[2] != $sheet->getCell('C1')->getValue()){
                
                $err .=  '(C1) name not matching with import format<br>';
            }
            if($upload_format[3] != $sheet->getCell('D1')->getValue()){
                
                $err .=  '(D1) name not matching with import format<br>';
            }
			if($upload_format[4] != $sheet->getCell('E1')->getValue()){
                
                $err .=  '(D1) name not matching with import format<br>';
            }
			if($upload_format[5] != $sheet->getCell('F1')->getValue()){
                
                $err .=  '(D1) name not matching with import format<br>';
            }
			if($upload_format[6] != $sheet->getCell('G1')->getValue()){
                
                $err .=  '(D1) name not matching with import format<br>';
            }
			if($upload_format[7] != $sheet->getCell('H1')->getValue()){
                
                $err .=  '(D1) name not matching with import format<br>';
            }

            if($err != ""){
                
                echo $err;
                
                die();
            }
            
            if($n <= 1){
                
                echo "Sorry, No data found";
                
                die();
            }
            
            $rows=array();
            
            for($i=2;$i<=$n;$i++){ 
                $row['c_id'] = trim($sheet->getCell('B' . $i)->getValue());
                $row['name'] = trim($sheet->getCell('C' . $i)->getValue());
                $row['gstn'] = trim($sheet->getCell('D' . $i)->getValue());
                $row['address'] = trim($sheet->getCell('E' . $i)->getValue());
                $row['company'] = trim($sheet->getCell('F' . $i)->getValue());
                $row['email'] = trim($sheet->getCell('G' . $i)->getValue());
                $row['phone'] = trim($sheet->getCell('H' . $i)->getValue());
				$rows[]=$row;
            }
                foreach($rows as $cols){
                    $this->load->model('MemberRegister');
		 			$this->MemberRegister->memberReg($cols);
                }
                redirect(base_url('index.php/Addmember'));
            
				
    }
            
	

	}