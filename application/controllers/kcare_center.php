<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of visimisi
 *
 * @author sahid
 */
class kcare_center extends CI_Controller {

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
        $this->load->model('m_news');
		$this->load->model('m_kcare','kcare');
    }

    //put your code here
    public function index() 
	{
		$data['titlepage'] ='K-Link Care Foundation - Program Beasiswa';
        $data['mHeader'] = $this->menu_model->getHeaderMenu();
        $data['mChild'] = $this->menu_model->getChildMenu();
		$count = $this->kcare->dbcount();
		$data['look'] = $this-?kcare->mlihatKcare($count);
		

        $this->load->view($this->urlConfig, $data);
        $this->load->view($this->urlMenu, $data);
        $this->load->view($this->urlReturn, $data);
        $this->load->view($this->urlFoot, $data);
    }

}
