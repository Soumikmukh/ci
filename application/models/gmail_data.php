<?php
	class gmail_data extends CI_Model{
			function fetch_data(){
				$result = $this->db->query("SELECT id, Name, Address FROM details Where bin_status=0");

				return $result->result(); 
			}
			function bin($ids){
				$bin_data = $this->db->query("UPDATE details SET bin_status = '1' WHERE id IN ($ids)");
				return $bin_data;
			}
			function bindata(){
				$bin_data = $this->db->query("SELECT id, Name, Address FROM details WHERE bin_status='1'");
				return $bin_data->result();
			}
	}

?>