<?php
class M_gallery extends CI_Model{
	
	public function getCatGallery(){
		$data = $this->input->post(NULL, TRUE);
		$this->db->order_by('gallerycat_id');
		$query=$this->db->get('gallerycat');
    	return $query->result_object();
	}
	
	public function getAllGalleryByCatID($catID){
		$data = $this->input->post(NULL, TRUE);
		$qry = "SELECT * FROM gallery WHERE gallerycat_id='$catID' ORDER BY galdate desc,description";
		$query = $this->db->query($qry);
	
    	return $query->result_object();
	} 
	
	public function getAllGallery(){
		$data = $this->input->post(NULL, TRUE);
		$qry = "SELECT gallery.*, gallerycat.namecat FROM gallery, gallerycat where gallery.gallerycat_id=gallerycat.gallerycat_id
		group by gallery.gallery_id desc limit 6";
		$query = $this->db->query($qry);
	
    	return $query->result_object();
	}  
	
	public function getAllGallery2(){
		$data = $this->input->post(NULL, TRUE);
		$qry = "SELECT * FROM gallery ORDER BY gallery_createdt desc";
		$query = $this->db->query($qry);
    	return $query->result_object();
	}  
	
	public function getGalleryByID($gallery_id){
		$data = $this->input->post(NULL, TRUE);
		$qry = "SELECT * FROM gallery WHERE gallery_id='$gallery_id' ORDER BY galdate desc";
		$query = $this->db->query($qry);
    	return $query->result_object();
	}  
	
	
}
