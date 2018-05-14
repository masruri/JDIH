<?php defined('BASEPATH') OR exit('No direct script access allowed');
		
class Mhimpunan_perundangan extends CI_Model
{
	public function tampil()
	{
		$this->db->select('*');
        $this->db->from('produk_hukum');
        $this->db->order_by('id_produk_hukum','desc');
        $query = $this->db->get();
        return $query->result_array();

	}
}