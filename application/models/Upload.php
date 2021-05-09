<?php
class Upload extends CI_Model{
	function image_upload($data){
	$store_image = $this->db->query("INSERT INTO details(Name) VALUES('$data')") or die("query error");
	$fetch_image = $this->db->query("SELECT Name FROM details ORDER BY id DESC limit 5");
	return $fetch_image->result_array();
	}
}

?>