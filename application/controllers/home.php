<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of home
 *
 * @author sahid
 */
class home extends CI_Controller {

    //put your code here
    public function Home() {
        parent::__construct();
        $this->load->model('menu_model','menu');
        $this->load->model('m_menu');
        $this->load->model('m_news');
    }
    
    public function index() {                
        $data['titlepage'] ='K-Link Care Foundation';
        $data['mHeader'] = $this->menu->getHeaderMenu();
        $data['mChild'] = $this->menu->getChildMenu();
        $data['listImgHdr'] = $this->m_menu->getImgHeader();
        $data['listNews'] = $this->m_news->lihatNews();
        
        $this->load->view('html_config',$data);
        $this->load->view('home',$data);
    }

}
