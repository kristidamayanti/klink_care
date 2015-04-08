<?php
class m_history extends CI_Model
{
	public function mupdateHis()
	{
		$judul=$this->input->post('judul');
		$isi=$this->input->post('isi');
		
		$query = "update history set judul='$judul', isi='$isi' where id='1'";
		$update = $this->db->query($query);
	}
	
	public function mlihatHis()
	{
		$lihat = "select * from history where id='1'";
		$look = $this->db->query($lihat);
		return $look->result();
	}
}
?>