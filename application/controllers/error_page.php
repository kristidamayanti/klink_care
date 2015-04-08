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
class error_page extends CI_Controller {

    //put your code here
    private $urlConfig = "html_config";
    private $urlMenu = "menus";
    private $urlFoot = "footers";
    private $urlReturn = "";

    public function error_page() {
        parent::__construct();
        $this->urlReturn = get_class($this);
        $this->load->model('menu_model');
        $this->load->model('m_menu');
        $this->load->model('m_news');
    }

    public function index() {
        $data['titlepage'] ='K-Link Care Foundation - Visi & Misi';
        $data['mHeader'] = $this->menu_model->getHeaderMenu();
        $data['mChild'] = $this->menu_model->getChildMenu();

        $this->load->view($this->urlConfig, $data);
        $this->load->view($this->urlMenu, $data);
        $this->load->view($this->urlReturn, $data);
        $this->load->view($this->urlFoot, $data);
    }

}
