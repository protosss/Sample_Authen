<?php 
class Model_animal extends CI_Model {
	function __construct(){
		parent::__construct();
		
	}
	/////////////////////////////////----------------------------------------------------------------------------------------------------------------------------------------
	public function add($data)
	{
		//print_r($data);
		$this->db->insert('animals', $data);
		return $this->db->insert_id();
	}
	/////////////////////////////////----------------------------------------------------------------------------------------------------------------------------------------
	public function select_animal($id)
	{
		$this->db->select("*")->from("animals")->where("animal_id",$id)->where("active_status",'1');
		$row = $this->db->get()->row_array();
		if($row['animal_id'] != "")
		{
			return $row;		
		}
		else
		{
			return "ERROR !!! No ID";
		}
		
	}
	/////////////////////////////////------------------------------------------------------
	
	public function update($data,$id)
	{
		$this->db->select("*")->from("animals")->where("animal_id",$id)->where("active_status",'1');
		$row = $this->db->get()->row_array();
			if($row['animal_id']!="")
			{
				$this->db->where('animal_id', $id);
				$this->db->update('animals', $data);
			}else{
				echo "ERROR !!! No ID";
			}
	}
	/////////////////////////////////------------------------------------------------------
	function delete_animal_id($id){
		$this->db->select("*")->from("animals")->where("animal_id",$id)->where("active_status",'1');
		$row = $this->db->get()->row_array();
		if($row['animal_id']!="")
		{
			//ลบออกจากตาราง
			/*
			$this->db->where('animal_id', $id);
			$this->db->delete('animals');
			*/
			
			//Update สถานะ เป็น ไม่ใช้งาน
			$data['active_status'] = '0';
			$this->db->where('animal_id', $row['animal_id']);
		   	$this->db->update('animals', $data);
		}
		else
		{
			echo "ERROR !!! No ID";
		}
	}
	
	
}