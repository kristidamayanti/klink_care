<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class adm_msgfounder extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_msgfounder','msg');
	}
	
	public function updateMsg()
	{
		$data['hasil']=$this->msg->mupdateMsg();
		redirect('adm_side_bar/msg_founder');
	}
}
?>