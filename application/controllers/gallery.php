<?php
class gallery extends CI_Controller {

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
        $this->load->model('m_gallery');
    	$this->load->helper('url');
    }

    public function index() {
        $data['titlepage'] = 'K-Link Care Foundation - Gallerys';
        $data['mHeader'] = $this->menu_model->getHeaderMenu();
        $data['mChild'] = $this->menu_model->getChildMenu();
        
        $data['listCatGallery'] = $this->m_gallery->getCatGallery();
        $data['listGallery'] = $this->m_gallery->getAllGallery();

        $this->load->view($this->urlConfig, $data);
        $this->load->view($this->urlMenu, $data);
        $this->load->view($this->urlReturn, $data); 
        $this->load->view($this->urlFoot, $data); 
	
		/*$this->load->view('gallery_test');*/
    }
	
	public function category($cat_id=0) {
        $data['titlepage'] = 'K-Link Care Foundation - Gallerys';
        $data['mHeader'] = $this->menu_model->getHeaderMenu();
        $data['mChild'] = $this->menu_model->getChildMenu();
        		
        $data['listCatGallery'] = $this->m_gallery->getCatGallery();
		$data['listGallery'] = $this->m_gallery->getAllGalleryByCatID($cat_id);
		
        $this->load->view($this->urlConfig, $data);
        $this->load->view($this->urlMenu, $data);
        $this->load->view($this->urlReturn, $data); 
        $this->load->view($this->urlFoot, $data);
		
    }

}
