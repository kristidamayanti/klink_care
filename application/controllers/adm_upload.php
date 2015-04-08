<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Adm_upload extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_upload','up');
	}
	
	
	public function error()
	{
		$this->load->view('adm_upload_error');
	}
	
	public function uploadDoc()
	{
		$url = $this->do_upload();
		$this->up->dlDoc($url);
		redirect('adm_side_bar/beasiswa');
	}
	
	public function uploadImg()
	{
		$url = $this->do_upload();
		$title = $_POST['title'];
		$this->up->save($title,$url);
	}
	
	private function do_upload()
	{
		$type = explode('.', $_FILES["pic"]["name"]);
		$type = $type[count($type)-1];
		$url = "./assets/upload/file/".uniqid(rand()).'.'.$type;
		if(in_array($type, array("doc","docx")))
		{
			if(is_uploaded_file($_FILES["pic"]["tmp_name"]))
			{
				if(move_uploaded_file($_FILES["pic"]["tmp_name"],$url))
				{
					return $url;
				}
				else
				{
					return "";
				}
			}
		}
		else
		{
			redirect('Adm_upload/error');
		}
	}
}

