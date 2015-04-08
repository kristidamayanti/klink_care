<?php
class M_menu extends CI_Model{

	public function getAllMenuHead(){
		$qry = "SELECT * FROM tbl_menu_web WHERE menu_parent is null";
		$query = $this->db->query($qry);
    	return $query->result_object();
	}  
	
	 
    public function getChildMenu($menu_category){
//        Mengambil field di table menu_child 
//        untuk ditampilkan sebagai sub menu
        
		$qry = "SELECT * FROM tbl_menu_web WHERE menu_parent='$menu_category' ORDER BY menu_parent, menu_id";
		$query = $this->db->query($qry);
    	return $query->result_object();
		
		/*
        $this->db->select('menu_title','menu_url');
        $this->db->where('menu_category',$menu_category);
        $query = $this->db->get('menu_child');
        
        if ($query->num_rows() > 0):
            return $query;
        else:
            return NULL;
        endif;
		*/
    }
    //nandang
	public function getImgHeader(){
		$query=$this->db->query('SELECT * from imgheader order by ImgId desc');
		
		if($query->num_rows > 0 )
		{
			foreach($query->result() as $data)
			{
				$hasil[]=$data;
			}
			return $hasil;
		} else{
			}
	}
	
	public function getGaleri(){
		$query=$this->db->query('SELECT B.gallerycat_id, A.gallery_title, A.gallery_filename, A.gallery_date FROM gallery A INNER JOIN gallerycat B ON A.gallerycat_id = B.gallerycat_id ORDER BY B.gallerycat_id, A.gallery_date');
		if($query->num_rows > 0 )
		{
			foreach($query->result() as $data)
			{
				$hasil[]=$data;
			}
			return $hasil;
		}
	}
	
}
