<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of 404
 *
 * @author sahid
 */
class youtube extends CI_Controller {

    //put your code here
    private $urlConfig = "html_config";
    private $urlMenu = "menus";
    private $urlFoot = "footers";
    private $urlReturn = "";

    public function __construct() {
        parent::__construct();
        $this->urlReturn = get_class($this);
        $this->load->model('menu_model');
        $this->load->model('m_menu');
        $this->load->model('m_youtube');
        $this->load->helper('text');
    }

    public function index() {
        $data['titlepage'] = 'K-Link Care Foundation - Youtube';
        $data['mHeader'] = $this->menu_model->getHeaderMenu();
        $data['mChild'] = $this->menu_model->getChildMenu();
        
        $data['listCatYoutube'] = $this->m_youtube->getCatYoutube();
        $data['listYoutube'] = $this->m_youtube->getAllYoutube();

        $this->load->view($this->urlConfig, $data);
        $this->load->view($this->urlMenu, $data);
        $this->load->view($this->urlReturn, $data); 
        $this->load->view($this->urlFoot, $data); 
	
		/*$this->load->view('video_test');*/
    }
	
	public function category() {
        $data['titlepage'] = 'K-Link Care Foundation - Youtubes';
        $data['mHeader'] = $this->menu_model->getHeaderMenu();
        $data['mChild'] = $this->menu_model->getChildMenu();
        		
        $data['listCatYoutube'] = $this->m_youtube->getCatYoutube();
        $cat_id = $this->uri->segment(3);
        $data['listYoutube'] = $this->m_youtube->getAllYoutubeByCatID($cat_id);

        $this->load->view($this->urlConfig, $data);
        $this->load->view($this->urlMenu, $data);
        $this->load->view($this->urlReturn, $data); 
        $this->load->view($this->urlFoot, $data);
		
    }

}
