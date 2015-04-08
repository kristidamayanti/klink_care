<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class adm_foundation extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_foundation','fondi');
	}
	
	public function updateFondi()
	{
		$data['hasil']=$this->fondi->mupdateFondi();
		redirect('adm_side_bar/foundation');
	}
}
?>