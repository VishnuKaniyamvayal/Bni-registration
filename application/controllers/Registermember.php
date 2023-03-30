<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Registermember extends CI_Controller {

	public function index()
	{    $_SESSION['msg'] = '';
		$data = array(
			'c_id' => $this->input->post('chapter'),
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
            // creating an array for storing structure error messages
            $structure_error_array = array();
            
            //  Get worksheet dimensions
            $sheet = $objPHPExcel->getSheet(0);
            $n=$sheet->getHighestRow(); 
            $errorflag = FALSE;
                

            $upload_format = array('region','chapter','name','gstn','address','company','email','phone');

            if($upload_format[0] != $sheet->getCell('A1')->getValue()){
                $errorflag = TRUE;
                array_push($structure_error_array,'(A1) name not matching with import format<br>') ;
            }
            if($upload_format[1] != $sheet->getCell('B1')->getValue()){
                $errorflag = TRUE;
                array_push($structure_error_array,'(B1) name not matching with import format<br>') ;
            }
            if($upload_format[2] != $sheet->getCell('C1')->getValue()){
                $errorflag = TRUE;
                array_push($structure_error_array,'(C1) name not matching with import format<br>') ;
            }
            if($upload_format[3] != $sheet->getCell('D1')->getValue()){
                $errorflag = TRUE;
                array_push($structure_error_array,'(D1) name not matching with import format<br>') ;
            }
			if($upload_format[4] != $sheet->getCell('E1')->getValue()){
                $errorflag = TRUE;
                array_push($structure_error_array,'(E1) name not matching with import format<br>') ;
            }
			if($upload_format[5] != $sheet->getCell('F1')->getValue()){
                $errorflag = TRUE;
                array_push($structure_error_array,'(F1) name not matching with import format<br>') ;
            }
			if($upload_format[6] != $sheet->getCell('G1')->getValue()){
                $errorflag = TRUE;
                array_push($structure_error_array,'(G1) name not matching with import format<br>') ;
            }
			if($upload_format[7] != $sheet->getCell('H1')->getValue()){
                $errorflag = TRUE;
                array_push($structure_error_array,'(H1) name not matching with import format<br>') ;
            }
            
            if($n <= 1){
                
                array_push($structure_error_array,'Sorry data not found<br>') ;
                
                die();
            }
            
            $rows=array();
            $cell_error = array();
            for($i=2;$i<=$n;$i++){
                //cleaning and validating the error in cell values
                //checking error in region
                $region = trim($sheet->getCell('A' . $i)->getValue());
                    $this->load->model('CleanExcel');
                    $this->load->model('CheckAndReturn');                
                    $region_cleaned = $this->CleanExcel->cleanCasing($region);
                    $region_checked = $this->CheckAndReturn->region($region_cleaned);
                    if((empty($region_checked)))
                    {
                       $errorflag = TRUE;
                       array_push($cell_error,('Invalid Region Check the value of cell A'.$i));   
                    }
                    if($region == '')
                    {
                       $errorflag = TRUE;
                       array_push($cell_error,('Field NUll Check the value of cell A'.$i));   
                    }
                // checking error in chapter
                $chapter = trim($sheet->getCell('B' . $i)->getValue());
                    $this->load->model('CleanExcel');
                    $this->load->model('CheckAndReturn');                
                    $chapter_cleaned = $this->CleanExcel->cleanCasing($chapter);
                    $chapter_checked = $this->CheckAndReturn->chapter($chapter,$region);
                    if($chapter_checked == 'CHAPTERNOTFOUND')
                    {
                       $errorflag = TRUE;
                       array_push($cell_error,('Chapter not found in B'.$i));   
                    }
                    elseif($chapter_checked == 'NOTMATCHINGERROR')
                    {
                       $errorflag = TRUE;
                       array_push($cell_error,('The given chapter is not available in '.$region.' error in cell B'.$i));   
                    }
                    elseif($chapter == '')
                    {
                       $errorflag = TRUE;
                       array_push($cell_error,('Field NUll Check the value of cell B'.$i));   
                    }
                    else
                    {
                        $row['c_id'] = $chapter_checked;
                    }
                //cleaning and inserting name
                $name = trim($sheet->getCell('C' . $i)->getValue());
                    if($name == '')
                    {
                        $errorflag = TRUE;
                        array_push($cell_error,('Field NUll Check the value of cell C'.$i));   
                    }
                    
                    else
                    {   $this->load->model('CleanExcel');
                        $name_cleaned = $this->CleanExcel->cleanCasing($name);
                        $row['name'] = $name_cleaned; 
                    }
                //checking and inserting gstn         
                $gstn = trim($sheet->getCell('D' . $i)->getValue());
                    $this->load->model('CheckAndReturn');
                    $gstnexists = $this->CheckAndReturn->gstn($gstn);
                    if(!(empty($gstnexists)))
                    {
                       $errorflag = TRUE;
                       array_push($cell_error,('Gstn alearady exists , error in cell D'.$i));
                    }
                    elseif($gstn == '')
                    {
                        $errorflag = TRUE;
                        array_push($cell_error,('Field NUll Check the value of cell D'.$i));   
                    }
                    else
                    {
                    $row['gstn'] = $gstn;
                    }
                //checking address
                $address = trim($sheet->getCell('E' . $i)->getValue());
                    if($address == '')
                        {
                            $errorflag = TRUE;
                            array_push($cell_error,('Field NUll Check the value of cell E'.$i));   
                        }
                    else
                    {
                        $row['address'] = $address;
                    }
                $company = trim($sheet->getCell('F' . $i)->getValue());
                    $this->load->model('CheckAndReturn');
                    $company_checked = $this->CheckAndReturn->company($company);
                    if($company == '')
                    {
                       $errorflag = TRUE;
                       array_push($cell_error,('Field NUll Check the value of cell F'.$i));   
                    }
                    elseif(!$company_checked)
                    {
                       $errorflag = TRUE;
                       array_push($cell_error,('Company name cannot contain Special characters Error in cell F'.$i));
                    }
                    else
                    {
                        $row['company'] =  $company;
                    }
                $email = trim($sheet->getCell('G' . $i)->getValue());
                    $this->load->model('CheckAndReturn');
                    $email_checked = $this->CheckAndReturn->email($email);
                    if($email == '')
                    {
                       $errorflag = TRUE;
                       array_push($cell_error,('Field NUll Check the value of cell G'.$i));   
                    }
                    elseif($email_checked == "INVALID")
                    {
                        $errorflag = TRUE;
                        array_push($cell_error,('Invalid Email id Error in cell G'.$i)); 
                    }
                    elseif(!empty($email_checked))
                    {
                        $errorflag = TRUE;
                        array_push($cell_error,('Email id already exists Error in cell G'.$i)); 
                    }
                    else
                    {
                        $row['email'] = $email;
                    }
                $phone = trim($sheet->getCell('H' . $i)->getValue());
                    $this->load->model('CheckAndReturn');
                    $phone_checked = $this->CheckAndReturn->phone($phone);
                    if($phone == '')
                    {
                       $errorflag = TRUE;
                       array_push($cell_error,('Field NUll Check the value of cell H'.$i));   
                    }
                    elseif($phone_checked == "INVALIDCHARACTER")
                    {
                        $errorflag = TRUE;
                        array_push($cell_error,(' Phone number can only contain numbers Error in cell H'.$i)); 
                    }
                    elseif($phone_checked == "INVALIDLENGTH")
                    {
                        $errorflag = TRUE;
                        array_push($cell_error,('Phone number should contain 10 numbers Error in cell H'.$i)); 
                    }
                    elseif(!($phone_checked == "EMPTY"))
                    {
                        $errorflag = TRUE;
                        array_push($cell_error,('Phone number already exists Error in cell H'.$i)); 
                    }
                    else
                    {
                        $row['phone'] = $phone;
                    }
				$rows[]=$row;
            }
                if($errorflag)
                {
                    $this->session->set_flashdata('msg', $cell_error);
                    redirect(base_url('index.php/Addmember/upload'));                    
                }
                
                else
                {
                    foreach($rows as $cols){
                        $this->load->model('MemberRegister');
                        $this->MemberRegister->memberReg($cols);
                    }
                    redirect(base_url('index.php/Uploadsuccess'));
                    
                }
    }       
	

	}