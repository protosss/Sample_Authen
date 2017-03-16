<?php 
class Theme_model extends CI_Model {
	function __construct(){
		parent::__construct();
		
	}

	/////////////////////////////////----------------------------------------------------------------------------------------------------------------------------------------
	function _get_menu()
	{
		$ctl =  $this->uri->segment(1).'/'.$this->uri->segment(2);
		$query = $this->db->query("SELECT * FROM USER_MENU WHERE STATUS_MENU = 'Y' AND MENU_LEVEL = '1' ORDER BY SORT_NUMBER ASC");
		$rs =  $query->result_array() ;
		$row_set=array();
		foreach ($rs as $menu)
		{		
				$act=($ctl ==$menu['MENU_URL'])?"active":"";
				$num = $this->db->query("SELECT * FROM USER_MENU WHERE STATUS_MENU = 'Y' AND MENU_PARENT = '".$menu['MENU_ID']."' ")->num_rows();
				if($num > 0){
					$sub_menu = $this->_gen_next_menu($menu['MENU_ID']);
					$row_set[] = '<li class="">
                                      <a class="links" href="#"><i class="'.$menu['MENU_ICON'].'"></i> <span>'.$menu['MENU_NAME'].'</span> <span class="fa arrow"></span></a>
                                      <ul class="nav nav-second-level collapse" aria-expanded="true" style="height: 0px;">
									 '.$sub_menu.'
                                      </ul>
                                      <!-- /.nav-second-level -->
                                  </li>';
				}
				else
				{
					$row_set[] =  '<li class="'.$act.'">
										  <a id="'.$menu['MENU_ID'].'" class="links" href="'.site_url($menu['MENU_URL']).'">
											<i class="'.$menu['MENU_ICON'].'"></i>
											<div class="link-content">
											  <span>'.$menu['MENU_NAME'].'</span>
											</div>
										  </a>
									  </li> ';
				}
		}
		
		return  $row_set;
		
	}
	
	function _gen_next_menu($menu_parent){
		$ctl =  $this->uri->segment(1).'/'.$this->uri->segment(2);
		$query = $this->db->query("SELECT * FROM USER_MENU WHERE STATUS_MENU = 'Y' AND MENU_PARENT = '".$menu_parent."'  ORDER BY SORT_NUMBER ASC");
		$rs =  $query->result_array() ;
		$row_set="";
		foreach ($rs as $menu)
		{
				$act=($ctl ==$menu['MENU_URL'])?"active":"";
				$num = $this->db->query("SELECT * FROM USER_MENU WHERE STATUS_MENU = 'Y' AND MENU_PARENT = '".$menu['MENU_ID']."' ")->num_rows();
				if($num > 0){
					$sub_menu = $this->_gen_next_menu($menu['MENU_ID']);
					$nav_level = (($menu['MENU_LEVEL']+1)==2)?"second":"third";
					$row_set.= '<li class="">
                                      <a class="links" href="#"><span>'.$menu['MENU_NAME'].'</span> <span class="fa arrow"></span></a>
                                      <ul class="nav nav-'.$nav_level.'-level collapse" style="height: 0px;">
									 		'.$sub_menu.'
                                      </ul>
                                  </li>';
				}
				else
				{
					$row_set.=  '<li class="'.$act.'">
										  <a id="'.$menu['MENU_ID'].'" class="links" href="'.site_url($menu['MENU_URL']).'">
											<!--<i class="'.$menu['MENU_ICON'].'"></i>-->
											<div class="link-content">
											  <span>'.$menu['MENU_NAME'].'</span>
											</div>
										  </a>
									  </li> ';
				}
				
		}
		return  $row_set;
	}
	/////////////////////////////////---------------------------------------------------------------------------------------------------------------------------------------
	
	
	
	public function dropdown_select($sql,$id_selected,$valueFiled,$nameField)
	{
		$dropdown = $this->db->query($sql)->result_array() ;
		return $dropdown;
		//$row_set=array();
		/*$row_set="";
		foreach ($dd as $dropdown)
		{
			$value = $dropdown[$valueFiled];
			$name  = $dropdown[$nameField] ;
			$selected =  ($id_selected==$value)?"selected='selected' ":"";
			$row_set.=  '<option value="'.$value.'"   '.$selected.' >'.$name.'</option>';
		}
		return  $row_set;*/
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
  
  
	
	
}