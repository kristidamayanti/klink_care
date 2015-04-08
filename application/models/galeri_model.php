<?php
class galeri_model extends CI_Model
{
	public function tambahKategori($album)
	{
		$this->db->set('namecat',$album);
		$this->db->insert('gallerycat');
	}
	
	public function lihatKategori()
	{
		$qry = "select * from gallerycat";
		$query = $this->db->query($qry);
		$query->num_rows();
		return $query->result();
	}
	
	function hapusCat($gallerycat_id)
	{
		$this->db->where('gallerycat_id',$gallerycat_id);
		$query = $this->db->get('gallerycat');
		$row = $query->row();

		$this->db->delete('gallerycat', array('gallerycat_id' => $gallerycat_id));
	 
	}
	
	public function getById($gallerycat_id)
	{
		$this->db->where('gallerycat_id', $gallerycat_id);
		$pilih = $this->db->get('gallerycat');
		return $pilih->row();
	}
	
	public function updateCat($gallerycat_id,$nama)
	{
		$data = array(
               'namecat' => $nama,
            );
		$this->db->where('gallerycat_id',$gallerycat_id);
		$this->db->update('gallerycat',$data);
	}
	
	public function kategori($idcat)
	{
		$qry = "select namecat from gallerycat where gallerycat_id='$idcat'";
		$query = $this->db->query($qry);
		return $query->result();
	}
	
	public function insert($nama_gbr,$cat,$ket_gambar,$tgl)
	{
		$data = array(
			array(
			'images'		=> $nama_gbr,
			'gallerycat_id'	=> $cat,
			'description'	=> $ket_gambar,
			'galdate'		=> $tgl,
				),
			);
        $this->db->insert_batch('gallery',$data);
    }
	
	public function getDet($gallerycat_id)
	{
		$qry = "select gallery.*, gallerycat.namecat from gallery,gallerycat 
				where gallery.gallerycat_id=gallerycat.gallerycat_id and gallerycat.gallerycat_id='$gallerycat_id'";
		$query = $this->db->query($qry);
		return $query->result();
	}
	
	function hapusImg($gallery_id)
	{
		$this->db->where('gallery_id',$gallery_id);
		$query = $this->db->get('gallery');
		$row = $query->row();
		$img = '%20'.$row->images;

		$file = $this->db->delete('gallery', array('gallery_id' => $gallery_id));
		if(!$file)
		{
			echo FCPATH.'assets/upload/img/galeri/'.$img;
		}
		else
		{
			unlink(getcwd().'\assets\upload\img\galeri\ '.$img);
		}
		
	 
	}
	
}
?>