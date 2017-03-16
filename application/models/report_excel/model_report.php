<?php 
class Model_report extends CI_Model {
	function __construct(){
		parent::__construct();
		
	}

	function provice_list()
	{
	$this->db->select("*")->from("thai_province");
	$row = $this->db->get()->result_array();
	if($row)
	{
		return $row;
	}
	
	}
	//////////////////////////////////////////////// REPORT /////////////////////////////////////////////////////////////////
	function export_provice(){
		

		$this->db->select("PROVINCE_ID,
									 PROVINCE_CODE,
									 PROVINCE_NAME")->from("thai_province");
		$row = $this->db->get()->result_array();
	
		return $row;		
		}
	
}