<?php
class m_kcare extends CI_Model
{
	public function save($title,$url)
	{
		$this->db->set('title',$title);
		$this->db->set('image',$url);
		$this->db->insert('kcare');
	}	
	
	public function mlihatKcare($count)
	{
		$lihat = "select * from kcare where periode='$count' order by id asc";
		$look = $this->db->query($lihat);
		return $look->result();
	}
}
?>