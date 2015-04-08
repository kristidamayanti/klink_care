<?php
class m_beasyarat extends CI_Model
{
	public function mupdateSyr()
	{
		$judul=$this->input->post('judul');
		$syarat=$this->input->post('syarat');
		
		$query = "update beasyarat set judul='$judul', syarat='$syarat' where id='1'";
		$update = $this->db->query($query);
	}
	
	public function mlihatSyr()
	{
		$lihat = "select * from beasyarat where id='1'";
		$look = $this->db->query($lihat);
		return $look->result();
	}
}
?>