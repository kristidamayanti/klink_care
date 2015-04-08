<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Adm_kcenter extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_kcare','kc');
	}
	
	public function error()
	{
		$this->load->view('adm_upload_error');
	}
	
	public function save()
	{
		$url = $this->do_upload();
		$title = $_POST['title'];
		$this->kc->save($title,$url);
		redirect('Adm_side_bar/kcenter');
	}
	
	private function do_upload()
	{
		$type = explode('.', $_FILES["pic"]["name"]);
		$type = $type[count($type)-1];
		$url = "assets/upload/img/kcenter/".uniqid(rand()).'.'.$type;
		if(in_array($type, array("png","jpg","jpeg","gif")))
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
			redirect('Adm_kcenter/error');
		}
	}
}

