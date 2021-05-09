<?php
class Sendmail extends CI_Controller {
	function __construct(){
		parent::__construct();
	}

	function index() {
		$this->load->view("email");
	}
	function mailsend() {
		$to = $this->input->post('email');
		$config = Array(
		'protocol' => 'smtp',
		'smtp_host' => 'ssl://smtp.googlemail.com',
		'smtp_port' => 465,
		'smtp_user' => 'soumikmukhopadhyay75@gmail.com', // change it to yours
		'smtp_pass' => '9735977146', // change it to yours
		'mailtype' => 'html',
		'charset' => 'iso-8859-1',
		'wordwrap' => TRUE
		);
		$code = rand(1111,9999);
		$message = 'your password is '.$code;
		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");
		$this->email->from('soumikmukhopadhyay75@gmail.com'); // change it to yours
		$this->email->to($to);// change it to yours
		$this->email->subject('Resume from JobsBuddy for your Job posting');
		$this->email->message($message);
		if($this->email->send())
		{
			echo $code.'<br>';
			echo 'Email sent.';
		}
		else
		{
			show_error($this->email->print_debugger());
		}
	}
}