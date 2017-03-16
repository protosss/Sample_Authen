<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Frontend extends CI_Controller {

   function __construct()
   {
		parent::__construct();
		$this->theme->is_logged_in(); //Check Login
		//-------------------------------------------------------------------------------------------------
		$this->output->set_header('Content-Type:text/html;Charset=TIS-620');
		$this->load->model("autocomplete/model_autocomplete");
		$this->load->model("province/Province_model");
		//$this->load->model("theme/Theme_model");		
   }

	public function index()
	{
		redirect('frontend/input');
	}
	
	public function leave_system()
	{
		redirect('http://'.$_SERVER['HTTP_HOST'].'/E_OFFICE/MOE_LEAVE/index.php/authen/system_login');	
	}
	
	public function meeting_room_system()
	{
		redirect('http://'.$_SERVER['HTTP_HOST'].'/E_OFFICE/MOE_MEETING_ROOM/index.php/authen/system_login');
	}
	
	public function authorize_system()
	{
		redirect('http://'.$_SERVER['HTTP_HOST'].'/MOE_AUTHORIZE/index.php/authen/system_login');	
	}

	public function car_system()
	{
		redirect('http://'.$_SERVER['HTTP_HOST'].'/E_OFFICE/MOE_CAR/index.php/authen/system_login');	
	}
	
	public function input()
	{
		$data['test'] =1;
		$this->theme->view('frontend/input',$data,true); //Theme Libraries
	}
	
	//****************************************************************** BEGIN Dropdown ****************************************************************
	public function dropdown()
	{
		$data['dropdown']  = $this->theme->dropdown_select("SELECT animal_id, animal_name FROM animals WHERE active_status ='1'  ",'', 'animal_id', 'animal_name');
		$data['dropdown2']  = $this->theme->dropdown_select("SELECT animal_id, animal_name FROM animals WHERE active_status ='1'  ",'38', 'animal_id', 'animal_name');
		///// Dropdown จังหวัด อำเภอ ตำบล 
		$data['province']  = $this->theme->dropdown_select("SELECT PROVINCE_ID,PROVINCE_NAME FROM thai_province",'', 'PROVINCE_ID', 'PROVINCE_NAME');
		$this->theme->view('frontend/dropdown',$data);
	}
	
	public function get_amphur(){
		$province_id = $this->uri->segment(3);
		$data['amphur']  = $this->theme->dropdown_select("SELECT AMPHUR_ID, AMPHUR_NAME FROM thai_amphur WHERE PROVINCE_ID = '".$province_id."' ",'', 'AMPHUR_ID', 'AMPHUR_NAME');
		echo iconv('TIS-620','UTF-8',$data['amphur']);
		}
	public function get_tumbon()
	{
		$amphur_id = $this->uri->segment(3);
		$data['tumbon']  = $this->theme->dropdown_select("SELECT TUMBON_ID, TUMBON_NAME FROM thai_tumbon WHERE AMPHUR_ID =  '".$amphur_id."' ",'', 'TUMBON_ID', 'TUMBON_NAME');

		echo iconv('TIS-620','UTF-8',$data['tumbon']);
	}
	
	//******************************************************************** END Dropdown ****************************************************************
	public function datetime()
	{
		$this->theme->view('frontend/datetime');
	}
	
	public function button()
	{
		$this->theme->view('frontend/button');
	}
	
	public function icon()
	{
		$this->theme->view('frontend/icon');
	}
	
	public function validation()
	{
		$this->theme->view('frontend/validation');
	}
	
	public function tooltip()
	{
		$this->theme->view('frontend/tooltip');
	}
	
	
	//********************************************************Autocomplete *************************************
	public function autocomplete()
	{
		$this->theme->view('frontend/autocomplete');
	}
	
	
	//Return 2 values 
	public function get_autocompletes()
	{
		$fieldKeyUp =  $this->input->get('fieldKeyUp');
		$fieldShow =  $this->input->get('fieldShow');
		$term = $this->input->get('term');
			if (isset($term)){
			  $q = iconv( 'UTF-8' , 'TIS-620' ,strtolower($term)); //strtolower($term);
			 $this->model_autocomplete->get_autocomplete($q,$fieldKeyUp,$fieldShow);
		}
	}
	//Return multiple values 
	public function get_autocompletes_obj()
	{
		$fKey =  $this->input->get('fKey');
		$fShow =  $this->input->get('fShow');
		$term = $this->input->get('term');
			if (isset($term)){
			  $q = iconv( 'UTF-8' , 'TIS-620' ,strtolower($term)); //strtolower($term);
			 $this->model_autocomplete->get_autocomplete_obj($q,$fKey,$fShow);
		}
	}
	
	
	//BEGIN Return 2 values ======================= จังหวัด อำเภอ ตำบล======================= 
	public function get_auto_province()
	{
		$fieldKeyUp =  $this->input->get('fieldKeyUp');
		$fieldShow =  $this->input->get('fieldShow');
		$term = $this->input->get('term');
			if (isset($term)){
			  $q = iconv( 'UTF-8' , 'TIS-620' ,strtolower($term)); //strtolower($term);
			 $this->model_autocomplete->get_autocomplete($q,$fieldKeyUp,$fieldShow);
		}
	}
	
	public function get_auto_amphur()
	{
		$province_id = $this->uri->segment(3);
		$fieldKeyUp =  $this->input->get('fieldKeyUp');
		$fieldShow =  $this->input->get('fieldShow');
		$term = $this->input->get('term');
			if (isset($term)){
			  $q = iconv( 'UTF-8' , 'TIS-620' ,strtolower($term)); //strtolower($term);
			 $this->model_autocomplete->get_amphur($q,$fieldKeyUp,$fieldShow,$province_id);
		}
	}
	
	public function get_auto_tumbon()
	{
		$amphur_id = $this->uri->segment(3);
		$fieldKeyUp =  $this->input->get('fieldKeyUp');
		$fieldShow =  $this->input->get('fieldShow');
		$term = $this->input->get('term');
			if (isset($term)){
			  $q = iconv( 'UTF-8' , 'TIS-620' ,strtolower($term)); //strtolower($term);
			 $this->model_autocomplete->get_tumbon($q,$fieldKeyUp,$fieldShow,$amphur_id);
		}
	}
	//END Return 2 values ======================= จังหวัด อำเภอ ตำบล======================= 
	
	
	//***************************************************** END Autocomplete *************************************
	public function datatable()
	{
		$data['province'] = $this->Province_model->select_province();
		//print_r($data); exit;
		
		$this->theme->view('frontend/datatable', $data);
	}
	public function page_split()
	{
		$this->load->model('page_split/Pagesplit_model');		
		//--------------------------------------------------------------------------------------------------------------------------------------
		$this->theme->base_url=site_url('frontend/page_split'); //URL หน้า Page
		$this->theme->total_rows=$this->Pagesplit_model->get_province('total_rows'); //จำนวนรายการทั้งหมด
		$this->theme->per_page=10; //จำนวนรายการต่อหน้า
		$this->theme->uri_segment=3; //Segment ของหมายเลขหน้า 
		$this->theme->page=$this->uri->segment(3); //หน้าปัจจุบัน
		
		$data['per_page']=$this->theme->per_page; 
		$data['page']=$this->theme->page ? $this->theme->page : 1; //ส่งขึ้นไปแสดงลำดับ
		$data['pagination']=$this->theme->splits(); //ส่งขึ้นไป Gen หมายเลขแบ่งหน้า 
		$data['start']=($data['page'] * $data['per_page'])-($data['per_page']); //เริ่มต้นแสดงข้อมูลจาก Record  xx 
		//-------------------------------------------------------------------------------------------------------------------------------------
		$data['result']=$this->Pagesplit_model->get_province('get_data', $data['per_page'], $data['start']);
		$this->theme->view('frontend/page_split', $data);
	}
	
	public function block_ui()
	{
		$this->theme->view('frontend/block_ui');
	}
	
	public function sweet_alert()
	{
		$this->theme->view('frontend/sweet_alert');
	}
	
	public function notification()
	{
		$this->theme->view('frontend/notification');
	}
	
	//***************************************************** BEGIN Tabs ******************************************
	public function tabs()
	{
		$this->theme->view('frontend/tabs');
	}
	//***************************************************** END Tabs ******************************************	
	
	//***************************************************** BEGIN Tabs ******************************************
	public function tooltips()
	{
		$this->theme->view('frontend/tooltips');
	}
	//***************************************************** END Tabs ******************************************	
	

	
	
	//***************************************************** BEGIN Popup ******************************************
	public function popup()
	{
		$this->theme->view('frontend/popup');
	}
	
	
	public function open_popup(){
		
			$data['proc'] = $this->uri->segment(3);
			

			
			if($data['proc']=='edit')
			{
				$data['id'] = $this->uri->segment(4);
				$this->load->model("animal/model_animal");
				$data['model'] = $this->model_animal->select_animal($data['id']);
			}
			$this->load->view('frontend/my_popup',$data);
	}
	//***************************************************** END Popup ******************************************
	
	public function mpdf()
	{
		$this->theme->view('frontend/mpdf');
	}
	
	public function phpexcel()
	{
		$this->theme->view('frontend/province_report');
	}
	
	
	//////////BEGIN ************** เพิ่ม ลบ แก้ไข (Head - Detail)******************************************************
	
	public function pr()
	{
		$this->theme->view('pr/table_list');
	}
	
	public function pr_add()
	{
		$data['proc'] = $this->uri->segment(3);
		$data['id'] = $this->uri->segment(4);
			if($data['proc']=='edit')
			{
				$this->load->model("pr/pr_model");
				$data['model'] = $this->pr_model->select_animal($data['id']);
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
	
	public function add_pr()
    {
		
                $config['upload_path']          	= './uploads/pictures';
                $config['allowed_types']        = 'gif|jpg|png';
				$config['encrypt_name'] 		= TRUE;
				$config['max_size']             	= 100;
				$config['max_width']            	= 1024;
				$config['max_height']           	= 768;
				
                $this->load->library('upload', $config);
                if ( ! $this->upload->do_upload('picture'))
                {		
						//หาก Upload file ไม่สำเร็จจะ return error ไปยังหน้าฟอร์ม ดังนั้นหน้าฟอร์มของเราก็ต้องเขียนรับ error แล้วนำไปแสดงผลที่หน้าฟอร์มด้วย
                        $error = array('error' => $this->upload->display_errors('Upload file error !! ', ''));
						echo $error['error'];
                }
                else
                {

						$upload_data = $this->upload->data();
						$data['animal_name'] 			= iconv( 'UTF-8' , 'TIS-620' ,$this->input->post('animal_name')); //$this->input->post('animal_name');
						$data['animal_type'] 				= $this->input->post('animal_type');
						$data['sex'] 							=  $this->input->post('sex');
						$data['feed1'] 						=  $this->input->post('feed1');
						$data['feed2'] 						=  $this->input->post('feed2');
						$data['feed3'] 						=  $this->input->post('feed3');
						$data['description'] 				=  iconv( 'UTF-8' , 'TIS-620' ,$this->input->post('description')); 
						$data['picture'] 						= $upload_data['file_name'];
						
						/*$data = array(
						'animal_name' => $this->input->post('animal_name'),
						'picture' => $upload_data['file_name']
						);	*/

				
						$this->model_animal->add($data);
						
						//หรือสามารถทำแบบไม่กำหนด input ก็ได้ แต่ input ที่อยุ่ในหน้า form จะต้องมีชื่อเหมือน fields ใน Database
						//$data=$this->input->post();
						//$this->model_animal->add($data);
                      
                }
      
	 }
	 
	 
	
	//////////END ************* เพิ่ม ลบ แก้ไข (Head - Detail)******************************************************
	
	
	
	
}//End frontend class





