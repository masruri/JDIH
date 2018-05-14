<?php defined('BASEPATH') OR exit('No direct script access allowed');
		
class Visimisi extends CI_Controller
{
	
	function __construct()
	{
		# code...
		parent::__construct();
	}

	public function index()
	{
		$data['title'] = 'Visi Misi';
		$data['file'] = 'Visi Misi';
		$this->load->view('template/template', $data);
	}
}