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
class video extends CI_Controller {

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
        $this->load->model('m_video');
        $this->load->helper('text');
    }

    public function index() {
        $data['titlepage'] = 'K-Link Care Foundation - Videos';
        $data['mHeader'] = $this->menu_model->getHeaderMenu();
        $data['mChild'] = $this->menu_model->getChildMenu();
        
        $data['listCatVideo'] = $this->m_video->getCatVideo();
        $data['listVideo'] = $this->m_video->getAllVideo();

        $this->load->view($this->urlConfig, $data);
        $this->load->view($this->urlMenu, $data);
        $this->load->view($this->urlReturn, $data); 
        $this->load->view($this->urlFoot, $data); 
	
		/*$this->load->view('video_test');*/
    }
	
	public function category() {
        $data['titlepage'] = 'K-Link Care Foundation - Videos';
        $data['mHeader'] = $this->menu_model->getHeaderMenu();
        $data['mChild'] = $this->menu_model->getChildMenu();
        		
        $data['listCatVideo'] = $this->m_video->getCatVideo();
        $cat_id = $this->uri->segment(3);
        $data['listVideo'] = $this->m_video->getAllVideoByCatID($cat_id);

        $this->load->view($this->urlConfig, $data);
        $this->load->view($this->urlMenu, $data);
        $this->load->view($this->urlReturn, $data); 
        $this->load->view($this->urlFoot, $data);
		
    }

}
