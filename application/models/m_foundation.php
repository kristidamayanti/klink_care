<?php
class m_foundation extends CI_Model
{
	public function mupdateFondi()
	{
		$judul=$this->input->post('judul');
		$isi=$this->input->post('isi');
		
		$query = "update foundation set judul='$judul', isi='$isi' where id='1'";
		$update = $this->db->query($query);
	}
	
	public function mlihatFondi()
	{
		$lihat = "select * from foundation where id='1'";
		$look = $this->db->query($lihat);
		return $look->result();
	}
}
?>