<?php defined('BASEPATH') OR exit('No direct script access allowed');
		
class Galery extends CI_Controller
{
	function __construct()
	{
		# code...
		parent::__construct();
	}

	public function index()
	{
		$data['title'] = 'Galery';
		$data['file'] = 'Galery';
		$this->load->view('template/template', $data);
	}
}