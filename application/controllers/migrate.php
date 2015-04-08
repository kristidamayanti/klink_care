<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of migrate
 *
 * @author sahid
 */
class migrate extends CI_Controller {

    //put your code here
    public function Migrate() {
        parent::__construct();
        $this->load->library('migration');
    }

    public function index() {
        if ($this->migration->current()) {
            echo 'Migration success';
        } else {
            echo "error with migration";
        }
    }    

}
