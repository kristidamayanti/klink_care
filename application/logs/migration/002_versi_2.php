<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of 001_versi_2
 *
 * @author sahid
 */
class Migration_versi_2 extends CI_Migration {

    //put your code here

    public function up() {        
        $this->menu();
        $this->menu_child();
    }

    public function down() {
        
    }

    private function menu() {
        $fields = array(
            'menu_category' => array(
                'type' => 'CHAR',
                'constraint' => '50',
            )
        );
        $this->dbforge->add_column('menu', $fields);
    }

    private function menu_child() {
        $this->dbforge->add_key('menu_cid', TRUE);
        $this->dbforge->add_field(array(
            'menu_cid' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'menu_category' => array(
                'type' => 'CHAR',
                'constraint' => '50',
            ),
            'menu_title' => array(
                'type' => 'CHAR',
                'constraint' => '50',
            ),
            'menu_url' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
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

        $this->dbforge->create_table('menu_child');
    }

}
