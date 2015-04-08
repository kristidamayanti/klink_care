<?php

class C_gallery extends CI_Controller {

    public function C_gallery() {
        parent::__construct();
		//$this->load->model('m_news'); //load model yang akan dipakai
		$this->load->model('m_menu');
		//$this->load->helper('text');
		
		//$this->load->library("pagination");
		
		
    }
	public function index(){
		$data['listGaleri']=$this->m_menu->getGaleri();
        $this->load->view('vcare/v_galeri',$data);
	}
}
?>