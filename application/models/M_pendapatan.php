<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_pendapatan extends CI_Model
{

	public function tampil_data()
	{
		$data = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->db->select("*");
		$this->db->from('histori_pendapatan');
		$this->db->where('nama_sales', $data['name']);
		$this->db->order_by('id', 'DESC');
		return $this->db->get();
	}

	public function tampil_data_dashboard()
	{

		return $this->db->get_where('user', array('role_id' => 2));
		// $this->db->select("*");
		// $this->db->from('user');
		// $this->db->where('role_id' = 2);
		// $this->db->order_by('id', 'DESC');
		// return $this->db->get();
	}

	public function get_data_histori()
	{
		return $this->db->query("SELECT * FROM histori_pendapatan ORDER BY id DESC");
	}
}
