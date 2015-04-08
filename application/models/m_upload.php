<?php
class m_upload extends CI_Model
{
	public function dlDoc($url)
	{
		$this->db->set('file',$url);
		$this->db->insert('beadownload');
	}	
	
	public function dlImg($title,$url)
	{
		$this->db->set('file',$url);
		$this->db->insert('beadownload');
	}	
	
	public function lookImg()
	{
		$lihat = "select * from kcare ";
		$look = $this->db->query($lihat);
		return $look->result();
	}
}
?>