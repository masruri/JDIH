<?php defined('BASEPATH') OR exit('No direct script access allowed');
		
class Himpunan_perundangan extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('mhimpunan_perundangan','mhimpunan', TRUE);
		$this->load->helper('download');
	}

	public function index()
	{
		$data['title'] = 'Himpunan Perundangan';
		$data['file'] = 'Himpunan Perundangan';
		$data['query'] = $this->mhimpunan->tampil();
		$this->load->view('template/template', $data);
	}
}