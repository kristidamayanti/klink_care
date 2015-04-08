<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Adm_poster extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		
		/* Standard Libraries */
		$this->load->database();
		/* ------------------ */
		
		$this->load->helper('url'); //Just for the examples, this is not required thought for the library
		
		$this->load->library('image_CRUD');
	}
	
	function _example_output($output = null)
	{
		$this->load->view('adm_poster',$output);	
	}
	
	function index()
	{
		$this->_example_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
	}	
	
	function insertPoster()
	{
		$image_crud = new image_CRUD();
		
		$image_crud->set_primary_key_field('id');
		$image_crud->set_url_field('url');
		$image_crud->set_table('poster')
			->set_image_path('assets/upload/img/poster/');
			
		$output = $image_crud->render();
		
		$this->_example_output($output);
	}
}

?>