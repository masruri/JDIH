<?php

class Admin_login_model extends CI_Model
{
	// cek status user, login atau tidak
	public function can_login($username, $password)
	{
		$this->db->where('username',$username);
		$this->db->where('password',md5($password));
		$query = $this->db->get('user');

		if ($query->num_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}
}