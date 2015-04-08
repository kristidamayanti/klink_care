<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class adm_bea_syarat extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_beasyarat','syr');
	}
	
	public function updateSyr()
	{
		$data['hasilsyarat']=$this->syr->mupdateSyr();
		redirect('Adm_side_bar/beasiswa');
	}
}

?>