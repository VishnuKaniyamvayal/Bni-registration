<?php
error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');

class Exportmemberdata extends CI_Controller {

	public function index()
	{
		
		$this->load->library('excel');
		$this->load->model('GetData');
		$data = $this->GetData->getData();

    	$object = new PHPExcel();
    	$object->setActiveSheetIndex(0);

    	$table_columns = array('S_No','region','chapter','name','gstn','address','company','email','phone');

    	$column = 0;

    foreach($table_columns as $field) {
        $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
        $column++;
    }

	$this->load->model('GetMemberData');
	$data = $this->GetMemberData->getData();

    $excel_row = 2;
	$count = 0;
    foreach($data as $row) {
		$count +=1;
        $object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $count);
        $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row['region']);
        $object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row['chapter']);
        $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $row['name']);
        $object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, $row['gstn']);
        $object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, $row['address']);
        $object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row, $row['company']);
		$object->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row, $row['email']);
		$object->getActiveSheet()->setCellValueByColumnAndRow(8, $excel_row, $row['phone']);


		$excel_row++;
    }
	date_default_timezone_set("Asia/Jakarta");
    $this_date = date("Y-m-d");
    $file_name = "Member Details".$this_date.".xlsx";
	$object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel2007');
	ob_end_clean();
	header('Content-Type: application/vnd.ms-excel');
	header('Content-Disposition: attachment;filename='.$file_name);
	$object_writer->save('php://output');
		// $this->excel->setActiveSheetIndex(0);
		// $this->excel->getActiveSheet()->fromArray($data, NULL, 'A1');
		// header('Content-Type: application/vnd.ms-excel');
		// header('Content-Disposition: attachment;filename="file_name.xls"');
		// header('Cache-Control: max-age=0');
		// $this->excel->save('php://output');

		// $file_name = time().".xlsx";
		// $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel2007');
		// ob_end_clean();
		// header('Content-Type: application/vnd.ms-excel');
		// header('Content-Disposition: attachment;filename='.$file_name);
		// $object_writer->save('php://output');
		
	}
}