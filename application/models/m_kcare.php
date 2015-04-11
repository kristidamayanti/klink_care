<?php
class m_kcare extends CI_Model
{
	public function save($title,$url)
	{
		$this->db->set('title',$title);
		$this->db->set('image',$url);
		$this->db->insert('kcare');
	}	
	
	public function mlihatKcare()
	{
		$lihat = "select * from kcare order by id desc";
		$look = $this->db->query($lihat);
		return $look->result();
	}
	public function pageKcare($limit, $offset)
	{
		$lihat = "select * from kcare order by id desc limit $limit offset $offset";
		$look = $this->db->query($lihat);
		return $look->result();
	}
}
?>