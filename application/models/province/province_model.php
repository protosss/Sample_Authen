<?php 
class Province_model extends CI_Model {
	function __construct(){
		parent::__construct();
		
	}
	/////////////////////////////////----------------------------------------------------------------------------------------------------------------------------------------
	public function select_province()
	{
		$query = $this->db->query("SELECT * FROM thai_province");
		$rs = $query->result_array();
		if(count($rs) > 0)
		{
			return $rs;		
		}
		else
		{
			return "ERROR !!! No record";
		}
		
	}

	/////////////////////////////////------------------------------------------------------

	
	
}