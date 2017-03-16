<?php 
class model_autocomplete extends CI_Model {
	function __construct(){
		parent::__construct();
	}
  /////////////////////////////////---------------------------------------------------------------------------------------------------------------------------------------
	function get_autocomplete($q="",$fieldKeyUp="",$fieldShow=""){
		
		$wh = "";
		if($q){ $wh = "AND ".$fieldKeyUp." LIKE '%".$q."%'";}
		$sql = "SELECT TOP 10 ".$fieldShow.", ".$fieldKeyUp." FROM thai_province WHERE 1=1 ".$wh;
		//echo $sql;
		$query = $this->db->query($sql);
		$row_set=array();
		foreach ($query->result_array() as $row){
					$new_row['label']=htmlspecialchars(stripslashes(iconv('TIS-620','UTF-8',$row[$fieldKeyUp])));
					$new_row['value']=htmlspecialchars(stripslashes(iconv('TIS-620','UTF-8',$row[$fieldShow])));
					$row_set[] = $new_row; // an array
		 }
		echo json_encode($row_set); //format the array into json data
		
  } //END function  get_autocomplete
  
    /////////////////////////////////---------------------------------------------------------------------------------------------------------------------------------------
	function get_autocomplete_obj($q="",$fKey="",$fShow=""){
		$wh = "";
		if($q){ $wh = "AND ".$fKey." LIKE '%".$q."%'";}
		$all_f_name = "";
		if(count($fShow)>0){
			foreach($fShow as $f_name){
				$all_f_name .= ",".$f_name;
			}
		}

		$sql = "SELECT TOP 10  ".$fKey.$all_f_name." FROM thai_province WHERE 1=1 ".$wh;

		$query = $this->db->query($sql);
		$rows = $query->num_rows();
		$row_set=array();
		$j=0;
		$json="[" ;
			foreach ($query->result_array() as $row){
						$json_all_show="";
						if(count($fShow)>0){
							$json_all_show .= ',"fShow":[';
							foreach($fShow as $f_index => $f_name){
								$json_all_show .= "\"".trim(htmlspecialchars(stripslashes(iconv('TIS-620','UTF-8',$row[$f_name]))))."\",";
							}
							$json_all_show = substr($json_all_show,0,-1).']';
						} 
						$json .= '{
										"value":"'.htmlspecialchars(stripslashes(iconv('TIS-620','UTF-8',$row[$fKey]))).'",
										"fKey":"'.htmlspecialchars(stripslashes(iconv('TIS-620','UTF-8',$row[$fKey]))).'"
										'.$json_all_show.'
									  }';
						$j++;
						if($j<$rows) $json .= ","; 
			 }
		$json.="]" ;
		print $json;
  } //END function  get_autocomplete_obj
  
  
  /////////////////////////////////---------------------------------------------------------------------------------------------------------------------------------------
	function get_amphur($q="",$fieldKeyUp="",$fieldShow="", $province_id=""){
		
		$wh = "";
		/*if($province_id !=""){
			$wh .= " AND province_id = '".$province_id."'";
		}*/
		if($q){ $wh = "AND ".$fieldKeyUp." LIKE '%".$q."%'";}
		$sql = "SELECT TOP 10 ".$fieldShow.", ".$fieldKeyUp." FROM thai_amphur WHERE province_id= '".$province_id."' ".$wh;
		//echo $sql;
		$query = $this->db->query($sql);
		$row_set=array();
		foreach ($query->result_array() as $row){
					$new_row['label']=htmlspecialchars(stripslashes(iconv('TIS-620','UTF-8',$row[$fieldKeyUp])));
					$new_row['value']=htmlspecialchars(stripslashes(iconv('TIS-620','UTF-8',$row[$fieldShow])));
					$row_set[] = $new_row; // an array
		 }
		echo json_encode($row_set); //format the array into json data
		
  } //END function  get_autocomplete
  
  
   /////////////////////////////////---------------------------------------------------------------------------------------------------------------------------------------
	function get_tumbon($q="",$fieldKeyUp="",$fieldShow="", $amphur_id=""){
		
		$wh = "";
		/*if($amphur_id !=""){
			$wh .= " AND amphur_id = '".$amphur_id."'";
		}*/
		if($q){ $wh = "AND ".$fieldKeyUp." LIKE '%".$q."%'";}
		$sql = "SELECT TOP 10 ".$fieldShow.", ".$fieldKeyUp." FROM thai_tumbon WHERE amphur_id= '".$amphur_id."' ".$wh;
		//echo $sql;
		$query = $this->db->query($sql);
		$row_set=array();
		foreach ($query->result_array() as $row){
					$new_row['label']=htmlspecialchars(stripslashes(iconv('TIS-620','UTF-8',$row[$fieldKeyUp])));
					$new_row['value']=htmlspecialchars(stripslashes(iconv('TIS-620','UTF-8',$row[$fieldShow])));
					$row_set[] = $new_row; // an array
		 }
		echo json_encode($row_set); //format the array into json data
		
  } //END function  get_autocomplete
  
  
    /////////////////////////////////---------------------------------------------------------------------------------------------------------------------------------------

  
  function get_item($q="",$fKey="",$fShow=""){
		$wh = "";
		if($q){ $wh = "AND ".$fKey." LIKE '%".$q."%'";}
		$all_f_name = "";
		if(count($fShow)>0){
			foreach($fShow as $f_name){
				$all_f_name .= ",".$f_name;
			}
		}

		$sql = "SELECT TOP 10  ".$fKey.$all_f_name." FROM items WHERE 1=1 ".$wh;

		$query = $this->db->query($sql);
		$rows = $query->num_rows();
		$row_set=array();
		$j=0;
		$json="[" ;
			foreach ($query->result_array() as $row){
						$json_all_show="";
						if(count($fShow)>0){
							$json_all_show .= ',"fShow":[';
							foreach($fShow as $f_index => $f_name){
								$json_all_show .= "\"".trim(htmlspecialchars(stripslashes(iconv('TIS-620','UTF-8',$row[$f_name]))))."\",";
							}
							$json_all_show = substr($json_all_show,0,-1).']';
						} 
						$json .= '{
										"value":"'.htmlspecialchars(stripslashes(iconv('TIS-620','UTF-8',$row[$fKey]))).'",
										"fKey":"'.htmlspecialchars(stripslashes(iconv('TIS-620','UTF-8',$row[$fKey]))).'"
										'.$json_all_show.'
									  }';
						$j++;
						if($j<$rows) $json .= ","; 
			 }
		$json.="]" ;
		print $json;
  } //END function  get_autocomplete_obj
  
  
}//END Model class