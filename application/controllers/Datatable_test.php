<?php
class Datatable_test extends CI_Controller {
	function __construct() {
		parent::__construct();
	}
	function index() {
		$this->load->view("test_table");
	}
	function test() {
		$this->load->model("Table_data");
		$all_data = array();
		$result = $this->Table_data->take_data();
		echo json_encode($result);
		// foreach ($result as $val) {
		// $all_data[] = $val;
		// }
		// echo json_encode($all_data);
		
	}
}
?>