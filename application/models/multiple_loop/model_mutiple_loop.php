<?php 
class Model_mutiple_loop extends CI_Model {
	function __construct(){
		parent::__construct();
		
	}

	/////////////////////////////////----------------------------------------------------------------------------------------------------------------------------------------
	public function get_provice($id)
	{
		$this->db->select("*")->from("thai_province")->where("PROVINCE_ID",$id);
		//$this->db-query("SELECT * FOM thai_province WHERE PROVINCE_ID = '".$id."' ");
		$row = $this->db->get()->row_array();
		//row_array
		//row
		//result_array
		//result
		if($row['PROVINCE_ID'] != "")
		{
			return $row;		
		}
		else
		{
			echo  "ERROR !!! No ID"; exit;
		}
		
	}
	/////////////////////////////////---------------------------------------------------------------------------------------------------------------------------------------
	
	public function get_amphur($province_id)
	{
		$this->db->select("*")->from("thai_amphur")->where("PROVINCE_ID",$province_id);
		$row = $this->db->get()->result_array();
		//print_r($row);
		if($row != "")
		{
			return $row;		
		}
		else
		{
			return "ERROR !!! No ID";
		}
		
	}
	/////////////////////////////////---------------------------------------------------------------------------------------------------------------------------------------
	
	public function get_tumbon($amphur_id)
	{
		$this->db->select("*")->from("thai_tumbon")->where("AMPHUR_ID",$amphur_id);
		$row = $this->db->get()->result_array();
		if($row != "")
		{
			return $row;		
		}
		else
		{
			return "ERROR !!! No ID";
		}
		
	}
	/////////////////////////////////---------------------------------------------------------------------------------------------------------------------------------------
	
}