<?php  
class Table_data extends CI_Model {
	function take_data(){
		$data = $this->db->query("SELECT * FROM details");
		return $data->result();
	}
}

?>