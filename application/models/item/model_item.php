<?php
	class Model_item extends CI_Model {
		function _construct(){
			parent:: _construct();
		}
		
		function get_item($type='', $limit='', $start=''){
		
			 $query = $this->db->query("SELECT item_id
																,item_code
																,item_name
																,price_per_unit
													FROM items
													ORDER BY item_code ASC
													");
			
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
			
			
		
			/*$this->db->select(' item_id
										,item_code
										,item_name
										,price_per_unit
										');
			$this->db->from('items');
			 //$this->db->query("SELECT * FROM items");
			
			if($type=='total_rows'){ //ดึงจำนวนแถวทั้งหมด 
				$query = $this->db->get();
				return $query->num_rows();
			}else{ //get_data //ดึงข้อมูลเฉพาะหน้า ตามจำนวนรายการต่อหน้า 
				$this->db->limit($limit, $start);
				$this ->db->order_by("ITEM_CODE, ITEM_NAME ", "ASC");
				$query = $this->db->get();
				//echo $this->db->last_query(); //Print Query 
				if($query->num_rows() >0){
					return $query->result();
				}
				else{
					return false;
				}
			}*/
			
		}//get_item
		
		/////////////////////////////////----------------------------------------------------------------------------------------------------------------------------------------
		public function add($data)
		{
			//แบบที่ 1
			//$this->db->select("*")->from("items")->where("item_code",$data['item_code']);
			//$row = $this->db->get()->row_array();
			//$query = $this->db->get();
			//แบบที่ 2
			$query = $this->db->query('SELECT * FROM items WHERE item_code = "'.$data['item_code'].'" ');
			$row = $query->row_array();
			$query->num_rows();
			//print ($query->num_rows());
			if($query->num_rows() >0)
			{
				echo "ERROR !!! Item Code In Database";
				
			}else{
				$this->db->insert('items', $data);
				return $this->db->insert_id();
			}
		}//add
		
		
		public function select_item($id)
		{
			$query = $this->db->query('SELECT * FROM items WHERE item_id = "'.$id.'" ');
			$row = $query->row_array();
			
			if($row['item_id'] != "")
			{
				
				return $row;		
			}
			else
			{
				return "ERROR !!! No ID";
			}
			
			/*$this->db->select("*")->from("items")->where("item_id",$id);
			$row = $this->db->get()->row_array();
			//print_r($row);
			if($row['item_id'] != "")
			{
				return $row;		
			}
			else
			{
				return "ERROR !!! No ID";
			}
			*/
			
		}
		
		public function update($data,$id)
		{
			//$this->db->select("*")->from("items")->where("item_id",$id);
			//$row = $this->db->get()->row_array();
			
			$query = $this->db->query('SELECT * FROM items WHERE item_id = "'.$id.'" ');
			$row = $query->row_array();
			
			if($row['item_code']!="" )
			{
				$this->db->where('item_id', $id);
				$this->db->update('items', $data);
			}else{
				echo "ERROR !!! No ID";
			}
		}//update
		
		function delete_item($id){
			//$this->db->select("*")->from("items")->where("item_id",$id);
			//$row = $this->db->get()->row_array();
			$query = $this->db->query('SELECT * FROM items WHERE item_id = "'.$id.'" ');
			$row = $query->row_array();
			if($row['item_id']!="")
			{
				//ลบออกจากตาราง
				$this->db->where('item_id', $id);
				$this->db->delete('items');
				
				//Update สถานะ เป็น ไม่ใช้งาน
				//$data['active_status'] = '0';
				//$this->db->where('animal_id', $row['animal_id']);
				//$this->db->update('animals', $data);
			}
			else
			{
				echo "ERROR !!! No ID";
			}
		}//delete
		
		
		
	}// class model_item
?>