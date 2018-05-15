<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('model_kategori','mkategori', TRUE);
	}

	public function index()
	{
		$data['title'] = 'Kategori';
		$data['jenis'] = 'Kategori';
		$data['query'] = $this->mkategori->tampil();
		$this->load->view('tempadmin/template', $data);
	}

	public function proses()
	{
		if ($this->input->post('Simpan')) {
            $this->mkategori->simpan_kategori();
        redirect('kategori/index');
        } 
        else if($this->input->post('Edit')){
            $this->mkategori->ubah();
            redirect('kategori/index');
        }
	}

	public function update_kategori($id)
	{
		$data['title'] = 'Edit Kategori';
		$data['jenis'] = 'Update Kategori';
		$data['query'] = $this->mkategori->update_tampil($id);
		$this->load->view('tempadmin/template', $data);
	}

	public function delete($id)
	{
		$this->db->where('id_kategori', $id);
		$this->db->delete('kategori');
		redirect('kategori/index');
	}
}