<?php
class m_visimisi extends CI_Model
{
	public function mupdateVs()
	{
		$visi=$this->input->post('visi');
				
		$query = "update visimisi set visi='$visi' where id='1'";
		$update = $this->db->query($query);
	}
	public function mupdateMs()
	{
		$misi=$this->input->post('misi');
		
		$query = "update visimisi set misi='$misi' where id='1'";
		$update = $this->db->query($query);
	}
	
	
	public function mlihatVm()
	{
		$lihat = "select * from visimisi where id='1'";
		$look = $this->db->query($lihat);
		return $look->result();
	}
}
?>