<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class adm_visimisi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_visimisi','vm');
	}
	
	public function updateVs()
	{
		$data['hasil']=$this->vm->mupdateVs();
		redirect('adm_side_bar/visimisi');
	}
	public function updateMs()
	{
		$data['hasil']=$this->vm->mupdateMs();
		redirect('adm_side_bar/visimisi');
	}
}
?>