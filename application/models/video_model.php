<?php
class video_model extends CI_Model
{
	public function tambahKategori($album)
	{
		$this->db->set('namecat',$album);
		$this->db->insert('videocat');
	}
	
	public function lihatKategori()
	{
		$qry = "select * from videocat";
		$query = $this->db->query($qry);
		$query->num_rows();
		return $query->result();
	}
	
	function hapusCat($videocat_id)
	{
		$this->db->where('videocat_id',$videocat_id);
		$query = $this->db->get('videocat');
		$row = $query->row();

		$this->db->delete('videocat', array('videocat_id' => $videocat_id));
	 
	}
	
	function hapusDet($vid_id)
	{
		$this->db->where('vid_id',$vid_id);
		$query = $this->db->get('video1');
		$row = $query->row();

		$this->db->delete('video1', array('vid_id' => $vid_id));
	 
	}
	
	public function getById($videocat_id)
	{
		$this->db->where('videocat_id', $videocat_id);
		$pilih = $this->db->get('videocat');
		return $pilih->row();
	}
	
	public function updateCat($videocat_id,$nama)
	{
		$data = array(
               'namecat' => $nama,
            );
		$this->db->where('videocat_id',$videocat_id);
		$this->db->update('videocat',$data);
	}
	
	public function getDet($videocat_id)
	{
		$qry = "select video1.*, videocat.namecat from video1,videocat 
				where video1.videocat_id=videocat.videocat_id and videocat.videocat_id='$videocat_id'";
		$query = $this->db->query($qry);
		return $query->result();
	}
	
	public function insert($url,$catid,$link,$title,$desc,$tgl){
        
        $this->db->set('videocat_id',$catid);
		$this->db->set('vid_img',$url);
		$this->db->set('link',$link);
		$this->db->set('title',$title);
		$this->db->set('desc',$desc);
		$this->db->set('datevid',$tgl);
		$this->db->insert('video1');
    }
	
}
?>