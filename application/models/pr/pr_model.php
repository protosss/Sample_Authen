<?php 
class Pr_model extends CI_Model {
	function __construct(){
		parent::__construct();
		
	}
	/////////////////////////////////----------------------------------------------------------------------------------------------------------------------------------------
	public function add_head($data,$proc)
	{
		
		if($proc=='add')
		{
			$this->db->insert('pr_head', $data);
			return $this->db->insert_id();
		}
		//////////////////////////////////////////////////////////////////////////////////////////////////////////////
		if($proc=='edit')
		{
			$this->db->select("*")->from("pr_head")->where("pr_number",$data['pr_number']);
			$row = $this->db->get()->row_array();
			if($row['pr_number']!="")
			{
				$this->db->where('pr_number', $data['pr_number']);
				$this->db->update('pr_head', $data);
			}
			else
			{
				echo "ERROR !!! No ID";
			}

		}
		
	}
	
	public function add_detail($data)
	{
			$this->db->insert('pr_detail', $data);
			return $this->db->insert_id();
	}

	/////////////////////////////////----------------------------------------------------------------------------------------------------------------------------------------
	public function select_pr()
	{
		$query = $this->db->query("SELECT * , (SELECT SUM(pr_detail.amount) FROM pr_detail WHERE pr_detail.pr_number = pr_head.pr_number) AS sum_amount FROM pr_head");
		$rs = $query->result_array();
		if(count($rs) > 0)
		{
			return $rs;		
		}
		else
		{
			return "ERROR !!! No ID";
		}
		
	}
	
	function  select_pr_id($id){
		$query = $this->db->query("SELECT * , (SELECT SUM(pr_detail.amount) FROM pr_detail WHERE pr_detail.pr_number = pr_head.pr_number) AS sum_amount 
													FROM pr_head 
													WHERE pr_head_id = '".$id."' ");
		
		$data['head'] = $query->row_array();
		
		//*********************************************************************************************************************************************
		$query2 = $this->db->query("SELECT * FROM pr_detail 
													WHERE pr_number = '".$data['head']['pr_number']."' ");
		
		$data['detail'] = $query2->result_array();
		return $data; 
		
	}

	/////////////////////////////////------------------------------------------------------
	function delete_head($pr_number){

		$this->db->where('pr_number', $pr_number);
		$this->db->delete('pr_head');
	}
	
	function delete_detail($pr_number){

		$this->db->where('pr_number', $pr_number);
		$this->db->delete('pr_detail');
	}
	
	
}