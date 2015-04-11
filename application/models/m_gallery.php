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
		$qry = "SELECT * FROM gallery WHERE gallerycat_id='$catID' ORDER BY gallery_createdt desc,gallery_title";
		$query = $this->db->query($qry);
		//$this->db->order_by('gallery_createdt','gallerycat_id','gallery_title');
		//$query=$this->db->get('gallery');
    	return $query->result_object();
	} 
	
	public function getAllGallery(){
		$data = $this->input->post(NULL, TRUE);
		$qry = "select * from gallery where gallery.gallerycat_id = (select gallerycat_id from gallerycat LIMIT 1)";
		$query = $this->db->query($qry);
		//$this->db->order_by('gallery_createdt','gallerycat_id','gallery_title');
		//$query=$this->db->get('gallery');
    	return $query->result_object();
	}  
	
	public function getAllGallery2(){
		$data = $this->input->post(NULL, TRUE);
		$qry = "SELECT * FROM gallery ORDER BY gallery_createdt desc,gallerycat_id,gallery_title";
		$query = $this->db->query($qry);
    	return $query->result_object();
	}  
	
	public function getGalleryByID($gallery_id){
		$data = $this->input->post(NULL, TRUE);
		$qry = "SELECT * FROM gallery WHERE gallery_id='$gallery_id' ORDER BY gallery_createdt desc";
		$query = $this->db->query($qry);
    	return $query->result_object();
	}  
}
