<?php 
class model_autocomplete extends CI_Model {
	function __construct(){
		parent::__construct();
	}
	/////////////////////////////////----------------------------------------------------------------------------------------------------------------------------------------
	
	function get_province($q=""){
		$this->db->select('PROVINCE_CODE,PROVINCE_NAME');
		$this->db->like('PROVINCE_NAME', $q);
		$query = $this->db->get('thai_province');
		//echo "SELECT TOP 10 PROVINCE_CODE,PROVINCE_NAME FROM thai_province WHERE PROVINCE_NAME LIKE '%".$q."%' ";
		//$query = $this->db->query("SELECT TOP 10 PROVINCE_CODE,PROVINCE_NAME FROM thai_province WHERE PROVINCE_NAME LIKE '%".$q."%' ");
		$row_set=array();
		foreach ($query->result_array() as $row){

					$new_row['label']=htmlspecialchars(stripslashes(iconv('TIS-620','UTF-8',$row['PROVINCE_NAME'])));
					$new_row['value']=htmlspecialchars(stripslashes(iconv('TIS-620','UTF-8',$row['PROVINCE_CODE'])));
					$row_set[] = $new_row; // an array
					
		 }
		//  return $query;
		//print_r($row_set);
		echo json_encode($row_set); //format the array into json data
		
  } //END function get_brand

  /////////////////////////////////---------------------------------------------------------------------------------------------------------------------------------------
	
}