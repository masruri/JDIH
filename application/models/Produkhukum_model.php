<?php defined('BASEPATH') OR exit('No direct script access allowed');
		
class Produkhukum_model extends CI_Model
{
	var $gallerypath;
  	var $gallery_path_url;

	function __construct() 
	{
		parent::__construct();
		$this->gallerypath = realpath(APPPATH . '../file');
		$this->gallery_path_url = base_url().'file/';
	}

	public function tampil()
	{
		$query = $this->db->get('produk_hukum');
        return $query->result_array();
	}

	public function simpan_produkhukum()
	{
		$konfigurasi = array('allowed_types' =>'jpg|jpeg|gif|png|bmp|rar|ppt|pdf|zip',
			             'upload_path' => $this->gallerypath,
                         'overwrite' => FALSE,
                         'remove_spaces' => TRUE,
                         'max_size' => '60000');
		$this->load->library('upload', $konfigurasi);
		$this->upload->do_upload();
		$datafile = $this->upload->data();

		$nama_file = $_FILES['userfile']['name'];

		$data = array(
			'id_kategori' => $this->input->post('kategori'),
			'produk_hukum' => $this->input->post('produkhukum'),
			'tentang' => $this->input->post('tentang'),
	        'berkas' => $nama_file
	    );
		$this->db->set('tgl','NOW()', FALSE);
		$this->db->insert('produk_hukum', $data);
	  }

	public function ubah($id)
	{
		$konfigurasi = array('allowed_types' =>'jpg|jpeg|gif|png|bmp|rar|ppt|pdf|zip',
			             'upload_path' => $this->gallerypath,
                         'overwrite' => FALSE,
                         'remove_spaces' => TRUE,
                         'max_size' => '60000');
		$this->load->library('upload', $konfigurasi);
		$this->upload->do_upload();
		$datafile = $this->upload->data();

		$nama_file = $_FILES['userfile']['name'];

		$data = array(
			'id_produk_hukum' => $this->input->post('id_produk_hukum'),
			'produk_hukum' => $this->input->post('produkhukum'),
			'tentang' => $this->input->post('tentang'),
	        'berkas' => $nama_file
	    );

		$this->db->where('id_produk_hukum', $id);
		$this->db->set('tgl','NOW()', FALSE);
		$this->db->update('produk_hukum', $data);
	}

	public function ubah_tampil($id)
	{
		// return $this->db->get_where('produk_hukum', array('id_produk_hukum'=>$id))->row();

		$this->db->select('*');
		$this->db->from('produk_hukum');
		$this->db->join('kategori', 'kategori.id_kategori = produk_hukum.id_kategori');
		$this->db->where('id_produk_hukum', $id);
		$query = $this->db->get()->row();
		return $query;

	}
}