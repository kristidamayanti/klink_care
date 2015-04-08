<?php

class C_menu extends CI_Controller {

    public function C_menu() {
        parent::__construct();
		$this->load->model('m_menu'); 
    }
    
    public function index(){
		$data['listMenu'] = $this->m_menu->getAllMenu();	
        $this->load->view('vcare/include/menu', $data);
		
		
    }
	
}
