<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_auth extends CI_Model {
	public function login($user, $pass) {

		//die('YEAH');

		$this->db->select('*');
		$this->db->from('usuario');
		$this->db->where('usr_usuario', $user);
		$this->db->where('pas_usuario', md5($pass));

		$data = $this->db->get();
		echo "<pre>";
		print_r($data);
		echo "</pre>";
		die();

		if ($data->num_rows() == 1) {
			return $data->row();
		} else {
			return false;
		}
	}
}

/* End of file M_auth.php */
/* Location: ./application/models/M_auth.php */
