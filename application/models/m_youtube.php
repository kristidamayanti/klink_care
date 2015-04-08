<?php
class M_youtube extends CI_Model{
	
	public function getCatyoutube(){
		$data = $this->input->post(NULL, TRUE);
		$this->db->order_by('youtubecat_id');
		$query=$this->db->get('youtubecat');
    	return $query->result_object();
	}
	
	public function getAllyoutubeByCatID($catID){
		$data = $this->input->post(NULL, TRUE);
		$qry = "SELECT * FROM youtube WHERE youtubecat_id='$catID' ORDER BY youtube_createdt desc,youtube_title";
		//echo $qry;
		$query = $this->db->query($qry);
		//$this->db->order_by('youtube_createdt','youtubecat_id','youtube_title');
		//$query=$this->db->get('youtube');
    	return $query->result_object();
	} 
	
	public function getAllyoutube(){
		$data = $this->input->post(NULL, TRUE);
		$qry = "select * from `youtube` b where b.youtubecat_id = (select youtubecat_id from `youtubecat` LIMIT 1)";
		$query = $this->db->query($qry);
		//$this->db->order_by('youtube_createdt','youtubecat_id','youtube_title');
		//$query=$this->db->get('youtube');
    	return $query->result_object();
	}  
	
	public function getAllyoutube2(){
		$data = $this->input->post(NULL, TRUE);
		$qry = "SELECT * FROM youtube ORDER BY youtube_createdt desc,youtubecat_id,youtube_title";
		$query = $this->db->query($qry);
    	return $query->result_object();
	}  
	
	public function getyoutubeByID($youtube_id){
		$data = $this->input->post(NULL, TRUE);
		$qry = "SELECT * FROM youtube WHERE $$youtube_id='$youtube_id' ORDER BY youtube_createdt desc";
		$query = $this->db->query($qry);
    	return $query->result_object();
	}  
}
