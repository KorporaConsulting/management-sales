<?php 
 
class M_data_public extends CI_Model{


	public function tampil_data(){
	    return $this->db->query("SELECT * FROM `public` ORDER BY `id_public` DESC");
	}
	
	public function tampil_data_publik(){
		$data = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->db->select("*");
		$this->db->from('public');
		$this->db->where('nama_sales', $data['name']);
		$this->db->order_by('id_public', 'DESC');
		return $this->db->get();
	}

	public function visit($id_public){
		return $this->db->get_where('public',array('id_public'=>$id_public));
	}

	public function report_publik()
	{
		return $this->db->query("SELECT * FROM public WHERE status_pembayaran IN ('DP', 'Sudah Lunas', 'Follow Up') ORDER BY id_public DESC");
	}

	public function detail_bayar1()
	{
		return $this->db->query("SELECT * FROM public WHERE status_pembayaran IN ('DP', 'Sudah Lunas') ");
	}
	
	public function hapus($id_public){
		$this->db->where('id_public', $id_public);
		$this->db->delete('public');
	}
	
}