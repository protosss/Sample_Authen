<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Authen extends CI_Controller {
 function __construct()
   {
		parent::__construct();
		//---------------------------------------------------------------------------------
		$this->theme->is_logged_in(); //Check Login
		
		$this->output->set_header('Content-Type:text/html;Charset=TIS-620');
		$this->load->model("authen/Authen_model"); //ประกาศเพื่อเรียกใช้ Model class
   }
   
   public function index(){
		redirect('authen/application');
   }
    
	public function logout(){
		$this->session->unset_userdata($this->config->item('sys_project').'user_id');
		$this->session->unset_userdata($this->config->item('sys_project').'user_name');
		$this->session->unset_userdata($this->config->item('sys_project').'emp_id');
		
		redirect(site_url('authen/login'),"refresh");
	}
	
	public function login(){
		if($this->session->userdata($this->config->item('sys_project').'user_id')){
			redirect('authen',"refresh");
		}else{
			$this->load->view('authen/login');
		}
	}
			
	public function check_login(){
		$data_input=$this->input->post();
		$data['user_id']=$this->Authen_model->_check_login($data_input);
		echo json_encode($data);
	}
	
	
	
	//////// Grid menu
	public function application(){
		$data['username']  = $this->session->userdata($this->config->item('sys_project').'user_name'); 
		$this->load->view('theme/header',$data);
		$this->load->view('theme/menu_left');
		$this->load->view('theme/footer');
	}
	
	public function dashboard(){
		$data['username']  = $this->session->userdata($this->config->item('sys_project').'user_name'); 
		$this->load->view('theme_dashboard/header',$data);
		$this->load->view('dashboard/index');
		$this->load->view('theme_dashboard/footer');
		
	}
	
	public function dashboard2(){
		$data['username']  = $this->session->userdata($this->config->item('sys_project').'user_name'); 
		//$this->load->view('theme_dashboard/header',$data);
		$this->load->view('dashboard/index_full');
		//$this->load->view('theme_dashboard/footer');
		
	}
	
	public function input(){
		$data['test'] =1;
		$this->theme->view('place/place_list',$data,true); //Theme Libraries
	}
	
	
	
}// END Classs

