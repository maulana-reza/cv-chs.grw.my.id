<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class PenggunaModel extends CI_Model{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get_user_account($user){
		$query = $this->db->get_where('cv-chs_pengguna',$user);
		return $query->row_array();
	}

	public function get_pelanggan(){
		$this->db->from('cv-chs_pengguna');
		$this->db->where('pengguna_level','pemesan');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function register($data){
		$this->db->insert('cv-chs_pengguna',$data);
		return $this->db->affected_rows();
	}
}
