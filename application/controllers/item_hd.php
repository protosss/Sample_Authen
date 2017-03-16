<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Item_hd extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->theme->is_logged_in();//check login
		$this->output->set_header('Content-Type:text/html;Charset=TIS-620');
		$this->load->model("item_hd/model_item_hd");
	}
	// main
	function item_hd_main(){
		$data['list'] =  $this->model_item_hd->select_item_main();
		$this->theme->view('item_hd/view_item_hd', $data);
	}
	
	
	/// add edit 
	public function open_popup(){
		
			$data['proc'] = $this->uri->segment(3);
			
			if($data['proc']=='edit')
			{
				$data['id'] = $this->uri->segment(4);
				$data['model'] = $this->model_item_hd->select_item_id($data['id']);
			}
			$this->load->view('item_hd/view_item_hd_from',$data);
	}
	
	public function save_item()
    {
			//extract();  เพื่อ เอาชื่อ name เป็นตัวแปรเลย
			//ถ้าไม่ใช่ก็ได้ แต่ต้องรับค่า $this->input->post() ทีละตัว
			extract($this->input->post());
			 
			$data['item_number'] = $item_number;
			$data['item_date'] = chg_date($item_date);
			$data['item_remark'] = iconv( 'UTF-8' , 'TIS-620' , $item_remark);
			//$data['item_total'] 			=	str_replace( ',', '', $item_total );
			$this->model_item_hd->add_head($data,$proc);
 
			 
			 $this->model_item_hd->delete_detail($item_number);
			 foreach($item_code as $key=>$value) {
					unset($data);
					$data['item_number'] 		=	$item_number;
					$data['item_code'] 		=	$item_code[$key];
					//$data['item_name'] 		=	iconv( 'UTF-8' , 'TIS-620' , $item_name[$key]);  
					$data['item_price'] 	=	str_replace( ',', '', $item_price[$key] );
					$data['item_qty'] 					=	str_replace( ',', '', $item_qty[$key] );
					$data['item_amount'] 			=	str_replace( ',', '', $item_amount[$key] );
					
					$this->model_item_hd->add_detail($data);


			}
			
	 }
	 // ลบข้อมูล
	 function delete_item($id){
		 $this->model_item_hd->delete_head($id);
		 $this->model_item_hd->delete_detail($id);
	}
	
}