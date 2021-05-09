<?php 
class Gmail extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('gmail_data');
	}
	function index(){
		$this->load->view('gmail');
	}

	function gmail(){
		$data['result'] = $this->gmail_data->fetch_data();
		$output = $this->load->view('email_table',$data);
	}

	function move(){
		$emails = $_POST['allemail'];
		$emails_separate = implode(',', $emails);
		$bin = $this->gmail_data->bin($emails_separate);
		if($bin==false){
			echo "Not deleted";
		}
	}
	function bin_data(){
		$bindata['result'] = $this->gmail_data->bindata();
		$output = $this->load->view('email_table',$bindata);
	}
}
?>