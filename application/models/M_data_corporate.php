<?php 
 
class M_data_corporate extends CI_Model{


	public function tampil_data(){
		return $this->db->query("SELECT * FROM `korporate` ORDER BY `id_korporate` DESC");
	}
	
	public function tampil_data_sales(){
		$data = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->db->select("*");
		$this->db->from('korporate');
		$this->db->where('nama_sales', $data['name']);
		$this->db->order_by('id_korporate', 'DESC');
		return $this->db->get();
	}

	public function visit($id_korporate){
		return $this->db->get_where('korporate',array('id_korporate'=>$id_korporate));
	}

	public function get_kegiatan1($id_korporate = NULL)
	{
		$query = $this->db->get_where('korporate', array('id_korporate' => $id_korporate ));
		return $query;
	}
	
	public function hapus($id_korporate){
		$this->db->where('id_korporate', $id_korporate);
		$this->db->delete('korporate');
	}
	
	public function edit_excel_modal($id){
		return $this->db->get_where('excel_import_corporate', array('id' => $id));
	}

}