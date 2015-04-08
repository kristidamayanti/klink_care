<?php
class Adm_login extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('Adm_login_model', 'lm');
    }

	public function cadmin()
	{
		parent::Controller();
		session_start();
	}
	
	public function index()
	{
		$this->load->view('login');
	}
	
	private function cekUser()
	{
		$login=$this->input->post('login');
		$data['username']=$this->input->post('username');
		$data['password']=$this->input->post('password');
		$data['hasil'] = $this->lm->cekAdmin();
		if($data['hasil']==null)
		{
			return "no";
		}
		else
		{
			return "yes";
		}
	}
	
	public function loginAdmin()
	{
		if($this->cekUser()=="yes")
		{
			$data['username']=$this->input->post('username');
			$newdata = array(
						'username'=> $data['username'],
						'login'=>TRUE);
			$this->session->set_userdata($newdata);
			$data['tampil']=$this->lm->cekAdmin();
			$this->load->view('adm_utama',$data);
		}
		else
		{
			echo 'Login Gagal';
		}
	}
	
}

?>