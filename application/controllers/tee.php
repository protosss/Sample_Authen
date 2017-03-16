<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class tee extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->theme->is_logged_in(); // check login
		$this->output->set_header('Content-Type:text/html;Charset=TIS-620');
		$this->load->model("item/model_item");
		
	}
	
	public function tee_crud(){
		//--------------------------------------------------------------------------------------------------------------------------------------
		$this->pagesplit->base_url=site_url('item/item_main'); //URL หน้า Page
		$this->pagesplit->total_rows=$this->model_item->get_item('total_rows'); //จำนวนรายการทั้งหมด
		$this->pagesplit->per_page=15; //จำนวนรายการต่อหน้า
		$this->pagesplit->uri_segment=3; //Segment ของหมายเลขหน้า 
		$this->pagesplit->page=$this->uri->segment(3); //หน้าปัจจุบัน
		
		$data['per_page']=$this->pagesplit->per_page; 
		$data['page']=$this->pagesplit->page ? $this->pagesplit->page : 1; //ส่งขึ้นไปแสดงลำดับ
		$data['pagination']=$this->pagesplit->splits(); //ส่งขึ้นไป Gen หมายเลขแบ่งหน้า 
		$data['start']=($data['page'] * $data['per_page'])-($data['per_page']); //เริ่มต้นแสดงข้อมูลจาก Record  xx 
		//-------------------------------------------------------------------------------------------------------------------------------------
		$data['result']=$this->model_item->get_item('get_data', $data['per_page'], $data['start']);
		$this->theme->view('item/item_view', $data);
	}
}

?>