<?php
class Adm_galeri extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('galeri_model','gal');
		$this->load->library('form_validation');
		$this->load->library('MY_Upload', '', 'upload');
	}
	
	public function index()
	{
		$this->load->view('adm_galeri_det');
	}
	
	public function addKategori()
	{
		
		$album = $this->input->post('album');
		$this->gal->tambahKategori($album);
		redirect('Adm_side_bar/galeri');
	}
	
	public function delCat($gallerycat_id)
	{
		$this->gal->hapusCat($gallerycat_id);
		redirect('Adm_side_bar/galeri');
	}
	
	public function editCat($gallerycat_id)
	{	
			
		$data['hasil']=$this->gal->getById($gallerycat_id);
		$this->load->view('adm_catgallery',$data);
	}
	
	public function updateCat($gallerycat_id)
	{	
		$nama=$this->input->post('namacat');
		$this->gal->updateCat($gallerycat_id,$nama);
		redirect('Adm_side_bar/galeri');
	}
	
	public function doUpload()
	{
		$xpath= getcwd().'\assets\upload\img\galeri\ '; //tempat menyimpan file
		//$path= FCPATH.'assets\upload\img\galeri\ '; 
		if (is_writable(dirname($xpath))) 
		{		
			date_default_timezone_set('Asia/Jakarta');
			$tgl = date("Y-m-d H:i:s");
			$cat=$this->input->post('kategori');

			for($i=0; $i < count($_FILES['gambar']); $i++) 
			{
				if (!empty($_FILES["gambar"]["tmp_name"][$i]))
				{								
					$jenis_gambar=$_FILES['gambar']['type'][$i];
					$ket_gambar=$_POST['ket'][$i];					
												
					if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/png")					
					{      
						$tempFile = $_FILES["gambar"]["tmp_name"][$i];
						$gambar = $xpath.$_FILES['gambar']['name'][$i];
						$nama_gbr= $_FILES['gambar']['name'][$i];
						
						if (move_uploaded_file($tempFile, $gambar))
						{
								
							$data['hasil']=$this->gal->insert($nama_gbr,$cat,$ket_gambar,$tgl); 
							$this->load->view('adm_galeri_det',$data);
						}
					} 
				   else 
					{
						echo '<label>Jenis gambar yang anda kirim salah. Harus .jpg .gif .png</label>';
					}
				}
			}
		}
		else 
		{

			echo "salah";
		}
		
	}
	
	public function lookDet($gallerycat_id)
	{		
		$data['hasil']=$this->gal->getDet($gallerycat_id);
		$this->load->view('adm_detgaleri',$data);
	}
	
	public function delImg($gallery_id)
	{
		$this->gal->hapusImg($gallery_id);
		//redirect('Adm_side_bar/galeri');
	}
	

	
	
	
	/* public function getCat()
	{
		$idcat = $this->input->post('kategori');
		$data['kategori']=$this->gal->kategori($idcat);
		
	} */
	
	/* public function doUpload()
	{		
        $config['upload_path'] = './assets/upload/img/galeri/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = '2000';

        $this->upload->initialize($config);

        if ($this->upload->do_multi_upload('gambar'))
		{
			date_default_timezone_set('Asia/Jakarta');
			$tgl = date("Y-m-d H:i:s");
			$cat = $this->input->post('kategori');
			$ket = $this->input->post('ket');
			$image=$_FILES['gambar']['name'];
			
			foreach($image as $img) :
				$data = array(
						'images'		=> $img,
						'gallerycat_id'	=> $cat,
						'description'	=> $ket,
						'date'			=> $tgl,
							);

				$this->gal->insert($data);
			endforeach;
			
            $data['upload_data']= $this->upload->get_multi_upload_data();
			var_dump($data['upload_data']);
            $this->load->view('adm_galeri_det',$data);

        } 
		else 
		{
            $error = array('error' => $this->upload->display_errors());
            var_dump($error);
        }
    } */
	
}
?>