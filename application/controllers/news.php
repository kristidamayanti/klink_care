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
class news extends CI_Controller {

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
        $this->load->helper('text');
        $this->load->library("pagination");
    }

    public function index() {
        $data['titlepage'] = 'K-Link Care Foundation - News';
        $data['mHeader'] = $this->menu_model->getHeaderMenu();
        $data['mChild'] = $this->menu_model->getChildMenu();
                
        $total = $this->db->count_all_results('news');
        $per_pg = 2;
        $offset = $this->uri->segment(3);

        $this->load->library('pagination');
        $config['base_url'] = site_url() . '/news/index';
        $config['total_rows'] = $total;
        $config['per_page'] = $per_pg;
        $config['full_tag_open'] = '<div id="pagination">';
        $config['full_tag_close'] = '</div>';
        $this->pagination->initialize($config);

        $data['pagination'] = $this->pagination->create_links();
        $data['listNews'] = $this->m_news->getAllNews($per_pg, $offset);

        $this->load->view($this->urlConfig, $data);
        $this->load->view($this->urlMenu, $data);
        $this->load->view($this->urlReturn, $data);
        $this->load->view($this->urlFoot, $data);
    }
    public function detail() {
        $data['titlepage'] = 'K-Link Care Foundation - News';
        $data['mHeader'] = $this->menu_model->getHeaderMenu();
        $data['mChild'] = $this->menu_model->getChildMenu();
        
        $news_id = $this->uri->segment(3);
        $data['newsData'] = $this->m_news->getNewsByID($news_id);
        $this->load->view($this->urlConfig, $data);
        $this->load->view($this->urlMenu, $data);
        $this->load->view($this->urlReturn.'_more', $data);
        $this->load->view($this->urlFoot, $data);
    }

}
