<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LangExample
 *
 * @author sahid
 */
class LangExample extends CI_Controller {

    public function __construct() {
        parent::__construct();        
    }

    public function index() {
        $this->load->view('lang_example');
    }

    public function changeLang($langtype) {
        if ($langtype == 'IDN'):
            $this->session->set_userdata('site_lang', 'indonesia');
        elseif($langtype == 'EN'):
            $this->session->set_userdata('site_lang', 'english');
        endif;
    }

}
