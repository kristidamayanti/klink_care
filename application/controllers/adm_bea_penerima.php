<?php 

class Adm_bea_penerima extends CI_Controller{

	public function Adm_bea_penerima(){
		parent::__construct();
		$this->load->library('csv_reader','upload');		
		$this->load->model('m_csv','csv');
	}

	public function index()
	{
		$filepath = 'assets/upload/csv/'.$this->session->userdata('filename'); 

		if (file_exists($filepath)):
			$data['csvdata'] = $this->csv_reader->parse_file(FCPATH.$filepath);            
			$csv_array = $this->csv_reader->parse_file(FCPATH.$filepath);
		else:
			$data['myfile'] = FALSE;			
		endif;
		
		$this->load->view('adm_hasilcsv',$data);

		if($this->input->post('submit')=='Proses'):

			foreach ($csv_array as $rows):

				$array_csv = array(
					'nama'			=> str_replace(",", "", $rows[0]),
					'ttl'			=> str_replace(",", "", $rows[1]),
					'jk'			=> str_replace(",", "", $rows[2]),
					'kelas'			=> str_replace(",", "", $rows[3]),
					'namasekolah'	=> str_replace(",", "", $rows[4]),
					'alamatsekolah'	=> str_replace(",", "", $rows[5]),
					);

				$this->csv->insert($array_csv);

			endforeach;                                              
			redirect('Adm_bea_penerima/upload');
		endif;
	}

	public function upload()
	{
		$this->load->view('adm_beasiswa', array('error' => ' ' ));            
	}

	
	public function do_upload()
	{			
		$nama_csv = $_FILES["userfile"]["name"];
		$sesdata = array(                   
				   'filename'     => $nama_csv,                  
               );

		$this->session->set_userdata($sesdata);
		
		$config = array
		(
			'upload_path' => FCPATH.'assets/upload/csv/',
			'allowed_types' => 'csv|txt',				
			'overwrite' => TRUE,
		);
		
		$this->upload->initialize($config);

		

		if (!$this->upload->do_upload()):		
			$error = array('error' => $this->upload->display_errors('<div class="alert alert-error"> ','</div>'));
			
			$this->load->view('uploadcsv', $error);
		else:		
			$data = array('upload_data' => $this->upload->data());
			redirect('Adm_bea_penerima');
		endif;
	}
		
}