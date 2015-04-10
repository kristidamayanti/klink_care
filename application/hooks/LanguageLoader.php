<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LanguageLoader
 *
 * @author sahid
 */
class LanguageLoader {

    public function initialize() {
        $ci = & get_instance();
        $ci->load->helper('language');
        $site_lang = $ci->session->userdata('site_lang');

        if (isset($site_lang)) {
            $ci->lang->load('instruction', $ci->session->userdata('site_lang'));
        } else {
            $ci->lang->load('instruction', 'english');
        }
    }

}
