<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Item extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->theme->is_logged_in();//check login
		$this->output->set_header('Content-Type:text/html;Charset=TIS-620');
		$this->load->model("item/model_item");
		
		/*if($this->session->userdata('user_id')<=0){
			redirect(base_url()."authen/login","refresh");
		}*/
	}
	
	/*public function index()
	{
		$this->theme->view('item/item_view');
	}*/
	
	//list item
	public function item_main()
	{
		//--------------------------------------------------------------------------------------------------------------------------------------
		/*$this->pagesplit->base_url=site_url('item/item_main'); //URL หน้า Page
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
		
		$this->theme->view('item/item_view', $data);*/
		$data['list'] =  $this->model_item->get_item();
		$this->theme->view('item/item_view', $data);
	}
	/// add edit 
	public function open_popup(){
		
			$data['proc'] = $this->uri->segment(3);
			
			if($data['proc']=='edit')
			{
				$data['id'] = $this->uri->segment(4);
				//$this->load->model("item/model_item");
				$data['model'] = $this->model_item->select_item($data['id']);
				//print_r(iconv( 'UTF-8' , 'TIS-620' ,$data['model']['item_name'])); 			//= iconv( 'UTF-8' , 'TIS-620' ,$data['item_name']);
				//print_r($data);
			}
			
			$this->load->view('item/item_from_update_view',$data);
	}
	
	//add item
	/*public function add_item(){
			$this->load->view('item/item_from_view');
	}*/
		
	/*public function add_data()
    {
			
			$data['item_code'] 			= $this->input->post('item_code');
			$data['item_name'] 			= iconv( 'UTF-8' , 'TIS-620' ,$this->input->post('item_name'));
			$data['price_per_unit'] 		= str_replace(",",'',$this->input->post('price_per_unit'));
	
			$this->model_item->add($data);
      
	 }*/
	 
	 //update item
	/*public function update_item()
	{
			$id = $this->uri->segment(3);
			$data = $this->model_item->select_item($id);
			$this->load->view('item/item_from_update_view',$data);
	}*/
	
	public function update_data()
    {
						
						$data['item_name'] 			= iconv( 'UTF-8' , 'TIS-620' ,$this->input->post('item_name'));
						$data['price_per_unit'] 		= str_replace(",",'',$this->input->post('price_per_unit'));
				
						if($this->input->post('proc') == "add"){
							$data['item_code'] 		=  $this->input->post('item_code');
							$this->model_item->add($data); //add
						}else{
							$item_id   					= $this->input->post('item_id');
							$this->model_item->update($data,$item_id); //update
						}
						
      					
	 }
	 
	 //delete_item
	 public function delete_item()
	{
		$id = $this->uri->segment(3);
		$data_model = $this->model_item->select_item($id);
		if($data_model['item_id'] != "" ){
			$this->model_item->delete_item($id);
		}
	}
}