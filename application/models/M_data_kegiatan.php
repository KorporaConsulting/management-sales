<?php 
 
class M_data_kegiatan extends CI_Model{


	public function tampil_data(){
	    return $this->db->query("SELECT * FROM `kegiatan_sales` ORDER BY `id_kegiatan` DESC");
	}
	
	public function tampil_data_kegiatan(){
		$data = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->db->select("*");
		$this->db->from('kegiatan_sales');
		$this->db->where('nama_sales', $data['name']);
		$this->db->order_by('id_kegiatan', 'DESC');
		return $this->db->get();
	}

	public function get_kegiatan($id_kegiatan)
	{
		return $this->db->get_where('kegiatan_sales',array('id_kegiatan'=>$id_kegiatan));
	}
	
	public function checkbox($id_kegiatan){

		return $this->db->get_where('kegiatan_sales', array('id_kegiatan' => $id_kegiatan));
	}

	public function get_kegiatan1($id_kegiatan = NULL)
	{
		$query = $this->db->get_where('kegiatan_sales', array('id_kegiatan' => $id_kegiatan ));
		return $query;
	}
	
	public function hapus_data($id_kegiatan){
		$this->db->where('id_kegiatan', $id_kegiatan);
		$this->db->delete('kegiatan_sales');
	}
}