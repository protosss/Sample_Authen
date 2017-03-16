<?php 
class Authen_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
    
    function _check_login($data){
		$this->db->select('*')->from('vw_user_account')->where('user_password',md5($data['password']))->where('user_account',$data['username']);
		$query=$this->db->get();
		if($query->num_rows()>0){
			$rs=$query->row_array();
			//Set session
			$ses[$this->config->item('sys_project').'user_id']=$rs['user_id'];
			$ses[$this->config->item('sys_project').'user_name']=$rs['user_name'];
			$ses[$this->config->item('sys_project').'emp_id']=$rs['emp_id'];
			
			$this->session->set_userdata($ses);
			return $rs['user_id'];
		}else{
			return 0;
		}
	}

}
