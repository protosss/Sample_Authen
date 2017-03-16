<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Animal extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->output->set_header('Content-Type:text/html;Charset=TIS-620');
		$this->load->model("animal/model_animal");

				
				
		/*if($this->session->userdata('user_id')<=0){
			redirect(base_url()."authen/login","refresh");
		}*/
	}
	/////////////////////////////////----------------------------------------------------------------------------------------------------------------------------------------
	public function index()
	{
		$this->theme->view('animal/animal_view');
	}
	public function add_animal_load(){
		$this->theme->view('animal/add_animal_loadAjax');
	}
	
	public function add_animal(){
			$this->load->view('animal/add_animal');
		}
	////////////////////////////////////////////----------------------------------------------------------------------------------------------------
	public function add_data()
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
	////////////////////////////////////////////----------------------------------------------------------------------------------------------------
	public function update_animal(){
			$id = $this->uri->segment(3);
			$data = $this->model_animal->select_animal($id);
			$this->load->view('animal/update_animal',$data);
		
		}
	////////////////////////////////////////////----------------------------------------------------------------------------------------------------
	public function update_data()
    {
				
				$config['upload_path']          	= './uploads/pictures';
				$config['allowed_types']        = 'gif|jpg|png';
				$config['encrypt_name'] 		= TRUE;
				$config['max_size']             	= 100;
				$config['max_width']            	= 1024;
				$config['max_height']           	= 768;
                $this->load->library('upload', $config);
			
				if ( ! $this->upload->do_upload('picture') && !empty($_FILES['picture']['name']))
                {
                        $error = array('error' => $this->upload->display_errors());
						echo $error['error'];
                }
                else
                {

						$upload_data = $this->upload->data();
						$animal_id   		= $this->input->post('animal_id');
						$data['animal_name'] 	= iconv( 'UTF-8' , 'TIS-620' ,$this->input->post('animal_name')); //$this->input->post('animal_name');
						$data['animal_type'] 		= $this->input->post('animal_type');
						$data['sex'] 					=  $this->input->post('sex');
						$data['feed1'] 				=  $this->input->post('feed1');
						$data['feed2'] 				=  $this->input->post('feed2');
						$data['feed3'] 				=  $this->input->post('feed3');
						$data['description'] 		=  iconv( 'UTF-8' , 'TIS-620' ,$this->input->post('description')); 
						if($upload_data['file_name']!=""){
							$data['picture'] 				= $upload_data['file_name'];
						}
						
						$this->model_animal->update($data,$animal_id);
                      
                }
      
	 }
	 
	public function delete_animal()
	{
		$id = $this->uri->segment(3);
		$data_model = $this->model_animal->select_animal($id);
		if($data_model['animal_id'] != "" ){
			$this->model_animal->delete_animal_id($id);
		}
	}
		
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */