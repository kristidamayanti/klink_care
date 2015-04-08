<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Adm_news extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();
		$this->load->model('news_model','news');
	}
		
	public function error()
	{
		$this->load->view('adm_upload_error');
	}
	
	public function save()
	{
		date_default_timezone_set('Asia/Jakarta');
		$tgl = date("Y-m-d H:i:s");
		
		$url = $this->do_upload();
		$title = $_POST['title'];
		$isi = $_POST['isi'];
		$this->news->save($title,$url,$isi,$tgl);
		redirect('Adm_side_bar/news');
	}
	
	public function updateNews($id)
	{	
		
		$data['hasil']=$this->news->getById($id);
		if($this->input->post('update'))
		{	
			echo "test ".$url."<br>";
			$url = $this->do_upload();
			$this->news->mupdateNews($id,$url);
			redirect('Adm_side_bar/news');
		}
		$this->load->view('adm_updatenews',$data);
	}
	
	private function do_upload()
	{
		$type = explode('.', $_FILES["pic"]["name"]);
		$type = $type[count($type)-1];
		$url = "assets/upload/img/news/".uniqid(rand()).'.'.$type;
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



f