<?php

class Prac extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->model('Example');
	}
	function index(){
		$demand_id = '66';
		$origin_country = '5';
		$destination_port = array(41);

		$final_dest_country = implode ( ',', $destination_port );
		// $final_port = str_replace(',', "','", $new_port);
		// echo $final_port; die;
		$data = $this->Example->data($demand_id,$origin_country,$destination_port);
		echo "<pre>";
		print_r($data);

		// else
		// {
		// $this->session-sess_destroy();
		// $this->load->view('prac',$avl);
		 }
		
}

?>