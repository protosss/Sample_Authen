<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Report_excel extends CI_Controller {

   function __construct()
   {
		parent::__construct();
		$this->output->set_header('Content-Type:text/html;Charset=TIS-620');
		ini_set('memory_limit', '256M'); //แก้ Error Allowed memory size of  (memory limit error)
		$this->load->library("excel");
		$this->load->model("report_excel/model_report");
   }
   public function index(){
		$data['province'] = $this->model_report->provice_list();
		$this->theme->view('report_excel/province_report',$data);
	}
		
		
	public function get_excel() {
		// ตั้งชื่อ Sheet
		$this->excel->getActiveSheet()->setTitle('sheet-01');
        $this->excel->setActiveSheetIndex(0);
		
		$this->excel->getDefaultStyle()->getFont()->setName('AngsanaUPC'); 
		$this->excel->getDefaultStyle()->getFont()->setSize(15); 
		
		$this->excel->getProperties()->setTitle("Test Title"); 
		$this->excel->getProperties()->setCreator("innovisor2016"); 
       
	   // Gets all the data using MY_Model.php
        $data = $this->model_report->export_provice();
        $this->excel->stream('province_report.xls', $data);
    }
		
	
}//End frontend class





