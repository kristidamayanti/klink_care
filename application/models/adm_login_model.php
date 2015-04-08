<?php
class Adm_login_model extends CI_Model
{
	function cekAdmin()
	{
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$qry="select username, password from admin where username='$username' and password='$password'";
		$query=$this->db->query($qry);
		foreach($query->result() as $look)
		{
			$hasil[]=$look;
			return $hasil;
		}
		
	}
}
?>