<?php
	class Model_item_hd extends CI_Model {
		function _construct(){
			parent:: _construct();
		}
		//list main 
		public function select_item_main(){
			 $query = $this->db->query("SELECT item_head.item_id,
																	item_head.item_number,
																	CONVERT(VARCHAR(10),item_head.item_date,120) AS item_date,
																	CAST(item_remark AS NVARCHAR(255)) item_remark,
																	(SELECT SUM(item_detail.item_amount) FROM item_detail WHERE item_detail.item_number = item_head.item_number) AS sum_amount
													FROM item_head
													INNER JOIN item_detail ON item_head.item_number = item_detail.item_number
													WHERE 1=1
													GROUP BY item_head.item_id,item_head.item_number,item_date,CAST(item_remark AS NVARCHAR(255))");
			
			$rs = $query->result_array();
			//print_r($rs);
			if(count($rs) > 0)
			{
				return $rs;		
			}
			else
			{
				return "ERROR !!! No ID";
			}
			
			
		}//get_item
		
		function select_item_id($id){
			$query = $this->db->query("SELECT *  ,CONVERT(VARCHAR(10),item_head.item_date,120) AS item_date
														FROM item_head 
														WHERE item_number = '".$id."' ");
			
			$data['head'] = $query->row_array();
			//**********************************************************************************************************************
			$query2 = $this->db->query("SELECT * FROM item_detail 
														INNER JOIN items ON item_detail.item_code = items.item_code
														WHERE item_number = '".$data['head']['item_number']."' ");
			
			$data['detail'] = $query2->result_array();
			return $data; 
			
		}
		
		/////////////////////////////////----------------------------------------------------------------------------------------------------------------------------------------
	public function add_head($data,$proc)
	{
		
		if($proc=='add')
		{
			$this->db->insert('item_head', $data);
			return $this->db->insert_id();
		}
		//////////////////////////////////////////////////////////////////////////////////////////////////////////////
		if($proc=='edit')
		{
			//$this->db->select("*")->from("item_head")->where("item_number",$data['item_number']);
			//$row = $this->db->get()->row_array();
			$query = $this->db->query('SELECT * FROM item_head WHERE item_number = "'.$data['item_number'].'" ');
			$row = $query->row_array();
			if($row['item_number']!="")
			{
				$this->db->where('item_number', $data['item_number']);
				$this->db->update('item_head', $data);
			}
			else
			{
				echo "ERROR !!! No ID";
			}

		}
		
	}
	
	public function add_detail($data)
	{
			$this->db->insert('item_detail', $data);
			return $this->db->insert_id();
	}
		
		/////////////////////////////////------------------------------------------------------
		function delete_head($item_number){
	
			$this->db->where('item_number', $item_number);
			$this->db->delete('item_head');
		}
		
		function delete_detail($item_number){
	
			$this->db->where('item_number', $item_number);
			$this->db->delete('item_detail');
		}
		
		
		
	}//class Model_item_hd extends CI_Model
?>