<?php 
class Pagesplit_model extends CI_Model {
	
	function __construct(){
		parent::__construct();
		
	}

	////////////////////////////////////////////////  /////////////////////////////////////////////////////////////////
	function get_province($type='', $limit='', $start=''){
		
		$this->db->select(' PROVINCE_ID ,PROVINCE_NAME');
		$this->db->from('thai_province');
		
		//ดึงจำนวนแถวทั้งหมด 
		if($type=='total_rows')
		{ 
			$query = $this->db->get();
			return $query->num_rows();
		}
		//get_data //ดึงข้อมูลเฉพาะหน้า ตามจำนวนรายการต่อหน้า 
		else
		{ 
			$this->db->limit($limit, $start);
			$this ->db->order_by("PROVINCE_ID, PROVINCE_NAME ", "ASC");
			$query = $this->db->get();
			//echo $this->db->last_query(); //Print Query 
					if($query->num_rows() >0){
						return $query->result();
					}
					else
					{
						return false;
					}
		}
	}
}