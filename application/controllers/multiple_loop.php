<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Multiple_loop extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->output->set_header('Content-Type:text/html;Charset=TIS-620'); //การแสดงผลภาษาไทย
		$this->load->model("multiple_loop/model_mutiple_loop");
		/*if($this->session->userdata('user_id')<=0){
			redirect(base_url()."authen/login","refresh");
		}*/
	}
	/////////////////////////////////----------------------------------------------------------------------------------------------------------------------------------------
	public function index()
	{
		$provice_id = 21;
		$data = array();  //
		$data['provice'] =  $this->model_mutiple_loop->get_provice($provice_id); //หาจังหวัด
		$data['amphur'] =  $this->model_mutiple_loop->get_amphur($data['provice']['PROVINCE_ID']); //หาอำเภอ
		$row_set=array();
		foreach ($data['amphur'] as $amphur) //หาตำบล
		{
			$row_set[$amphur['AMPHUR_ID']] =   $this->model_mutiple_loop->get_tumbon($amphur['AMPHUR_ID']);
		}
		$data['tumbon']  = $row_set;
		
		
		$this->theme->view('multiple_loop/multiple_loop',$data);
	}

		
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */