<?php defined('BASEPATH') OR exit('No direct script access allowed');
		
class Struktur extends CI_Controller
{
	
	function __construct()
	{
		# code...
		parent::__construct();
	}

	public function index()
	{
		$data['title'] = 'Struktur Organisasi';
		$data['file'] = 'Struktur';
		$this->load->view('template/template', $data);
	}
}