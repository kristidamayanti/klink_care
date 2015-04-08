<?php
class M_news extends CI_Model{

	public function getAllNews($limit, $offset){
		$data = $this->input->post(NULL, TRUE);
		//$qry = "SELECT * FROM news ORDER BY news_id desc LIMIT $limit, $offset";
		//$query = $this->db->query($qry);
		$this->db->order_by('id','desc');
		$query=$this->db->get('news',$limit,$offset);
    	return $query->result_object();
	}  
	
	public function getAllNews2(){
		$data = $this->input->post(NULL, TRUE);
		$qry = "SELECT * FROM news ORDER BY id desc";
		$query = $this->db->query($qry);
    	return $query->result_object();
	}  
	
	public function getNewsByID($news_id){
		$data = $this->input->post(NULL, TRUE);
		$qry = "SELECT * FROM news WHERE id='$news_id' ORDER BY id desc";
		$query = $this->db->query($qry);
    	return $query->result_object();
	}  
	
	public function insertNews()
	{
		$data = array
		(
		   'title' => 'My title' ,
		   'name' => 'My Name' ,
		   'date' => 'My date'
		);

		$this->db->insert('mytable', $data); 
	}
	
	public function lihatNews()
	{
		$qry = "select * from news group by id desc limit 1";
		$query = $this->db->query($qry);
		if($query->num_rows()>0)
		{
			foreach($query->result() as $look)
			{
				$hasil[]=$look;
			}
			return $hasil;
		}
	}
}
