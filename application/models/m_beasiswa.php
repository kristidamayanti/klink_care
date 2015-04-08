<?php
class m_beasiswa extends CI_Model
{
	public function insertFile($filename)
	{
		$data = array(
						'pic'=>$filename
					);
		$this->db->insert('poster', $data);
		return $this->db->insert_id();	
	}
	
	// kalo untuk poster yang pake gambar doang syntax di bawah ga termasuk!
	public function mlihatPoster()
	{
		$qry = "select * from poster group by id desc limit 1";
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
	public function mlihatPenerima()
	{
		$qry = "select * from beapenerima";
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
?>