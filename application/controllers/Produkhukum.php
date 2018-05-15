<?php defined('BASEPATH') OR exit('No direct script access allowed');
		
class Produkhukum extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('produkhukum_model', 'mproduk', TRUE);
	}

	public function index()
	{
		$data['title'] = 'Produk Hukum';
		$data['jenis'] = 'Produk Hukum';
		$data['query'] = $this->mproduk->tampil();
		$data['kategori'] = $this->db->query("SELECT * FROM kategori ORDER BY id_kategori");
		$this->load->view('tempadmin/template', $data);
	}

	public function proses()
	{
		if ($this->input->post('Simpan')) {
            $this->mproduk->simpan_produkhukum();
        redirect('produkhukum/index');
        } 
        else if($this->input->post('Edit')){
            $this->mproduk->ubah();
            redirect('produkhukum/index');
        }
	}

	public function update($id)
	{	
		$data['title'] = 'Edit Produk Hukum';
		$data['jenis'] = 'Update Produk';
		$data['query'] = $this->mproduk->ubah_tampil($id);
		$this->load->view('tempadmin/template', $data);
	}

	public function delete($id)
	{
		$this->db->where('id_produk_hukum', $id);
		$this->db->delete('produk_hukum');
		redirect('produkhukum/index');
	}
}
