<?php

	class table extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('Example');
	}

	function index(){
		$data = $this->Example->data();
		$val['data'] = $data;
		$this->load->view('table' , $val);
	}
	}

?>