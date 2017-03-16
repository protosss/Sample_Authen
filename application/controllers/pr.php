<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pr extends CI_Controller {

   function __construct()
   {
		parent::__construct();
		$this->theme->is_logged_in(); //Check Login
		//-------------------------------------------------------------------------------------------------
		$this->output->set_header('Content-Type:text/html;Charset=TIS-620');
		$this->load->model("pr/pr_model");
   }

	public function index()
	{
		$data['list'] =  $this->pr_model->select_pr();
		$this->theme->view('pr/table_list', $data);
	}
	
	//////////BEGIN ************** เพิ่ม ลบ แก้ไข (Head - Detail)******************************************************
	
/*	public function pr()
	{
		$this->theme->view('pr/table_list');
	}*/
	
	public function pr_add()
	{
		$data['proc'] = $this->uri->segment(3);
		$data['id'] = $this->uri->segment(4);
			if($data['proc']=='edit')
			{
				$data['model'] = $this->pr_model->select_pr_id($data['id']);
			}
			$this->load->view('pr/pr_form',$data);
	}

	public function get_auto_items()
	{
		$fKey =  $this->input->get('fKey');
		$fShow =  $this->input->get('fShow');
		$term = $this->input->get('term');
			if (isset($term)){
			  $q = iconv( 'UTF-8' , 'TIS-620' ,strtolower($term)); //strtolower($term);
			 $this->model_autocomplete->get_item($q,$fKey,$fShow);
		}
	}
	
	public function save_pr()
    {
			//extract();  เพื่อ เอาชื่อ name เป็นตัวแปรเลย
			//ถ้าไม่ใช่ก็ได้ แต่ต้องรับค่า $this->input->post() ทีละตัว
			extract($this->input->post());
			 
			$data['pr_number'] = $pr_number;
			$data['pr_date'] = chg_date($pr_date);
			$data['description'] = iconv( 'UTF-8' , 'TIS-620' , $description);
			 
			$this->pr_model->add_head($data,$proc);

			 
			 
			 
			 $this->pr_model->delete_detail($pr_number);
			 foreach($item_code as $key=>$value) {
					unset($data);
					$data['pr_number'] 		=	$pr_number;
					$data['item_code'] 		=	$item_code[$key];
					$data['item_name'] 		=	iconv( 'UTF-8' , 'TIS-620' , $item_name[$key]);  
					$data['price_per_unit'] 	=	str_replace( ',', '', $price_per_unit[$key] );
					$data['unit'] 					=	str_replace( ',', '', $unit[$key] );
					$data['amount'] 			=	str_replace( ',', '', $amount[$key] );
					
					$this->pr_model->add_detail($data);


			}
			
	 }
	 
	 function delete_pr($id){
		 $this->pr_model->delete_head($id);
		 $this->pr_model->delete_detail($id);
	}
	 
	//////////END ************* เพิ่ม ลบ แก้ไข (Head - Detail)******************************************************
	
	
	
	
}//End frontend class





