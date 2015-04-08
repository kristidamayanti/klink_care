<?php

class C_news extends CI_Controller {

    public function C_news() {
        parent::__construct();
		$this->load->model('m_news'); //load model yang akan dipakai
		$this->load->model('m_menu');
		$this->load->helper('text');
		
		$this->load->library("pagination");
    }
    
    public function index(){
		
		$data2['listMenu'] = $this->m_menu->getAllMenuHead();
		
		$data['base']=$this->config->item('base_url');
		$data['title']= 'News';
		
		$total=$this->db->count_all_results('news');
		$per_pg=2;
		$offset=$this->uri->segment(3);
       			
		$this->load->library('pagination');
		$config['base_url'] = $data['base'].'/c_news/index';
	    $config['total_rows'] = $total;
	    $config['per_page'] = $per_pg;
		//$config['full_tag_open'] = '<div id="pagination">';
		//$config['full_tag_close'] = '</div>';
            
        $this->pagination->initialize($config);
             
        $data['pagination']=$this->pagination->create_links();
		
		$data['listNews']=$this->m_news->getAllNews($per_pg,$offset);
		$this->load->view('vcare/include/header.php', $data);
        $this->load->view('vcare/v_news', $data);
		$this->load->view('vcare/include/footer.php', $data);
    }
	
	public function newsMore(){
		$news_id = $this->uri->segment(3);
		$data['newsData'] = $this->m_news->getNewsByID($news_id); 
		$this->load->view('vcare/include/header.php', $data);
        $this->load->view('vcare/v_newsMore', $data);
		$this->load->view('vcare/include/footer.php');
	}

}
