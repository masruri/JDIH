<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Model_kategori extends CI_Model
{
	public function tampil()
	{
		$query = $this->db->get('kategori');
        return $query->result_array();
	}

	public function simpan_kategori()
	{
		$data = array(
			'nama_kategori' => $this->input->post('kategori')
		);
		$this->db->insert('kategori', $data);
	}

	public function ubah()
	{
		$id_kategori = $this->input->post('id');
		$data = array(
			'nama_kategori' => $this->input->post('kategori')
		);
		$this->db->where('id_kategori', $id);
		$this->db->update('kategori', $data);
	}

	public function update_tampil($id)
	{
		return $this->db->get_where('kategori', array('id_kategori' => $id))->row();
	}
}
