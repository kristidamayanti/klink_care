<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of menus
 *
 * @author sahid
 */
class Migration_versi_1 extends CI_Migration {

    //put your code here
    public function up() {
        $this->settings();
        $this->menu();
        $this->carousel();
        $this->news();
        $this->gallery();
        $this->gallery_category();
        $this->download();
        $this->download_category();
    }

    private function settings() {
        $this->dbforge->add_key('settings_id', TRUE);
        $this->dbforge->add_field(array(
            'settings_id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'settings_companyname' => array(
                'type' => 'CHAR',
                'constraint' => '50',
            ),
            'settings_description' => array(
                'type' => 'TEXT',
                'null' => TRUE,
            ),
            'settings_email' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'settings_phone' => array(
                'type' => 'VARCHAR',
                'constraint' => '20',
            ),
            'settings_fax' => array(
                'type' => 'VARCHAR',
                'constraint' => '20',
            ),
            'settings_url' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'settings_createuser' => array(
                'type' => 'CHAR',
                'constraint' => '20',
            ),
            'settings_updateuser' => array(
                'type' => 'CHAR',
                'constraint' => '20',
            ),
            'settings_createip' => array(
                'type' => 'CHAR',
                'constraint' => '20',
            ),
            'settings_updateip' => array(
                'type' => 'CHAR',
                'constraint' => '20',
            ),
            'settings_createdt' => array(
                'type' => 'TIMESTAMP',
                'null' => FALSE,
            ),
            'settings_updatedt' => array(
                'type' => 'TIMESTAMP',
                'null' => FALSE,
            ),
        ));

        $this->dbforge->create_table('settings');
    }

    private function menu() {
        $this->dbforge->add_key('menu_id', TRUE);
        $this->dbforge->add_field(array(
            'menu_id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'menu_title' => array(
                'type' => 'CHAR',
                'constraint' => '50',
            ),
            'menu_url' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'menu_description' => array(
                'type' => 'TEXT',
                'null' => TRUE,
            ),
            'menu_createuser' => array(
                'type' => 'CHAR',
                'constraint' => '20',
            ),
            'menu_updateuser' => array(
                'type' => 'CHAR',
                'constraint' => '20',
            ),
            'menu_createip' => array(
                'type' => 'CHAR',
                'constraint' => '20',
            ),
            'menu_updateip' => array(
                'type' => 'CHAR',
                'constraint' => '20',
            ),
            'menu_createdt' => array(
                'type' => 'TIMESTAMP',
                'null' => FALSE,
            ),
            'menu_updatedt' => array(
                'type' => 'TIMESTAMP',
                'null' => FALSE,
            ),
        ));

        $this->dbforge->create_table('menu');
    }

    private function carousel() {
        $this->dbforge->add_key('car_id', TRUE);
        $this->dbforge->add_field(array(
            'car_id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'car_title' => array(
                'type' => 'CHAR',
                'constraint' => '50',
            ),
            'car_description' => array(
                'type' => 'TEXT',
                'null' => TRUE,
            ),
            'car_filename' => array(
                'type' => 'CHAR',
                'constraint' => '50',
            ),
            'car_createuser' => array(
                'type' => 'CHAR',
                'constraint' => '20',
            ),
            'car_updateuser' => array(
                'type' => 'CHAR',
                'constraint' => '20',
            ),
            'car_createip' => array(
                'type' => 'CHAR',
                'constraint' => '20',
            ),
            'car_updateip' => array(
                'type' => 'CHAR',
                'constraint' => '20',
            ),
            'car_createdt' => array(
                'type' => 'TIMESTAMP',
                'null' => FALSE,
            ),
            'car_updatedt' => array(
                'type' => 'TIMESTAMP',
                'null' => FALSE,
            ),
        ));

        $this->dbforge->create_table('carousel');
    }

    private function news() {
        $this->dbforge->add_key('news_id', TRUE);
        $this->dbforge->add_field(array(
            'news_id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'news_title' => array(
                'type' => 'CHAR',
                'constraint' => '50',
            ),
            'news_description' => array(
                'type' => 'TEXT',
                'null' => TRUE,
            ),
            'news_filename' => array(
                'type' => 'CHAR',
                'constraint' => '50',
            ),
            'news_tags' => array(
                'type' => 'CHAR',
                'constraint' => '50',
            ),
            'news_comment' => array(
                'type' => 'VARCHAR',
                'constraint' => '150',
            ),
//         -----------Info-------------
//         field news_viewcount
//         di gunakan untuk menghitung 
//         jumlah user klik di news tersebut
//         -----------Info-------------
            'news_viewcount' => array(
                'type' => 'INT',
                'constraint' => 5
            ),
            'news_createip' => array(
                'type' => 'CHAR',
                'constraint' => '20',
            ),
            'news_updateip' => array(
                'type' => 'CHAR',
                'constraint' => '20',
            ),
            'news_createuser' => array(
                'type' => 'CHAR',
                'constraint' => '20',
            ),
            'news_updateuser' => array(
                'type' => 'CHAR',
                'constraint' => '20',
            ),
            'news_createdt' => array(
                'type' => 'TIMESTAMP',
                'null' => FALSE,
            ),
            'news_updatedt' => array(
                'type' => 'TIMESTAMP',
                'null' => FALSE,
            ),
        ));

        $this->dbforge->create_table('news');
    }

//    table gallery adalah table detail
//    dari table gallery_cat dengan relas
//    gallerycat_id -> gallcat_id       

    private function gallery() {
        $this->dbforge->add_key('gallery_id', TRUE);
        $this->dbforge->add_field(array(
            'gallery_id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'gallerycat_id' => array(
                'type' => 'INT',
                'constraint' => 5
            ),
            'gallery_title' => array(
                'type' => 'CHAR',
                'constraint' => '50',
            ),
            'gallery_description' => array(
                'type' => 'TEXT',
                'null' => TRUE,
            ),
            'gallery_filename' => array(
                'type' => 'CHAR',
                'constraint' => '50',
            ),
            'gallery_tags' => array(
                'type' => 'CHAR',
                'constraint' => '50',
            ),
            'gallery_comment' => array(
                'type' => 'VARCHAR',
                'constraint' => '150',
            ),
            'gallery_createip' => array(
                'type' => 'CHAR',
                'constraint' => '20',
            ),
            'gallery_updateip' => array(
                'type' => 'CHAR',
                'constraint' => '20',
            ),
            'gallery_createuser' => array(
                'type' => 'CHAR',
                'constraint' => '20',
            ),
            'gallery_updateuser' => array(
                'type' => 'CHAR',
                'constraint' => '20',
            ),
            'gallery_createdt' => array(
                'type' => 'TIMESTAMP',
                'null' => FALSE,
            ),
            'gallery_updatedt' => array(
                'type' => 'TIMESTAMP',
                'null' => FALSE,
            ),
        ));

        $this->dbforge->create_table('gallery');
    }

    private function download() {
        $this->dbforge->add_key('dl_id', TRUE);
        $this->dbforge->add_field(array(
            'dl_id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'dlcat_id' => array(
                'type' => 'INT',
                'constraint' => 5
            ),
            'dl_title' => array(
                'type' => 'CHAR',
                'constraint' => '50',
            ),
            'dl_description' => array(
                'type' => 'TEXT',
                'null' => TRUE,
            ),
            'dl_filename' => array(
                'type' => 'CHAR',
                'constraint' => '50',
            ),
            'dl_tags' => array(
                'type' => 'CHAR',
                'constraint' => '50',
            ),
            'dl_comment' => array(
                'type' => 'VARCHAR',
                'constraint' => '150',
            ),
            'dl_createip' => array(
                'type' => 'CHAR',
                'constraint' => '20',
            ),
            'dl_updateip' => array(
                'type' => 'CHAR',
                'constraint' => '20',
            ),
            'dl_createuser' => array(
                'type' => 'CHAR',
                'constraint' => '20',
            ),
            'dl_updateuser' => array(
                'type' => 'CHAR',
                'constraint' => '20',
            ),
            'dl_createdt' => array(
                'type' => 'TIMESTAMP',
                'null' => FALSE,
            ),
            'dl_updatedt' => array(
                'type' => 'TIMESTAMP',
                'null' => FALSE,
            ),
        ));

        $this->dbforge->create_table('download');
    }

    private function download_category() {
        $this->dbforge->add_key('dlcat_id', TRUE);
        $this->dbforge->add_field(array(
            'dlcat_id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
//         -----------Info-------------
//         field dlcat_id adalah key untuk 
//         relasi ke table gallery
//         -----------Info-------------
            'dlcat_id' => array(
                'type' => 'INT',
                'constraint' => 5
            ),
            'dlcat_title' => array(
                'type' => 'CHAR',
                'constraint' => '50',
            ),
            'dlcat_description' => array(
                'type' => 'TEXT',
                'null' => TRUE,
            ),
            'dlcat_filename' => array(
                'type' => 'CHAR',
                'constraint' => '50',
            ),
        ));

        $this->dbforge->create_table('download_category');
    }

    private function gallery_category() {
        $this->dbforge->add_key('gallcat_id', TRUE);
        $this->dbforge->add_field(array(
            'gallcat_id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
//         -----------Info-------------
//         field gallcat_id adalah key untuk 
//         relasi ke table gallery
//         -----------Info-------------
            'gallcat_title' => array(
                'type' => 'CHAR',
                'constraint' => '50',
            ),
            'gallcat_description' => array(
                'type' => 'TEXT',
                'null' => TRUE,
            ),
            'gallcat_filename' => array(
                'type' => 'CHAR',
                'constraint' => '50',
            ),
            'gallcat_tags' => array(
                'type' => 'CHAR',
                'constraint' => '50',
            )
        ));

        $this->dbforge->create_table('gallery_category');
    }

    public function down() {
        $this->dbforge->drop_table('menu');
        $this->dbforge->drop_table('carousel');
        $this->dbforge->drop_table('news');
        $this->dbforge->drop_table('gallery');
        $this->dbforge->drop_table('gallery_category');
        $this->dbforge->drop_table('download');
        $this->dbforge->drop_table('download_category');
        $this->dbforge->drop_table('settings');
    }

}
