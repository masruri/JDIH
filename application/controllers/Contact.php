<?php defined('BASEPATH') OR exit('No direct script access allowed');
		
class Contact extends CI_Controller
{
	
	function __construct()
	{
		# code...
		parent::__construct();
	}

	public function index()
	{
		$data['title'] = 'Contact';
		$data['file'] = 'Contact';
		$this->load->view('template/template', $data);
	}
}