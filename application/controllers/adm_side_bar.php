<?php
class Adm_side_bar extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_foundation','fondi');
		$this->load->model('m_msgfounder','msg');
		$this->load->model('m_history','his');
		$this->load->model('m_visimisi','vm');
		$this->load->model('news_model','news');
		$this->load->model('m_beasyarat','syr');
		$this->load->model('m_kcare','kc');
		$this->load->model('m_csv','csv');
		$this->load->model('galeri_model','gal');
		$this->load->model('video_model','vid');
		
		$this->load->library('form_validation');
	}
	public function foundation()
	{
		$data['hasil'] = $this->fondi->mlihatFondi();
		$this->load->view('adm_foundation', $data);
	}
	public function msg_founder()
	{
		$data['hasil'] = $this->msg->mlihatMsg();
		$this->load->view('adm_msgfounder', $data);
	}
	public function beranda()
	{
		$this->load->view('adm_utama');
	}
	public function history()
	{
		$data['result'] = $this->his->mlihatHis();	
		$this->load->view('adm_history', $data);
	}
	public function visimisi()
	{
		$data['hasil'] = $this->vm->mlihatVm();	
		$this->load->view('adm_visimisi', $data);
	}
	public function pengurus()
	{
		$this->load->view('adm_pengurus');
	}
	public function news()
	{
		$data['hasil'] = $this->news->mlihatNews();	
		$this->load->view('adm_news',$data);
	}
	public function galeri()
	{
		$data['hasil'] = $this->gal->lihatKategori();	
		$this->load->view('adm_galeri',$data);
	}
	public function galeri_det()
	{
		$data['hasil'] = $this->gal->lihatKategori();
		$this->load->view('adm_galeri_det',$data);
	}
	public function video()
	{
		$data['hasil'] = $this->vid->lihatKategori();	
		$this->load->view('adm_video',$data);
	}
	public function video_det()
	{
		$data['hasil'] = $this->vid->lihatKategori();
		$this->load->view('adm_video_det',$data);
	}
	public function beasiswa()
	{
		$data['hasilsyarat'] = $this->syr->mlihatSyr();	
		$this->load->view('adm_beasiswa',$data);
		//$data = array('error' => $this->upload->display_errors('<div class="alert alert-error"> ','</div>'));
		
	
	}
	public function kcenter()
	{
		$data['hasil'] = $this->kc->mlihatKcare();	
		$this->load->view('adm_kcenter',$data);
	}
}
?>