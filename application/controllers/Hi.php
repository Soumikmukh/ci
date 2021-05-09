<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
class Hi extends CI_Controller{

	function index(){
		$this->load->view('hi');
	}
	function insert(){
		echo "hii"; die;
		$data = $this->input->post();
		print_r($data); die();
	}
	function wordd(){
		$this->load->library('Word');
		$section = $this->word->createSection(array('orientation'=>'landscape'));
		$section->addText('Hello World!');
		$section->addTextBreak(1);
		$section->addText('I am inline styled.', array('name'=>'Verdana', 'color'=>'006699'));
		$section->addTextBreak(1);
		$filename='my_doc.docx';
		header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document'); //mime type
		header('Content-Disposition: attachment;filename="'.$filename.'"'); //tell browser what's the file name
		header('Cache-Control: max-age=0'); //no cache
 
		$objWriter = PHPWord_IOFactory::createWriter($this->Word, 'Word2007');
		$objWriter->save('php://output');
	}
}
?>