<?php
class Excel_import_model extends CI_Model
{
	function select()
	{
		$this->db->order_by('id', 'DESC');
		$query = $this->db->get('excel_import_corporate');
		return $query;
	}

	function insert($data)
	{
		$this->db->insert_batch('excel_import_corporate', $data);
	}

	function pagination($limit, $start, $keyword = null){
		if ($keyword) {
			$this->db->like('nama_perusahaan', $keyword);
			$this->db->or_like('no_telp', $keyword);
			$this->db->or_like('pic', $keyword);
			$this->db->or_like('email_pic', $keyword);
			$this->db->or_like('industri', $keyword);
			$this->db->or_like('nama_sales', $keyword);
		}
		return $this->db->get('excel_import_corporate', $limit, $start)->result_array();
	}

	public function hitungdata(){
		return $this->db->get('excel_import_corporate')->num_rows();
	}
	
	public function hapus($id){
		$this->db->where('id', $id);
		$this->db->delete('excel_import_corporate');
	}

}
