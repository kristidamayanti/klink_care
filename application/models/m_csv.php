<?php
class m_csv extends CI_Model
 {
	function __construct()
	{				
		parent::__construct();					 
	}
	
	 public function insert($array_csv){
        
        $this->db->insert('beapenerima',$array_csv);
    }
	

}