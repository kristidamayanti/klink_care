<?php
class news_model extends CI_Model
{
	public function mlihatNews()
	{
		$lihat = "select * from news";
		$look = $this->db->query($lihat);
		return $look->result();
	}
	
	public function save($title,$url,$isi,$tgl)
	{
		$this->db->set('dateNews',$tgl);
		$this->db->set('isi',$isi);
		$this->db->set('title',$title);
		$this->db->set('image',$url);
		$this->db->insert('news');
	}
	
	public function getById($id)
	{
		$this->db->where('id', $id);
		$pilih = $this->db->get('news');
		return $pilih->row();
	}
	
	public function mupdateNews($id,$url)
	{
		date_default_timezone_set('Asia/Jakarta');
		$tgl = date("Y-m-d H:i:s");
		//$url = $_FILES["pic"]["name"];
		
		$title=$this->input->post('title');
		$isi=$this->input->post('isi');
			
		$data = array(
				'title'		=> $title,
				'isi' 		=> $isi,
				'dateNews'	=> $tgl
				);
		$this->db->where('id',$id);
		$this->db->update('news',$data);
	}
	
	function hapus($id)
	{
		$this->db->where('id',$id);
		$query = $this->db->get('news');
		$row = $query->row();

     $this->db->delete('news', array('id' => $id));
	 unlink('assets/upload/img/news/'.$row->image);
	 
	}
	

}
?>