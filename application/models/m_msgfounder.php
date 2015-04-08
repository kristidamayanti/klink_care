<?php
class m_msgfounder extends CI_Model
{
	public function mupdateMsg()
	{
		$judul=$this->input->post('judul');
		$isi=$this->input->post('isi');
		
		$query = "update msgfounder set judul='$judul', isi='$isi' where id='1'";
		$update = $this->db->query($query);
	}
	
	public function mlihatMsg()
	{
		$lihat = "select * from msgfounder where id='1'";
		$look = $this->db->query($lihat);
		return $look->result();
	}
}
?>