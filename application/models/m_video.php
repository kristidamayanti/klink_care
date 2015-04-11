<?php
class M_video extends CI_Model{
	
	public function getCatvideo(){
		$data = $this->input->post(NULL, TRUE);
		$this->db->order_by('videocat_id');
		$query=$this->db->get('videocat');
    	return $query->result_object();
	}
	
	public function getAllvideoByCatID($cat_id){
		$data = $this->input->post(NULL, TRUE);
		$qry = "SELECT * FROM video1 WHERE videocat_id='$cat_id' ORDER BY datevid desc,title";
		//echo $qry;
		$query = $this->db->query($qry);
		//$this->db->order_by('video_createdt','videocat_id','video_title');
		//$query=$this->db->get('video');
    	return $query->result_object();
	} 
	
	public function getAllvideo(){
		$data = $this->input->post(NULL, TRUE);
		$qry = "SELECT * FROM video1, videocat where video1.videocat_id=videocat.videocat_id group by video1.vid_id desc limit 3";
		$query = $this->db->query($qry);
		//$this->db->order_by('video_createdt','videocat_id','video_title');
		//$query=$this->db->get('video');
    	return $query->result_object();
	}  
	
	public function getAllvideo2(){
		$data = $this->input->post(NULL, TRUE);
		$qry = "SELECT * FROM video ORDER BY datevid desc,videocat_id,video_title";
		$query = $this->db->query($qry);
    	return $query->result_object();
	}  
	
	public function getvideoByID($video_id){
		$data = $this->input->post(NULL, TRUE);
		$qry = "SELECT * FROM video WHERE $$video_id='$video_id' ORDER BY datevid desc";
		$query = $this->db->query($qry);
    	return $query->result_object();
	}  
}
