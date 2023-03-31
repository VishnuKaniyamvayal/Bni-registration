<?php
error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');

class Exportdata extends CI_Controller {

	public function index()
	{
		
		$this->load->library('excel');
		$this->load->model('GetData');
		$data = $this->GetData->getData();

    	$object = new PHPExcel();
    	$object->setActiveSheetIndex(0);

    	$table_columns = array('S_Nd','date_of_register','gstn','address','member','venue','chapter','t_program','company','total','payment');

    	$column = 0;

    foreach($table_columns as $field) {
        $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
        $column++;
    }

	$this->load->model('GetData');
	$data = $this->GetData->getData();

    $excel_row = 2;

    foreach($data as $row) {
        $object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $row['d_id']);
        $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row['date_of_register']);
        $object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row['gstn']);
        $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $row['address']);
        $object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, $row['member']);
        $object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, $row['venue']);
        $object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row, $row['chapter']);
		$object->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row, $row['t_program']);
        $object->getActiveSheet()->setCellValueByColumnAndRow(8, $excel_row, $row['company']);
		$object->getActiveSheet()->setCellValueByColumnAndRow(9, $excel_row, $row['total']);
		$object->getActiveSheet()->setCellValueByColumnAndRow(10, $excel_row, $row['payment']);


		$excel_row++;
    }
	date_default_timezone_set("Asia/Jakarta");
    $this_date = date("Y-m-d");
    $file_name = "Event details".$this_date.".xlsx";
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