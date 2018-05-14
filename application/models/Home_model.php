<?php defined('BASEPATH') OR exit('No direct script access allowed');
		
class Home_model extends CI_Model
{

	public function tampil()
	{
		$query = $this->db->get('produk_hukum');
        return $query->result_array();
	}
   function download() 
   {
  		$this->db->select('id_produk_hukum, berkas');
  		$this->db->from('produk_hukum');
  		$query = $this->db->get();
  		return $query;
   }
}