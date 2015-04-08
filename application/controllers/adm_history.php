<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class adm_history extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_history','his');
	}
	
	public function updateHis()
	{
		$data['hasil']=$this->his->mupdateHis();
		redirect('Adm_side_bar/history');
	}
}

?>