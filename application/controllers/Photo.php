<?php
class Photo extends CI_Controller{
	function __construct(){
		parent::__construct(); 

	}
	function index(){
		$this->load->view("picture");
	}
	function upload(){
		// echo "string";die;
		$config['upload_path']  = './upload/';
        $config['allowed_types']  = 'gif|jpg|png';
		$this->load->library("upload", $config);
		if($this->upload->do_upload("pic")){
			$data = $this->upload->data("file_name");
			// echo $data; die;
			$this->load->model('Upload');
			$result = $this->Upload->image_upload($data);
			if(!empty($result)){
				// echo "hiii"; die;
				// foreach ($result as $val) {
				// echo $val->name;
				// }
				$all_pic = json_encode($result);
				echo $all_pic;
			}else{
				echo "Not Uploaded";
			}
		}
		// }else{
		// $error['error'] = $this->upload->display_errors();

		// $this->load->view("picture",$error);
		// }
	}
}

?>