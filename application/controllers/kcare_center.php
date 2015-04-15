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
    private $limit = 9;

    public function __construct() {
        parent::__construct();
        $this->urlReturn = get_class($this);
        $this->load->model('menu_model');
        $this->load->model('m_menu');
        $this->load->model('m_news');
        $this->load->model('m_kcare', 'kcare');
        $this->load->library('pagination');
    }

    //put your code here
    public function index($offset = null) {

        $uri_segment = 3;
        
        if ($offset == null) {
            $offset = 1;
        } else {            
            $offset = $this->uri->segment($uri_segment);
        }

        $data['titlepage'] = 'K-Link Care Foundation - Program Beasiswa';
        $data['mHeader'] = $this->menu_model->getHeaderMenu();
        $data['mChild'] = $this->menu_model->getChildMenu();
        $data['look'] = $this->kcare->pageKcare($this->limit, $offset);
        $jml = $this->db->get('kcare');

        // generate pagination
        $config['base_url'] = site_url('kcare_center/index');
        $config['total_rows'] = $jml->num_rows();
        $config['per_page'] = $this->limit;
        $config['uri_segment'] = $uri_segment;
        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();

        $this->load->view($this->urlConfig, $data);
        $this->load->view($this->urlMenu, $data);
        $this->load->view($this->urlReturn, $data);
        $this->load->view($this->urlFoot, $data);
    }

}
