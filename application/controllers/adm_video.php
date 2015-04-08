<?php
class Adm_video extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('video_model','vid');
		$this->load->library('form_validation');
	}
	
	public function index()
	{
		$this->load->view('adm_galeri_det');
	}
	
	public function addKategori()
	{
		
		$album = $this->input->post('album');
		$this->vid->tambahKategori($album);
		redirect('Adm_side_bar/video');
	}
	
	public function delCat($videocat_id)
	{
		$this->vid->hapusCat($videocat_id);
		redirect('Adm_side_bar/video');
	}
	
	public function delDet($vid_id)
	{
		$this->vid->hapusDet($vid_id);
		redirect('Adm_side_bar/video');
	}
	
	public function editCat($videocat_id)
	{	
			
		$data['hasil']=$this->vid->getById($videocat_id);
		$this->load->view('adm_catvideo',$data);
	}
	
	public function insertVid($videocat_id)
	{	
		date_default_timezone_set('Asia/Jakarta');
		$tgl = date("Y-m-d H:i:s");
		
		$url = $this->do_upload();
		$catid=$this->input->post('album');
		$link=$this->input->post('link');
		$title=$this->input->post('title');
		$desc=$this->input->post('desc');
		
		$this->vid->insert($url,$catid,$link,$title,$desc,$tgl);
		redirect('Adm_side_bar/video');
	}
	
	private function do_upload()
	{
		$type = explode('.', $_FILES["pic"]["name"]);
		$type = $type[count($type)-1];
		$url = "video/".uniqid(rand()).'.'.$type;
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
		
	}
	
	public function lookDet($videocat_id)
	{	
			
		$data['hasil']=$this->vid->getDet($videocat_id);
		$this->load->view('adm_detvideo',$data);
	}
}
?>