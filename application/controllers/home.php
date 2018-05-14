<?php defined('BASEPATH') OR exit('No direct script access allowed');
		
class Home extends CI_Controller
{	
	function __construct()
	{
		parent::__construct();
	
		$this->load->model('home_model','mhome', TRUE);
		$this->load->helper('download');
	}

	public function index()
	{
		$data['download'] = $this->mhome->download();
		$data['query'] = $this->mhome->tampil();
		$this->load->view('template/layout', $data);
	}
}